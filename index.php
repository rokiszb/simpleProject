<?php

use App\Entity\Order;
use App\Utility\MarginCounter;

include 'vendor/autoload.php';

$inventory = new \App\Entity\Inventory();

$inventory->buy(new Order(10, 17));
$inventory->sell(new Order(6, 21));

$inventory->buy(new Order(10, 20));
$inventory->sell(new Order(8, 23));

$marginCounter = new MarginCounter($inventory);
$total = $marginCounter->getTotalMargin();
var_dump($total);