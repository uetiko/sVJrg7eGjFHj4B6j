<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\CreditCard\Infrastructure;

use Illuminate\Support\Facades\DB;
use stdClass;
use DateTime;
use Uetiko\Prueba\Backend\CreditCard\Domain\CardId;
use Uetiko\Prueba\Backend\CreditCard\Domain\CreditCard;
use Uetiko\Prueba\Backend\CreditCard\Domain\Interfaces\CreditCardRepositoryInterfaces;
use Uetiko\Prueba\Backend\CreditCard\Domain\Exceptions\CreditCardException;

class CreditCardRepository implements CreditCardRepositoryInterfaces
{
    /**
     * @param CreditCard $creditCard
     */
    public function save(CreditCard $creditCard): void
    {
        DB::table('credit_card')->insert(
            [
                'id' => $creditCard->getId()->getValue(),
                'type_card_id' => $this->getTypeCardUuidByName(
                    $creditCard->getTypeCard()
                ),
                'number' => encrypt($creditCard->getNumber()),
                'ctv' => encrypt($creditCard->getCvt()),
                'expiration_month' => encrypt(
                    $creditCard->getExpirationMonth()
                ),
                'expiration_year' => encrypt($creditCard->getExpirationYear()),
                'last_digits' => $creditCard->getLastDigits()
            ]
        );
    }

    /**
     * @param CardId $id
     * @return CreditCard
     * @throws CreditCardException
     * @throws \Exception
     */
    public function find(CardId $id): CreditCard
    {
        $card = DB::table('credit_card')
            ->where('id', $id->getValue())->first();

        if(is_null($card)){
            throw CreditCardException::NotExist();
        }

        $type = $this->getTypeCardById(new CardId($card->type_card_id));

        if(is_null($type)){
            throw CreditCardException::NotExistTypeCard();
        }

        $expiration = new DateTime();
        $expiration->setDate(
            intval(decrypt($card->expiration_year)),
            intval(decrypt($card->expiration_month))
        );

        return new CreditCard(
            new CardId($card->id), $type->name, decrypt($card->number),
            decrypt($card->cvt), $expiration
        );
    }

    /**
     * @return \ArrayAccess
     */
    public function findAll(): \ArrayAccess
    {
        // TODO: Implement findAll() method.
    }

    /**
     * @param string $name
     * @return stdClass
     * @throws CreditCardException
     */
    public function findTypeCardByName(string $name): stdClass
    {
        $type = DB::table('cat_type_card')
            ->where('name', $name)->first();

        if(is_null($type)){
            throw CreditCardException::NotExistTypeCard();
        }

        return $type;
    }

    /**
     * @param string $name
     * @return string
     * @throws CreditCardException
     */
    public function getTypeCardUuidByName(string $name): string {
        $type = $this->findTypeCardByName($name);
        return $type->id;
    }

    /**
     * @param CardId $id
     * @return stdClass
     * @throws CreditCardException
     */
    public function getTypeCardById(CardId $id): stdClass
    {
        $type = DB::table('cat_type_card')
            ->where('id', $id->getValue())->first();

        if(is_null($type)){
            throw CreditCardException::NotExistTypeCard();
        }

        return $type;
    }
}
