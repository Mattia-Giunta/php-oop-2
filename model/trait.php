<?php 

trait StockStatusTrait {
    protected $stockQuantity;

    public function setStockQuantity() {
        $this->stockQuantity = rand(0, 50);
    }

    public function getStockStatus() {


        if ($this->stockQuantity <= 0) {
            return  "<p class='card-text text-danger '>Prodotto Esaurito</p>"; // Esaurito

        } elseif ($this->stockQuantity > 0 && $this->stockQuantity <= 10) {
            return "<p class='card-text text-warning '>Scarsa disponibilità</p>"; // Scarsa disponibilità
            
        } elseif ($this->stockQuantity > 10 ) {
            return "<p class='card-text text-success '>Disponibile</p>"; // Disponibilità elevata

        } 
        
    }
}




?>