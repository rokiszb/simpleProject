<?php

namespace App\Entity;

/**
 * Class ProductQueue
 * First in First out (FIFO)
 */
class ProductQueue
{
    /**
     * @var Product[]
     */
    private array $products = [];

    public function addToQueue(Product $product)
    {
        $this->products[] = $product;
    }

    public function removeFromQueue(): ?Product
    {
        if (empty($this->products)) {
            throw new RuntimeException('No products in queue');
        }

        return array_shift($this->products);
    }

}