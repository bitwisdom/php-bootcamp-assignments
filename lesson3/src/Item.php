<?php

namespace Bitwisdom\Shop;

class Item {
    
    /**
     * @var string 
     */
    private $name;
    
    /**
     * @var float
     */
    private $price;
    
    /**
     * @var float
     */
    private $weight;
    
    /**
     * @param string $name
     * @param float $price
     * @param float $weight
     */
    function __construct(string $name, float $price, float $weight) {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
    }
    
    /**
     * @return string
     */
    function getDescription() {
        $description = '<div>Price: $' . $this->price . "</div>\n";
        return $description;
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

    /**
     * @return float
     */
    function getWeight() {
        return $this->weight;
    }

    /**
     * @param string $name
     */
    function setName(string $name) {
        $this->name = $name;
    }

    /**
     * @param float $price
     */
    function setPrice(float $price) {
        $this->price = $price;
    }

    /**
     * @param float $weight
     */
    function setWeight(float $weight) {
        $this->weight = $weight;
    }

}
