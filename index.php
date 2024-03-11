<?php 

include_once __DIR__ ."/model/classi.php";


// Creazione dei tipi di prodotto
$foodType = new ProductType("Cibo");
$toyType = new ProductType("Gioco");
$bedType = new ProductType("Cuccia");




// Creazione dei prodotti e delle categorie
$dogFood = new Product("Croccantini per Cani", 10.99, "./img/food-dog.jpg", $dogCategory = new Category("Cani", "<i class='fa-solid fa-dog'></i>"), $foodType);
$catToy = new Product("Giochino per Gatti", 5.99, "./img/cat-toy.jpg", $catCategory = new Category("Gatti", "<i class='fa-solid fa-cat'></i>"), $toyType);
$catProduct = new Product("Cuccia per Gatti", 15.99, "./img/cat-home.jpg", $catCategory = new Category("Gatti", "<i class='fa-solid fa-cat'></i>"), $bedType);

$arrayProdotti = [
    $dogFood,
    $catToy,
    $catProduct,
]


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>OOP 2</title>

</head>

<body data-bs-theme="dark">

    <main>

        <div class="container">

            <h1 class="my-5 text-center">Pet Shop </h1>

            <div class="d-flex justify-content-around ">

                <?php foreach( $arrayProdotti as $element ) : ?>

                    <div class="card " style="width: 20rem;">

                        <img src="<?= $element->getImage()?>" class="card-img-top h-50" alt="<?= $element->getTitle()?>">

                        <div class="card-body">
                            
                            <h3>
                                <?= $element->getCategory()->getAnimal()?>
                                <?= $element->getCategory()->getIcon()?>
                            </h3>

                            <h5 class="card-title">
                                <?= $element->getTitle()?>
                            </h5>

                            <p>
                                Type: <?= $element->getType()->getName() ?>
                            </p>
                            
                        </div>
                       
                        <div class="card-footer">
                            
                            <p class="card-text">
                                <?= $element->getPrice()?>€
                            </p>
                            <?= $element->getStockStatus()?>
                            <a href="#" class="btn btn-primary">Buy</a>
                        </div>    

                    </div>

                <?php endforeach; ?>  

            </div>

            
        </div>
    
        

    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
</body>
</html>