<?php

use PHPUnit\Framework\TestCase;
use App\Service\CartCalculator;
use App\Service\TV;
use App\Service\Phone;
use App\Service\Pan;

class CartCalculatorTest extends TestCase
{

    /**
     * Test the singleton pattern implementation.
     */
    public function testSingleton()
    {
        $calculator1 = CartCalculator::getInstance();
        $calculator2 = CartCalculator::getInstance();

        // Assert that both instances are the same
        $this->assertSame($calculator1, $calculator2);
    }

    /**
     * Test the calculation of the total price in the cart.
     */
    public function testCalculateTotalPrice()
    {
        $calculator = CartCalculator::getInstance();

        $tv = new TV(5000, 'Samsung', 55);
        $phone = new Phone(10000, 'Apple', 6.1);
        $pan = new Pan(1000, 'Tefal', 30);

        $calculator->addProduct($tv, 4)
            ->addProduct($phone, 2)
            ->addProduct($pan, 2);

        $totalPrice = $calculator->calculateTotalPrice();

        // Assert that the total price is calculated correctly
        $this->assertEquals(42000, $totalPrice);
    }


    /**
     * Test deleting products from the cart by brand name.
     */
    public function testDeleteProductsByBrand()
    {
        $calculator = CartCalculator::getInstance();

        $tv1 = new TV(45000, 'Samsung', 55);
        $pan = new Pan(3400, 'Tefal', 30);

        $calculator->addProduct($tv1, 2)
            ->addProduct($pan, 3);

        // Delete product with the brand "Samsung"
        $calculator->deleteProductByBrand('Samsung');

        // Assert that products with the brand "Samsung" are deleted
        $products = $calculator->getProducts();
        foreach ($products as $product) {
            $this->assertNotEquals('Samsung', $product->getBrand());
        }
    }
}
