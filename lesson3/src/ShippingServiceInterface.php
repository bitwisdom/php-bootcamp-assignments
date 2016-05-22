<?php

namespace Bitwisdom\Shop;

interface ShippingServiceInterface {
    
    /**
     * @param float $weight
     * @return float
     */
    public function getShippingCost(float $weight);
    
    /**
     * @return string
     */
    public function getName();
    
}
