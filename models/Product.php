<?php
class Product {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this -> setName($name);
        $this -> setPrice($price);
    }

    public function getName() {
        return $this -> name;
    }
    public function setName($name) {
        $this -> name = $name;
    }
    
    public function getPrice() {
        return $this -> price;
    }
    public function setPrice($price) {
       $this -> price = $price;
    }
}