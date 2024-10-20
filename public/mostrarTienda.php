<?php

require "../vendor/autoload.php";
include "./arrayTienda.php";
$filter = $_GET['showStore'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda virtual</title>
</head>
<body>
    <h2><?php 
    switch ($filter) {
        case 'showElements':
            echo 'Mostrar todos los elementos';
            break;
        case 'showProducts':
            echo 'Mostrar los productos';
            break;
        case 'showServices':
            echo 'Mostrar los servicios';
            break;
        case 'showExpirationDate':
            echo 'Mostrar todos los elementos con fecha de expiración';
            break;
        case 'showSellable':
            echo 'Mostrar todos los elementos que no han caducado';
            break;
    }
    ?></h2>
    <ul>
        <?php
        $tienda;
        switch ($filter) {
            case 'showElements':
                $tienda = $shop->showElements();
                break;
            case 'showProducts':
                $tienda = $shop->showProducts();
                break;
            case 'showServices':
                $tienda = $shop->showServices();
                break;
            case 'showExpirationDate':
                $tienda = $shop->showExpirationDate();
                break;
            case 'showSellable':
                $tienda = $shop->showSellable();
                break;
        }
        foreach($tienda as $element) {
            echo "<li>" . $element->__toString() . "</li>\n";
        }
        ?>
    </ul>
</body>
</html>