<?php

namespace App\Service;
/**
 * Interface for the CartCalculator class.
 */
interface CartCalculatorInterface
{
    /**
     * Add a product to the cart with the specified quantity.
     *
     * @param ProductInterface $product The product to add to the cart.
     * @param int $quantity The quantity of the product to add.
     * @return CartCalculatorInterface
     */
    public function addProduct(ProductInterface $product, int $quantity): self;

    /**
     * Calculate and return the total price of all products in the cart.
     *
     * @return float The total price of all products in the cart.
     */
    public function calculateTotalPrice(): float;

    /**
     * Get the products in the cart along with their quantities.
     *
     * @return array The products in the cart with their quantities.
     */
    public function getProducts(): array;
}
