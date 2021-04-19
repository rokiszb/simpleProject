<?php

namespace App\Entity;

class Inventory
{
    private array $soldItems;
    private ProductQueue $productQueue;

    public function __construct()
    {
        $this->productQueue = new ProductQueue();
    }

    public function buy(Order $order)
    {
        $quantity = $order->getQuantity();

        for($count = 0; $count < $quantity; $count++) {
            $this->productQueue->addToQueue(new Product($order->getUnitPrice()));
        }
    }

    public function sell(Order $order)
    {
        $quantity = $order->getQuantity();

        for($count = 0; $count < $quantity; $count++) {
            $product = $this->productQueue->removeFromQueue();
            $product->setSellPrice($order->getUnitPrice());
            $this->soldItems[] = $product;
        }
    }

    /**
     * @return array
     */
    public function getSoldItems(): array
    {
        return $this->soldItems;
    }
}