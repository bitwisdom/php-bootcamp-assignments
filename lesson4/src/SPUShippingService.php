<?php

namespace Bitwisdom\Shop;

use Bitwisdom\Shop\ShippingServiceInterface;

class SPUShippingService implements ShippingServiceInterface {
    
    /**
     * @param float $weight
     * @return float
     */
    public function getShippingCost(float $weight) {
        return round($weight * 2.5, 2);
    }
    
    /**
     * @return string
     */
    public function getName() {
        return 'SPU 3-day';
    }

}
