<?php

namespace Bitwisdom\Shop;

use Bitwisdom\Shop\Item;

/**
 * @Entity
 */
class Book extends Item {
    
    /**
     * @Column(type="integer")
     * @var int 
     */
    private $pages;
    
    /**
     * @Column(type="string")
     * @var string 
     */
    private $author;
    
    /**
     * @param int $pages
     * @param string $author
     */
    function __construct(string $name, float $price, float $weight, int $pages, string $author) {
        parent::__construct($name, $price, $weight);
        $this->pages = $pages;
        $this->author = $author;
    }
    
    /**
     * @return string
     */
    public function getDescription() {
        $description = parent::getDescription();
        $description .= '<div>Author: ' . $this->author . "</div>\n";
        $description .= '<div>Number of Pages: ' . $this->pages . "</div>\n";
        return $description;
    }
    
    /**
     * @return int
     */
    function getPages() {
        return $this->pages;
    }

    /**
     * @return string
     */
    function getAuthor() {
        return $this->author;
    }

    /**
     * @param int $pages
     */
    function setPages(int $pages) {
        $this->pages = $pages;
    }

    /**
     * @param string $author
     */
    function setAuthor(string $author) {
        $this->author = $author;
    }

}
