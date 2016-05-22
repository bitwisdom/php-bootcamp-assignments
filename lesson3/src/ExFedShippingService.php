<?php

namespace Bitwisdom\Shop;

use Bitwisdom\Shop\ShippingServiceInterface;

class ExFedShippingService implements ShippingServiceInterface {
    
    /**
     * @param float $weight
     * @return float
     */
    public function getShippingCost(float $weight) {
        return round($weight * 3.75, 2);
    }
    
    /**
     * @return string
     */
    public function getName() {
        return 'ExFed Overnight';
    }
}
