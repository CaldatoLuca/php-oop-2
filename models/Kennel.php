<?php

require_once __DIR__ . '/Product.php';

class Kennel extends Product
{
    private string $material;
    private string $kennel_type;

    function __construct(string $_name, float $_price, string $_image, string $_category, string $_material, string $_kennel_type)
    {
        parent::__construct($_name, $_price, $_image, $_category);

        $this->material = $_material;
        $this->kennel_type = $_kennel_type;
    }

    /**
     * @return string
     */
    function getKennelType()
    {
        return $this->kennel_type;
    }

    /**
     * @return string
     */
    function getMaterial()
    {
        return $this->material;
    }

    function printProduct()
    {
        parent::printProduct();
        echo "Toy Type: " . $this->getKennelType() . "<br>";
        echo "Material: " . $this->getMaterial();
    }
}
