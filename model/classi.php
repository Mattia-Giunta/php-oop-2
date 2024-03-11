<?php 

require_once __DIR__ . "/trait.php";

class ProductType {
    protected $name;

    public function __construct($_name) {
        $this->name = $_name;
    }

    public function getName() {
        return $this->name;
    }
}

class Category {
    protected $animal;
    protected $icon;

    public function __construct($_animal, $_icon) {
        $this->animal = $_animal;
        $this->icon = $_icon;
    }

    public function getAnimal() {
        return $this->animal;
    }

    public function getIcon() {
        return $this->icon;
    }
}

class Product {

    use StockStatusTrait;

    protected $title;
    protected $price;
    protected $image;
    protected $category;
    protected $type;

    public function __construct($_title, $_price, $_image, Category $_category, ProductType $_type) {
        $this->title = $_title;
        $this->price = $_price;
        $this->image = $_image;
        $this->category = $_category;
        $this->type = $_type;
        $this->setStockQuantity();

    }

    public function getTitle() {
        return $this->title;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getImage() {
        return $this->image;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getType() {
        return $this->type;
    }
}



?>