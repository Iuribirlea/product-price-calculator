<?php

namespace App\Service;
/**
 * Interface for the product class.
 */
interface ProductInterface
{
    /**
     * Get the price of the product.
     *
     * @return float The price of the product.
     */
    public function getPrice(): float;

    /**
     * Set the price of the product.
     *
     * @param float $price
     * @return void The price of the product.
     */
    public function setPrice(float $price): void;

    /**
     * Get the brand of the product.
     *
     * @return string The brand of the product.
     */
    public function getBrand(): string;

    /**
     * Set the brand of the product.
     *
     * @param string $brand
     * @return void The brand of the product.
     */
    public function setBrand(string $brand): void;



}
