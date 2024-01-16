<?php

//importo la classe Product
require_once __DIR__ . '/Product.php';

// creo la classe per la cuccia e la faccio figlia di Product
class Kennel extends Product
{
    private string $material;
    private string $kennel_type;

    function __construct(string $_type, string $_name, float $_price, string $_image, string $_category, string $_material, string $_kennel_type)
    {
        //richiamo il contruct del padre e aggiunge le 2 proprietà della cuccia 
        parent::__construct($_type, $_name, $_price, $_image, $_category);

        $this->material = $_material;
        $this->kennel_type = $_kennel_type;
    }

    /**
     * getter del tipo di cuccia
     * @return string
     */
    function getKennelType()
    {
        return $this->kennel_type;
    }

    /**
     * getter del materiale della cuccia
     * @return string
     */
    function getMaterial()
    {
        return $this->material;
    }

    //stampa dell' oggetto cuccia 
    function printProduct()
    {
        //richaimo la stampa dal padre e stampo le 2 varibili della cuccia
        parent::printProduct();
        echo "Toy Type: " . $this->getKennelType() . "<br>";
        echo "Material: " . $this->getMaterial();
    }
}
