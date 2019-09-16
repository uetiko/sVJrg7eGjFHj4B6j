<?php
declare(strict_types=1);
namespace Uetiko\Prueba\Backend\PagoFacil\Domain;

use Symfony\Component\VarDumper\Caster\TraceStub;
use Uetiko\Prueba\Backend\Order\Domain\Order;
use Uetiko\Prueba\Backend\PagoFacil\Domain\TransferId;
use DateTime;

class Transfer
{
    /** @var TransferId $id */
    private $id;
    /** @var Method */
    private $method;
    /** @var int $authorization */
    private $authorization;
    /** @var int $authorized */
    private $authorized;
    /** @var string $message */
    private $message;
    /** @var string $describe */
    private $describe;
    /** @var Error $error */
    private  $error;
    /** @var DateTime */
    private $initDate;
    /** @var DateTime $endDate */
    private $endDate;
    /** @var Order $order */
    private $order;

    public function __construct(
        TransferId $id, Method $method, int $authorization, int $authorized,
        string $message, string $describe, DateTime $initDate,
        DateTime $endDate, ?Error $error=null
    )
    {
        $this->id = $id;
        $this->method = $method;
        $this->authorization =$authorization;
        $this->authorized = $authorized;
        $this->message = $message;
        $this->describe = $describe;
        $this->initDate = $initDate;
        $this->endDate = $endDate;
        $this->error = $error;
    }

    /**
     * @return \Uetiko\Prueba\Backend\PagoFacil\Domain\TransferId
     */
    public function getId(): \Uetiko\Prueba\Backend\PagoFacil\Domain\TransferId
    {
        return $this->id;
    }

    /**
     * @return Method
     */
    public function getMethod(): Method
    {
        return $this->method;
    }

    /**
     * @return int
     */
    public function getAuthorization(): int
    {
        return $this->authorization;
    }

    /**
     * @return int
     */
    public function getAuthorized(): int
    {
        return $this->authorized;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getDescribe(): string
    {
        return $this->describe;
    }

    /**
     * @return Error
     */
    public function getError(): ?Error
    {
        return $this->error;
    }

    /**
     * @return DateTime
     */
    public function getInitDate(): DateTime
    {
        return $this->initDate;
    }

    /**
     * @return DateTime
     */
    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }
}
