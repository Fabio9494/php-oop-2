<?php

class AnimalType {
    private $category;

    public function __construct($category) {
        $this -> setCategory($category);
    }

    public function getCategory() {
        return $this -> category;
    }
    public function setCategory($category) {
        $this -> category = $category;
    }
}