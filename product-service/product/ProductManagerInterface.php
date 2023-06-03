<?php

namespace App\Service;

/**
 * Interface for the ProductManager class.
 */
interface ProductManagerInterface
{
    /**
     * Add a product to the manager's list of products.
     *
     * @param ProductInterface $product The product to add.
     * @param int $quantity
     * @return void
     */
    public function addProduct(ProductInterface $product, int $quantity): void;

    /**
     * Get all the products managed by the manager.
     *
     * @return array The list of products.
     */
    public function getProducts(): array;

    /**
     * Delete products by brand name from the manager's list of products.
     *
     * @param string $brand The brand name of the products to delete.
     * @return void
     */
    public function deleteProductByBrand(string $brand): void;
}
