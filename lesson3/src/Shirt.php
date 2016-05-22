<?php

namespace Bitwisdom\Shop;

use Bitwisdom\Shop\Item;

class Shirt extends Item {
    
    /**
     * @var string 
     */
    private $size;
    
    /**
     * @param string $size
     */
    function __construct(string $name, float $price, float $weight, string $size) {
        parent::__construct($name, $price, $weight);
        $this->size = $size;
    }
    
    /**
     * @return string
     */
    public function getDescription() {
        $description = parent::getDescription();
        $description .= '<div>Size: ' . $this->size . "</div>\n";
        return $description;
    }
    
    /**
     * @return string
     */
    function getSize() {
        return $this->size;
    }

    /**
     * @param string $size
     */
    function setSize(string $size) {
        $this->size = $size;
    }

}