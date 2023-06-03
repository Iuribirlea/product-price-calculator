<?php

namespace App\Service;

class CartCalculator implements CartCalculatorInterface
{
    /**
     * @var ProductManager
     */
    private ProductManager $productManager;
    /**
     * @var CartCalculator|null
     */
    private static ?CartCalculator $instance = null;


    /**
     * CartCalculator constructor.
     * The constructor is private to enforce singleton pattern.
     */
    private function __construct() {
        $this->productManager = new ProductManager();
    }

    /**
     * Get the instance of the CartCalculator class.
     * @return CartCalculator The instance of the CartCalculator class.
     */
    public static function getInstance(): CartCalculator
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Add a product to the cart.
     * @param Product $product The product to add to the cart.
     * @param int $quantity The quantity of the product to add.
     */
    public function addProduct(ProductInterface $product, int $quantity = 1): self
    {
        $this->productManager->addProduct($product, $quantity);

        return $this;
    }

    /**
     * Calculate the total price of all products in the cart.
     * @return float The total price of all products in the cart.
     */
    public function calculateTotalPrice(): float
    {
        $totalPrice = 0;
        foreach ($this->productManager->getProducts() as $product) {
            $totalPrice += $product->getPrice();
        }
        return $totalPrice;
    }

    /**
     * get list of all products in cart
     * @return array
     */
    public function getProducts(): array
    {
        return $this->productManager->getProducts();
    }

    /**
     * Delete products from the cart by brand name.
     *
     * @param string $brand The brand name of the products to delete.
     * @return void
     */
    public function deleteProductByBrand(string $brand): void
    {
        $this->productManager->deleteProductByBrand($brand);
    }
}