<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\Contact\Domain\Interfaces;

use Uetiko\Prueba\Backend\Contact\Domain\Contact;
use Uetiko\Prueba\Backend\Contact\Domain\ContactId;
use Uetiko\Prueba\Backend\Contact\Domain\Email;
use Uetiko\Prueba\Backend\Contact\Domain\Exceptions\ContactException;
use Uetiko\Prueba\Backend\User\Domain\UserId;

interface ContactRepository
{
    const TABLE = 'cat_digital_contact';

    /**
     * @param Contact $contact
     * @param UserId $userId
     * @throws ContactException
     */
    public function save(Contact $contact, UserId $userId): void;

    /**
     * @param Contact $contact
     * @throws ContactException
     */
    public function update(Contact $contact):void;

    /**
     * @param ContactId $id
     * @throws ContactException
     */
    public function delete(ContactId $id): void;

    /**
     * @param ContactId $id
     * @return Contact
     * @throws ContactException
     */
    public function findById(ContactId $id):Contact;

    /**
     * @param UserId $userId
     * @return Contact
     * @throws ContactException
     */
    public function findByUserId(UserId $userId): Contact;

    /**
     * @param string $code
     * @return Contact
     * @throws ContactException
     */
    public function findByCode(string $code): Contact;

    /**
     * @param string $email
     * @return Contact
     * @throws ContactException
     */
    public function findByEmail(string $email):Contact;
}
