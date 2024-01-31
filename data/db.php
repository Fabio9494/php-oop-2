<?php

require_once("./models/Product.php");
require_once("./models/ProductType.php");
require_once("./models/AnimalType.php");

$animal_cane = new AnimalType("Cane");
$animal_gatto = new AnimalType("Gatto");
$animal_pesce = new AnimalType("Pesci");


$ProductType1 = new ProductType("Croccantini", 20, "Cibo", "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000", $animal_cane);
$ProductType2 = new ProductType("Croccantini", 25, "Cibo", "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg", $animal_gatto);
$ProductType3 = new ProductType("Giocattolo gatto", 10, "Accessorio", "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", $animal_gatto);
$ProductType4 = new ProductType("Cibo pesci", 12, "Cibo", "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", $animal_pesce);
$ProductType5 = new ProductType("Cartucce filtranti", 28, "Accessori", "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", $animal_pesce);
$ProductType6 = new ProductType("Kong classic", 32, "Non lo so", "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", $animal_pesce);

$ProductTypes = [$ProductType1, $ProductType2, $ProductType3, $ProductType4,$ProductType5,$ProductType6];

