<?php 

class ProductType {
    public $name;

    public function __construct($_name) {
        $this->name = $_name;
    }
}


class Category {
    public $animal;
    public $icon;

    public function __construct($_animal, $_icon) {
        $this->animal = $_animal;
        $this->icon = $_icon;
    }
}

class Product {
    public $title;
    public $price;
    public $image;
    public $category;

    public function __construct($_title, $_price, $_image, Category $_category) {
        $this->title = $_title;
        $this->price = $_price;
        $this->image = $_image;
        $this->category = $_category;
    }
}


?>