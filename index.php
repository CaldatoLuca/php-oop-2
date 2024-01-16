<?php

require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Category.php';


$prova = new Food('Cibo Prova', 13.67, 'image src', 'Meat', ['pollo', 'pesce', 'ceci'], '23/12/27', []);

$prova->printProduct();
