<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\CreditCard\Domain\Interfaces;

use \stdClass;
use Uetiko\Prueba\Backend\CreditCard\Domain\CardId;
use Uetiko\Prueba\Backend\CreditCard\Domain\CreditCard;
use Uetiko\Prueba\Backend\CreditCard\Domain\Exceptions\CreditCardException;

interface CreditCardRepositoryInterfaces
{
    /**
     * @param CreditCard $creditCard
     */
    public function save(CreditCard $creditCard): void;

    /**
     * @param CardId $id
     * @return CreditCard
     * @throws CreditCardException
     */
    public function find(CardId $id): CreditCard;

    /**
     * @return \ArrayAccess
     */
    public function findAll(): \ArrayAccess;

    /**
     * @param string $name
     * @return stdClass
     * @throws CreditCardException
     */
    public function findTypeCardByName(string $name): stdClass;

    /**
     * @param string $name
     * @return string
     * @throws CreditCardException
     */
    public function getTypeCardUuidByName(string $name): string;

    /**
     * @param CardId $id
     * @return stdClass
     * @throws CreditCardException
     */
    public function getTypeCardById(CardId $id): stdClass;
}
