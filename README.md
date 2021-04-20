simple margin counter for products done in first in first out (FIFO) principle

to start project run
````
composer dump
````
Simply add orders to inventory in buy, sell order.

for example
````
$inventory->buy(new Order(10, 17));

$inventory->sell(new Order(6, 21));
````