<?php

//importo la classe Product
require_once __DIR__ . '/Product.php';

// creo la classe per il gioco e la faccio figlia di Product
class Toy extends Product
{
    private string $color;
    private string $toy_type;

    function __construct(string $_name, float $_price, string $_image, string $_category, string $_color, string $_toy_type)
    {
        //richiamo il contruct del padre e aggiunge le 2 proprietà del gioco 
        parent::__construct($_name, $_price, $_image, $_category);

        $this->color = $_color;
        $this->toy_type = $_toy_type;
    }

    /**
     * getter del tipo di gioco
     * @return string
     */
    function getToyType()
    {
        return $this->toy_type;
    }

    /**
     * getter del colore del gioco
     * @return string
     */
    function getColor()
    {
        return $this->color;
    }

    //stampa dell' oggetto gioco 
    function printProduct()
    {
        //richaimo la stampa dal padre e stampo le 2 varibili del gioco
        parent::printProduct();
        echo "Toy Type: " . $this->getToyType() . "<br>";
        echo "Color: " . $this->getColor();
    }
}
