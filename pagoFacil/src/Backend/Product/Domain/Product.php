<?php


namespace Uetiko\Prueba\Backend\Product\Domain;


class Product
{
    /** @var ProductId $id */
    private $id;
    public function __construct(ProductId $id)
    {
        $this->id = $id;
    }

    /**
     * @return ProductId
     */
    public function getId(): ProductId
    {
        return $this->id;
    }
}
