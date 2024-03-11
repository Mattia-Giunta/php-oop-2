<?php 

trait StockStatusTrait {
    protected $stockQuantity;

    public function setStockQuantity() {

        $randomQuantity = rand(0, 60); // Genera un numero casuale 

        //inserito try cactch
        try {

            //inserito Exception
            if ($randomQuantity < 0 || $randomQuantity > 50) {
            throw new Exception("Quantità di stock generata non valida: $randomQuantity");
            } 

        }catch (Exception $e) {
            echo 'Eccezione: ' . $e->getMessage(); 
        }
        
        $this->stockQuantity = $randomQuantity;
    }

    public function getStockStatus() {

        var_dump($this->stockQuantity);

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