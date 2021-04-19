<?php

namespace App\Entity;

class Product
{
    private float $buyPrice;
    private float $sellPrice;
    private string $productName;

    public function __construct(int $buyPrice, $productName = 'default product')
    {
        $this->productName = $productName;
        $this->buyPrice = $buyPrice;
    }


    /**
     * @return float
     */
    public function getBuyPrice(): float
    {
        return $this->buyPrice;
    }

    /**
     * @return float
     */
    public function getSellPrice(): float
    {
        return $this->sellPrice;
    }

    /**
     * @param float $sellPrice
     */
    public function setSellPrice(float $sellPrice): void
    {
        $this->sellPrice = $sellPrice;
    }

    /**
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     */
    public function setProductName(string $productName): void
    {
        $this->productName = $productName;
    }


}