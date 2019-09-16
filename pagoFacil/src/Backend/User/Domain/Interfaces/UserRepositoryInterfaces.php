<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\User\Domain\Interfaces;

use stdClass;
use Uetiko\Prueba\Backend\Address\Domain\Exceptions\AddressException;
use Uetiko\Prueba\Backend\Contact\Domain\Contact;
use Uetiko\Prueba\Backend\Contact\Domain\Exceptions\ContactException;
use Uetiko\Prueba\Backend\User\Domain\Exceptions\UserException;
use Uetiko\Prueba\Backend\User\Domain\User;
use Uetiko\Prueba\Backend\User\Domain\UserId;

interface UserRepositoryInterfaces
{
    const TABLE = 'user';
    /**
     * @param User $user
     * @throws UserException
     */
    public function save(User $user): void;

    /**
     * @param UserId $id
     * @return User
     * @throws UserException
     */
    public function findById(UserId $id): User;

    /**
     * @param string $email
     * @return User
     * @throws UserException
     */
    public function findByEmail(string $email): User;

    /**
     * @param User $user
     * @throws UserException
     */
    public function updateUser(User $user): void;

    /**
     * @param User $user
     * @throws UserException
     */
    public function deleteUser(User $user): void;

    /**
     * @return \ArrayAccess
     * @throws UserException
     */
    public function findAll(): \ArrayAccess;

    /**
     * @param User $user
     * @throws AddressException
     */
    public function saveAddress(User $user): void;

    /**
     * @param User $user
     * @throws ContactException
     */
    public function saveContact(User $user): void;
}
