<?php

//importo i file necessari
require_once __DIR__ . '/../models/Product.php';
require_once __DIR__ . '/../models/Food.php';
require_once __DIR__ . '/../models/Toy.php';
require_once __DIR__ . '/../models/Kennel.php';
require_once __DIR__ . '/../models/Category.php';
require_once __DIR__ . '/../models/Shop.php';
require_once __DIR__ . '/../database/db.php';

//creo il mio oggetto negozio
$shop = new Shop('BoolCommerce');

//aggiungo prodotti al catalogo con controllo sul type
foreach ($products as $product) {
    if ($product['type'] === 'food') {
        $product = new Food($product['type'], $product['name'], $product['price'], $product['image'], $product['category'], $product['food_type'], $product['ingredients'], $product['expiration_date'], $product['allergens'],);
    } elseif ($product['type'] === 'toy') {
        $product = new Toy($product['type'], $product['name'], $product['price'], $product['image'], $product['category'], $product['color'], $product['toy_type']);
    } elseif ($product['type'] === 'kennel') {
        $product = new Kennel($product['type'], $product['name'], $product['price'], $product['image'], $product['category'], $product['material'], $product['kennel_type']);
    }

    $shop->addToCatalog($product);
}

/*
//metodo con db con tre array, uno per prodotto

//aggiungo i cibi al catalogo
foreach ($foods as $food) {
    $food = new Food($food['type'], $food['name'], $food['price'], $food['image'], $food['category'], $food['food_type'], $food['ingredients'], $food['expiration_date'], $food['allergens'],);
    $shop->addToCatalog($food);
};

//aggiungo i giochi al catalogo
foreach ($toys as $toy) {
    $toy = new Toy($toy['type'], $toy['name'], $toy['price'], $toy['image'], $toy['category'], $toy['color'], $toy['toy_type']);
    $shop->addToCatalog($toy);
};

//aggiungo le cuccie al catalogo
foreach ($kennels as $kennel) {
    $kennel = new Kennel($kennel['type'], $kennel['name'], $kennel['price'], $kennel['image'], $kennel['category'], $kennel['material'], $kennel['kennel_type']);
    $shop->addToCatalog($kennel);
};
*/


// echo '<pre>';
// var_dump($shop->catalog);
// echo '</pre>';

// foreach ($shop->catalog as $product) {
//     $shop->printCatalogProduct($product);
//     echo "<hr/>";
// }
/*
//creo tre oggetti da inserire nel catalogo del negozio
$prova_cibo = new Food('Cibo nome', 14.73, 'src image', Category::GATTI, 'Vegetarian', ['potatoes', 'carrots', 'apricot'], '04/08/2027', []);

$prova_gioco = new Toy('Gioco nome', 8.98, 'src image', Category::GATTI, 'red', 'ball');

$prova_cuccia = new Kennel('Cuccia nome', 78.53, 'src image', Category::CANI, 'plastic', 'open');

//inserisco gli oggetti creati nel catalogo
$shop->addToCatalog($prova_cibo);
$shop->addToCatalog($prova_gioco);
$shop->addToCatalog($prova_cuccia);

//stampo a schermo gli oggetti creati
foreach ($shop->catalog as $product) {
    $shop->printCatalogProduct($product);
    echo "<hr/>";
}
*/