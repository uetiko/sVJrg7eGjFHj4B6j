<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Contact\Infrastructure;

use Uetiko\Prueba\Backend\Contact\Domain\Contact;
use Uetiko\Prueba\Backend\Contact\Domain\ContactId;
use Uetiko\Prueba\Backend\Contact\Domain\Exceptions\ContactException;
use Uetiko\Prueba\Backend\Contact\Domain\Interfaces\ContactRepository as
    Repository;
use Uetiko\Prueba\Backend\User\Domain\UserId;

class ContactRepository implements Repository
{
    /**
     * @param Contact $contact
     * @param UserId $userId
     * @throws ContactException
     */
    public function save(Contact $contact, UserId $userId): void
    {
        // TODO: Implement save() method.
    }

    /**
     * @param Contact $contact
     * @throws ContactException
     */
    public function update(Contact $contact): void
    {
        // TODO: Implement update() method.
    }

    /**
     * @param ContactId $id
     * @throws ContactException
     */
    public function delete(ContactId $id): void
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param ContactId $id
     * @return Contact
     * @throws ContactException
     */
    public function findById(ContactId $id): Contact
    {
        // TODO: Implement findById() method.
    }

    /**
     * @param UserId $userId
     * @return Contact
     * @throws ContactException
     */
    public function findByUserId(UserId $userId): Contact
    {
        // TODO: Implement findByUserId() method.
    }

    /**
     * @param string $code
     * @return Contact
     * @throws ContactException
     */
    public function findByCode(string $code): Contact
    {
        // TODO: Implement findByCode() method.
    }

    /**
     * @param string $email
     * @return Contact
     * @throws ContactException
     */
    public function findByEmail(string $email): Contact
    {
        // TODO: Implement findByEmail() method.
    }
}
