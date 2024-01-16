<?php

class Shop
{
    protected string $name;
    public array $catalog = [];

    function __construct(string $_name)
    {
        $this->name = $_name;
    }

    public function addToCatalog($_product)
    {
        $this->catalog[] = $_product;
    }

    public function printCatalogProduct($prodotto)
    {
        $prodotto->printProduct();
    }
}
