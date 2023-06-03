<?php

namespace App\Service;

class Phone extends Product
{
    private float $diagonal;

    /**
     * Phone constructor.
     * @param float $price The price of the phone.
     * @param string $brand The brand of the phone.
     * @param float $diagonal The diagonal size of the phone.
     */
    public function __construct(float $price, string $brand, float $diagonal)
    {
        parent::__construct($price, $brand);
        $this->diagonal = $diagonal;
    }

    /**
     * Get the details of the phone.
     * @return string The details of the phone.
     */
    public function getDetails(): string
    {
        return "Phone: Brand - {$this->brand}, Price - {$this->price}, Diagonal - {$this->diagonal}";
    }
}