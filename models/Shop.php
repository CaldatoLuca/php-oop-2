<?php

//classe del negozio 
class Shop
{
    protected string $name;
    public array $catalog = [];

    /**
     * getter del nome dello shop
     * @return string
     */
    function getName()
    {
        return $this->name;
    }

    function __construct(string $_name)
    {
        $this->name = $_name;
    }

    //pusho nell' array catalog il product che definisco
    public function addToCatalog($_product)
    {
        $this->catalog[] = $_product;
    }

    //se come atrributo inserisco uno dei miei oggetti lo stampo perchè questa funzione da si che il mio oggetto richiami la funzione
    //che lo stampa (definita in Product e ridefinita in Food, Toy e Kennel)
    public function printCatalogProduct($prodotto)
    {
        $prodotto->printProduct();
    }
}
