<?php

namespace App\Service;
class ProductManager implements ProductManagerInterface
{
    private array $products;

    public function __construct()
    {
        $this->products = [];
    }

    /**
     * Add a product to the manager's list of products.
     *
     * @param ProductInterface $product The product to add.
     * @param int $quantity
     * @return void
     */
    public function addProduct(ProductInterface $product, int $quantity): void
    {
        if ($quantity <= 0) throw new \InvalidArgumentException('product quantity value must me not less then 1');

        for ($i = 0; $i < $quantity; $i++) {
            $this->products[] = $product;
        }
    }

    /**
     * Get all the products managed by the manager.
     *
     * @return array The list of products.
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * Delete product by brand name from the manager's list of products.
     *
     * @param string $brand The brand name of the products to delete.
     * @return void
     */
    public function deleteProductByBrand(string $brand): void
    {
        $this->products = array_filter($this->products, function ($product) use ($brand) {
            return $product->getBrand() !== $brand;
        });
    }
}
