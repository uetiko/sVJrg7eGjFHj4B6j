<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\User\Infrastructure;

use Illuminate\Support\Facades\DB;
use Uetiko\Prueba\Backend\User\Domain\Exceptions\UserException;
use Uetiko\Prueba\Backend\User\Domain\Interfaces\UserRepositoryInterfaces;
use Uetiko\Prueba\Backend\User\Domain\User;
use Uetiko\Prueba\Backend\User\Domain\UserId;

class UserRepository implements UserRepositoryInterfaces
{
    /**
     * @param User $user
     * @throws UserException
     */
    public function save(User $user): void
    {
        DB::table('user')->insert(
            [
                'id' => $user->getId()->getValue(),
                'name' => $user->getName(),
                'middle_name' => $user->getMiddleName(),
                'last_name' => $user->getLastName(),
            ]
        );
    }

    /**
     * @param UserId $id
     * @return User
     * @throws UserException
     */
    public function findById(UserId $id): User
    {
        $user = DB::table(self::TABLE)
            ->where('id', $id->getValue())
            ->first();

        if(is_null($user)){
            throw UserException::NotExist();
        }

        return new User(
            new UserId($user->id), $user->name, $user->middle_name,
            $user->last_name
        );
    }

    /**
     * @param string $email
     * @return User
     * @throws UserException
     */
    public function findByEmail(string $email): User
    {
        // TODO: Implement findByEmail() method.
    }

    /**
     * @param User $user
     * @throws UserException
     */
    public function updateUser(User $user): void
    {
        // TODO: Implement updateUser() method.
    }

    /**
     * @param User $user
     * @throws UserException
     */
    public function deleteUser(User $user): void
    {
        // TODO: Implement deleteUser() method.
    }

    /**
     * @return \ArrayAccess
     * @throws UserException
     */
    public function findAll(): \ArrayAccess
    {
        // TODO: Implement findAll() method.
    }
}
