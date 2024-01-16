<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
    private string $color;
    private string $toy_type;

    function __construct(string $_name, float $_price, string $_image, string $_category, string $_color, string $_toy_type)
    {
        parent::__construct($_name, $_price, $_image, $_category);

        $this->color = $_color;
        $this->toy_type = $_toy_type;
    }

    /**
     * @return string
     */
    function getToyType()
    {
        return $this->toy_type;
    }

    /**
     * @return string
     */
    function getColor()
    {
        return $this->color;
    }

    function printProduct()
    {
        parent::printProduct();
        echo "Toy Type: " . $this->getToyType() . "<br>";
        echo "Color: " . $this->getColor();
    }
}
