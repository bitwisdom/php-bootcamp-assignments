<?php

namespace Bitwisdom\Shop;

class ShippingServiceQuote {
    
    /**
     * @var string
     */
    private $name;
    
    /**
     * @var float 
     */
    private $price;
    
    /**
     * @param string $name
     * @param float $price
     */
    function __construct(string $name, float $price) {
        $this->name = $name;
        $this->price = $price;
    }
    
    /**
     * @return string
     */
    function getName() {
        return $this->name;
    }

    /**
     * @return float
     */
    function getPrice() {
        return $this->price;
    }
}
