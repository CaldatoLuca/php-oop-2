<?php

class Product
{
    protected $name;
    protected $price;
    protected $image;
    protected $category;

    function __construct(string $_name, float $_price, string $_image, string $_category)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
        $this->category = $_category;
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

    /**
     * @return string
     */
    function getCategory()
    {
        return $this->category;
    }

    function printProduct()
    {
        echo "Name: " . $this->getName() . "<br>";
        echo "Price: " . $this->getPrice() . "$" . "<br>";
        echo "Image src: " . $this->getImage() . "<br>";
        echo "Category: " . $this->getCategory() . "<br>";
    }
}
