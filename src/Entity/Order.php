<?php

namespace App\Entity;

class Order
{
    private int $quantity;
    private int $unitPrice;

    public function __construct(int $quantity, int $unitPrice)
    {
        if ($quantity < 0) {
            throw new RuntimeException('Amount cannot be negative');
        }

        if ($unitPrice < 0) {
            throw new RuntimeException('Amount cannot be negative');
        }

        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getUnitPrice(): int
    {
        return $this->unitPrice;
    }

    /**
     * @param int $unitPrice
     */
    public function setUnitPrice(int $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }
}