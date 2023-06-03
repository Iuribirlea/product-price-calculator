<?php

namespace App\Service;

class Pan extends Product
{
    /**
     * @var float diameter value of pan product
     */
    private float $diameter;

    /**
     * Pan constructor.
     * @param float $price The price of the pan.
     * @param string $brand The brand of the pan.
     * @param float $diameter The diameter of the pan.
     */
    public function __construct(float $price, string $brand, float $diameter)
    {
        parent::__construct($price, $brand);
        $this->diameter = $diameter;
    }

    /**
     * Get the details of the pan.
     * @return string The details of the pan.
     */
    public function getDetails(): string
    {
        return "Pan: Brand - {$this->brand}, Price - {$this->price}, Diameter - {$this->diameter}";
    }
}