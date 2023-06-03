<?php

namespace App\Service;

/**
 * Abstract realization of Class product with price and brand methods
 */
abstract class Product implements ProductInterface
{
    /**
     * @var float product price
     */
    protected float $price;
    /**
     * @var string product brand
     */
    protected string $brand;

    /**
     * product constructor.
     * @param float $price The price of the product.
     * @param string $brand The brand of the product.
     */
    public function __construct(float $price, string $brand)
    {
        $this->price = $price;
        $this->brand = $brand;
    }

    /**
     * Get the price of the product.
     * @return float The price of the product.
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Set the price of the product
     * @param float $price
     * @return void
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * Get the brand of the product.
     * @return string The brand of the product.
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * Set the brand of the product.
     * @param string $brand
     * @return void
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * Get the details of the product.
     * @return string The details of the product.
     */
    abstract public function getDetails(): string;
}



/*// Example usage:

$calculator = CartCalculator::getInstance();

$tv = new TV(50000, 'Samsung', 55);
$phone = new Phone(10000, 'Apple', 6.1);
$pan = new Pan(2000, 'Tefal', 30);

$calculator->addProduct($tv, 10);
$calculator->addProduct($phone, 2);
$calculator->addProduct($pan, 3);

$totalPrice = $calculator->calculateTotalPrice();
echo "Total Price: $totalPrice";*/
