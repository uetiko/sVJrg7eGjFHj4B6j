<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Shared\Domain\ValueObject;

use InvalidArgumentException;
use Ramsey\Uuid\Uuid as UuidLib;

class Uuid
{
    /** @var string $value */
    private $value = null;

    /**
     * Uuid constructor.
     * @param string $value
     * @throws InvalidArgumentException
     */
    public function __construct(string $value)
    {
        $this->validateUuid($value);
        $this->value = $value;
    }

    /**
     * @param string $value
     * @throws InvalidArgumentException
     */
    protected function validateUuid(string $value)
    {
        if(!UuidLib::isValid($value)) {
            throw new InvalidArgumentException(
                sprintf(
                    '%s does not allow value for %s',
                    $value, static::class
                )
            );
        }
    }

    static public function generateUuid(): self
    {
        return new self(UuidLib::uuid4()->toString());
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
