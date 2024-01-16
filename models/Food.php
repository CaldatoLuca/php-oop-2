<?php

//importo la classe Product
require_once __DIR__ . '/Product.php';

// creo la classe per il cibo e la faccio figlia di Product
class Food extends Product
{
    private string $food_type;
    private array $ingredients;
    private string $expiration_date;
    private array $allergens;

    function __construct(string $_type, string $_name, float $_price, string $_image, string $_category, string $_food_type, array $_ingredients, string $_expiration_date, array $_allergens)
    {
        //richiamo il contruct del padre e aggiunge le 4 proprietà del cibo 
        parent::__construct($_type, $_name, $_price, $_image, $_category);

        $this->food_type = $_food_type;
        $this->ingredients = $_ingredients;
        $this->expiration_date = $_expiration_date;
        $this->allergens = $_allergens;
    }

    /**
     * getter del tipo di cibo
     * @return string
     */
    function getFoodType()
    {
        return $this->food_type;
    }

    /**
     * getter degli ingredinti
     * @return array
     */
    function getIngredients()
    {
        return $this->ingredients;
    }


    /**
     * getter della data di scadenza
     * @return string
     */
    function getExpirationDate()
    {
        return $this->expiration_date;
    }


    /**
     * getter degli allergeni
     * @return array
     */
    function getAllergens()
    {
        return $this->allergens;
    }

    //stampa dell' oggetto cibo
    function printProduct()
    {
        //richaimo la stampa dal padre e stampo le 4 varibili dell cibo
        parent::printProduct();
        echo "Food Type: " . $this->getFoodType() . "<br>";
        echo "Ingredients: ";
        foreach ($this->getIngredients() as $ingredient) {
            echo $ingredient . ", ";
        }
        echo "<br>";
        echo "Expiration Date: " . $this->getExpirationDate() . "<br>";
        echo "Allergenes: ";
        if (count($this->getAllergens()) !== 0) {
            foreach ($this->getAllergens() as $allergen) {
                echo $allergen . ", ";
            }
        } else {
            echo 'None';
        }
    }
}
