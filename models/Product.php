<?php

class Product
{
    protected string $name;
    protected float $price;
    protected string $image;

    function __construct($_name, $_price, $_image)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
    }

    /**
     * @return string
     */
    function getName()
    {
        return $this->name;
    }

    /**
     * @return float
     */
    function getPrice()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    function getImage()
    {
        return $this->image;
    }

    function printProduct()
    {
        echo "Name: " . $this->getName() . "<br>";
        echo "Price: " . $this->getPrice() . "<br>";
        echo "Image src: " . $this->getImage() . "<br>";
    }
}
