<?php

// Trait che calcola uno sconto data la %
trait Discount
{
    /**
     * @param float 
     * @return float
     */
    function discountedPrice(float $discountPercentage)
    {
        $discount = $this->getPrice() * ($discountPercentage / 100);
        return $this->getPrice() - $discount;
    }
}
