<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\PagoFacil\Infrastructure;

use Uetiko\Prueba\Backend\Company\Domain\Interfaces\CompanyRepository;
use Uetiko\Prueba\Backend\Order\Domain\Interfaces\OrderRepository;
use Uetiko\Prueba\Backend\PagoFacil\Domain\ErrorId;
use Uetiko\Prueba\Backend\PagoFacil\Domain\Exceptions\PagoFacilException;
use Uetiko\Prueba\Backend\PagoFacil\Domain\Interfaces\TransferRepository;
use Uetiko\Prueba\Backend\PagoFacil\Domain\MethodId;
use Uetiko\Prueba\Backend\PagoFacil\Domain\TransferId;
use Uetiko\Prueba\Backend\PagoFacil\Domain\Interfaces\MethodRepository;
use Uetiko\Prueba\Backend\User\Domain\Interfaces\UserRepositoryInterfaces;

class Transfer implements TransferRepository
{
    /** @var UserRepositoryInterfaces $userRepository */
    private $userRepository;
    /** @var CompanyRepository $CompanyRepository */
    private $CompanyRepository;
    /** @var OrderRepository $orderRepository */
    private $orderRepository;
    /** @var MethodRepository $methodRepository */
    private $methodRepository;

    /**
     * Transfer constructor.
     * @param UserRepositoryInterfaces $userRepository
     * @param CompanyRepository $CompanyRepository
     * @param OrderRepository $orderRepository
     * @param MethodRepository $methodRepository
     */
    public function __construct(
        UserRepositoryInterfaces $userRepository,
        CompanyRepository $CompanyRepository,
        OrderRepository $orderRepository,
        MethodRepository $methodRepository
    )
    {
        $this->userRepository = $userRepository;
        $this->CompanyRepository = $CompanyRepository;
        $this->orderRepository = $orderRepository;
        $this->methodRepository = $methodRepository;
    }


    /**
     * @param \Uetiko\Prueba\Backend\PagoFacil\Domain\Transfer $transfer
     * @throws PagoFacilException
     */
    public function save(\Uetiko\Prueba\Backend\PagoFacil\Domain\Transfer $transfer): void
    {
        // TODO: Implement save() method.
    }

    /**
     * @param \Uetiko\Prueba\Backend\PagoFacil\Domain\Transfer $transfer
     * @throws PagoFacilException
     */
    public function update(\Uetiko\Prueba\Backend\PagoFacil\Domain\Transfer $transfer): void
    {
        // TODO: Implement update() method.
    }

    /**
     * @param TransferId $id
     * @throws PagoFacilException
     */
    public function delete(TransferId $id): void
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param TransferId $id
     * @return \Uetiko\Prueba\Backend\PagoFacil\Domain\Transfer
     * @throws PagoFacilException
     */
    public function findById(TransferId $id): \Uetiko\Prueba\Backend\PagoFacil\Domain\Transfer
    {
        // TODO: Implement findById() method.
    }

    /**
     * @param MethodId $id
     * @return \Uetiko\Prueba\Backend\PagoFacil\Domain\Transfer
     * @throws PagoFacilException
     */
    public function findByMethodId(MethodId $id): \Uetiko\Prueba\Backend\PagoFacil\Domain\Transfer
    {
        // TODO: Implement findByMethodId() method.
    }

    /**
     * @param string $method
     * @return \Uetiko\Prueba\Backend\PagoFacil\Domain\Transfer
     * @throws PagoFacilException
     */
    public function findByMethod(string $method): \Uetiko\Prueba\Backend\PagoFacil\Domain\Transfer
    {
        // TODO: Implement findByMethod() method.
    }

    /**
     * @param ErrorId $id
     * @return \Uetiko\Prueba\Backend\PagoFacil\Domain\Transfer
     * @throws PagoFacilException
     */
    public function findByError(ErrorId $id): \Uetiko\Prueba\Backend\PagoFacil\Domain\Transfer
    {
        // TODO: Implement findByError() method.
    }
}
