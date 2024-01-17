<?php

// Trait che calcola uno sconto data la %
trait Discount
{
    /**
     *  
     * @return float
     */
    function discountedPrice($discountPercentage)
    {
        $discount = $this->getPrice() * ($discountPercentage / 100);
        if ($discountPercentage === 100) {
            throw new Exception('Discount not valid, we do not sell stuff for free');
        } else {
            return $this->getPrice() - $discount;
        }
    }
}
