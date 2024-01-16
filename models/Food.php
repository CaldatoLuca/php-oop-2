<?php

require_once __DIR__ . '/Product.php';
class Food extends Product
{
    private string $food_type;
    private array $ingredients;
    private string $expiration_date;
    private array $allergens;

    function __construct(string $_name, float $_price, string $_image, string $_category, string $_food_type, array $_ingredients, string $_expiration_date, array $_allergens)
    {
        parent::__construct($_name, $_price, $_image, $_category);

        $this->food_type = $_food_type;
        $this->ingredients = $_ingredients;
        $this->expiration_date = $_expiration_date;
        $this->allergens = $_allergens;
    }

    /**
     * @return string
     */
    function getFoodType()
    {
        return $this->food_type;
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
