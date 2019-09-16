<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Address\Domain\Interfaces;


use Uetiko\Prueba\Backend\Address\Domain\Address;
use Uetiko\Prueba\Backend\Address\Domain\AddressId;
use Uetiko\Prueba\Backend\User\Domain\UserId;

interface AddressRepositoryInterface
{
    const TABLE = 'address';

    public function save(Address $address, UserId $userId):void;

    public function findById(AddressId $id):void;

    public function update(Address $address): void;
}
