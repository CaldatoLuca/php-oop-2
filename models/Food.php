<?php

require_once __DIR__ . '/Product.php';
class Food extends Product
{
    private string $type;
    private array $ingredients;
    private string $expiration_date;
    private array $allergens;

    function __construct($_name, float $_price, $_image, $_type, array $_ingredients, $_expiration_date, array $_allergens)
    {
        parent::__construct($_name, $_price, $_image);

        $this->type = $_type;
        $this->ingredients = $_ingredients;
        $this->expiration_date = $_expiration_date;
        $this->allergens = $_allergens;
    }

    /**
     * @return string
     */
    function getType()
    {
        return $this->type;
    }

    /**
     * @return array
     */
    function getIngredients()
    {
        return $this->ingredients;
    }


    /**
     * @return string
     */
    function getExpirationDate()
    {
        return $this->expiration_date;
    }


    /**
     * @return array
     */
    function getAllergens()
    {
        return $this->allergens;
    }

    function printProduct()
    {
        parent::printProduct();
        echo "Type: " . $this->getType() . "<br>";
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
