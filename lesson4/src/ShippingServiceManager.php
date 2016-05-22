<?php

namespace Bitwisdom\Shop;

class ShippingServiceManager {
    
    /**
     * @var ShippingServiceInterface[]
     */
    private $services;
    
    function __construct(array $services = []) {
        $this->services = $services;
    }
    
    /**
     * @param ShippingServiceInterface $service
     */
    function addService(ShippingServiceInterface $service) {
        $this->services[] = $service;
    }
    
    /**
     * @param float $weight
     * @return ShippingServiceQuote[]
     */
    function getQuotes($weight) {
        $quotes = [];
        foreach ($this->services as $service) {
            $quotes[] = new ShippingServiceQuote(
                    $service->getName(), 
                    $service->getShippingCost($weight)
            );
        }
        return $quotes;
    }
}
