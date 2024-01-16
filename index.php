<?php

require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Toy.php';
require_once __DIR__ . '/models/Category.php';

$prova_cibo = new Food('Cibo nome', 14.73, 'src image', Category::GATTI, 'Vegetarian', ['potatoes', 'carrots', 'apricot'], '04/08/2027', []);

$prova_cibo->printProduct();

echo "<hr/>";

$prova_gioco = new Toy('Gioco nome', 8.98, 'src image', Category::GATTI, 'red', 'ball');

$prova_gioco->printProduct();
