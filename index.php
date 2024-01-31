<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style/style.css">
        <title>Document</title>
    </head>

    <body>
        <h1>Animalandia</h1>
        <div class="container">
            <?php
                require_once("./data/db.php");
                foreach ($ProductTypes as $ProductType) {
                    if ($ProductType != null) {
            ?>
                        <div class="card">
                            <div class="immagine">
                                <img src="<?php echo $ProductType -> getImage();?>" alt="croccantini">  
                            </div>
                                <div>
                                    <h2>
                                        <?php echo $ProductType -> getName(); ?>
                                    </h2>
                                    <div>
                                        <?php echo $ProductType -> getPrice(); ?> Euro
                                    </div>
                                <div>
                                    Tipo di articolo: <b><?php echo $ProductType -> getType(); ?></b><br>
                                </div>
                                <div>
                                    Categoria: <b><?php echo $ProductType -> getAnimalType() -> getCategory();?></b>
                                </div>
                            </div>
                        </div>
            <?php
                    }
                }
            ?>
        </div>
    </body>
</html>