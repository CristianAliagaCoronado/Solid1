<?php

include 'CoffeeShop.php';
include 'Menu.php';

$products = [
    ['id' => 1, 'name' => 'Negro', 'price' => '25'],
    ['id' => 2, 'name' => 'Latté', 'price' => '35'],
    ['id' => 3, 'name' => 'Capuchino', 'price' => '45'],
];

$shop = new CoffeeShop();
$menu = new Menu();

$shop->addProducts($products);

echo $menu->viewMenu($shop->getProducts());

?>