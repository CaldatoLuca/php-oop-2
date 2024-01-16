<?php

require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Toy.php';
require_once __DIR__ . '/models/Kennel.php';
require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Shop.php';

$shop = new Shop('Nome Shop');

$prova_cibo = new Food('Cibo nome', 14.73, 'src image', Category::GATTI, 'Vegetarian', ['potatoes', 'carrots', 'apricot'], '04/08/2027', []);

$prova_gioco = new Toy('Gioco nome', 8.98, 'src image', Category::GATTI, 'red', 'ball');

$prova_cuccia = new Kennel('Cuccia nome', 78.53, 'src image', Category::CANI, 'plastic', 'open');




$shop->addToCatalog($prova_cibo);
$shop->addToCatalog($prova_gioco);
$shop->addToCatalog($prova_cuccia);

foreach ($shop->catalog as $product) {
    $shop->printCatalogProduct($product);
    echo "<hr/>";
}
