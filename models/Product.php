<?php

//classe generale del mio prodotto
class Product
{
    protected $name;
    protected $price;
    protected $image;
    protected $category;

    //construct
    function __construct(string $_name, float $_price, string $_image, string $_category)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
        $this->category = $_category;
    }

    /**
     * getter del name
     * @return string
     */
    function getName()
    {
        return $this->name;
    }

    /**
     * getter del prezzo
     * @return float
     */
    function getPrice()
    {
        return $this->price;
    }

    /**
     * getter della src dell' immagine
     * @return string
     */
    function getImage()
    {
        return $this->image;
    }

    /**
     * getter della categoria
     * @return string
     */
    function getCategory()
    {
        return $this->category;
    }

    //stampa delle variabili di istanza del prodotto
    function printProduct()
    {
        echo "Name: " . $this->getName() . "<br>";
        echo "Price: " . $this->getPrice() . "$" . "<br>";
        echo "Image src: " . $this->getImage() . "<br>";
        echo "Category: " . $this->getCategory() . "<br>";
    }
}
