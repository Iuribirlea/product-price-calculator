<?php

namespace App\Service\Test;

use App\Service\CartCalculator;
use PHPUnit\Framework\TestCase;
use App\Service\TV;
use App\Service\Phone;
use App\Service\Pan;

class ProductTest extends TestCase
{
    /**
     * Test the retrieval of product details.
     */
    public function testGetDetails()
    {
        $tv = new TV(5000, 'Samsung', 55);
        $phone = new Phone(10000, 'Apple', 6.1);
        $pan = new Pan(2000, 'Tefal', 30);

        // Assert that the details of each product are returned correctly
        $this->assertEquals('TV: Brand - Samsung, Price - 5000, Diagonal - 55', $tv->getDetails());
        $this->assertEquals('Phone: Brand - Apple, Price - 10000, Diagonal - 6.1', $phone->getDetails());
        $this->assertEquals('Pan: Brand - Tefal, Price - 2000, Diameter - 30', $pan->getDetails());
    }

    /**
     * Test adding a product with a quantity less than 1.
     */
    public function testAddProductWithInvalidQuantity()
    {
        $calculator = CartCalculator::getInstance();
        $tv = new TV(43000, 'Samsung', 55);

        // Attempt to add a TV with a quantity less than 1
        $this->expectException(\InvalidArgumentException::class);
        $calculator->addProduct($tv, 0);
    }
}
