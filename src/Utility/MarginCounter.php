<?php

namespace App\Utility;

use App\Entity\Inventory;
use App\Entity\Product;

class MarginCounter
{
    private Inventory $inventory;

    public function __construct(Inventory $inventory)
    {
        $this->inventory = $inventory;
    }

    public function getTotalMargin(): int
    {
        $diff = [];
        $items = $this->inventory->getSoldItems();

        /** @var Product $item */
        foreach ($items as $item) {

            $diff[] = $item->getSellPrice() - $item->getBuyPrice();
        }

        return array_sum($diff);
    }
}