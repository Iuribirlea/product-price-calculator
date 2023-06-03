<?php

namespace App\Service;
class TV extends Product
{
    /**
     * @var float diagonal of TV product
     */
    private float $diagonal;

    /**
     * TV constructor.
     * @param float $price The price of the TV.
     * @param string $brand The brand of the TV.
     * @param float $diagonal The diagonal size of the TV.
     */
    public function __construct(float $price, string $brand, float $diagonal)
    {
        parent::__construct($price, $brand);
        $this->diagonal = $diagonal;
    }

    /**
     * Get the details of the TV.
     * @return string The details of the TV.
     */
    public function getDetails(): string
    {
        return "TV: Brand - {$this->brand}, Price - {$this->price}, Diagonal - {$this->diagonal}";
    }
}