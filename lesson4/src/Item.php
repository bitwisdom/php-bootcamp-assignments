<?php

namespace Bitwisdom\Shop;

/**
 * @Entity 
 * @Table(name="storefront_items")
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="type", type="string")
 * @DiscriminatorMap({
 *      "item" = "\Bitwisdom\Shop\Item",
 *      "book" = "\Bitwisdom\Shop\Book", 
 *      "shirt" = "\Bitwisdom\Shop\Shirt"
 * })
 */
class Item {
    
    /**
     * @Id @Column(type="integer") @GeneratedValue
     * @var int
     */
    private $id;
    
    /**
     * @Column(type="string")
     * @var string 
     */
    private $name;
    
    /**
     * @Column(type="float")
     * @var float
     */
    private $price;
    
    /**
     * @Column(type="float")
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
