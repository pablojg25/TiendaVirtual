<?php
//Mostrar array Tienda según filtro

require "../vendor/autoload.php";
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
    switch ($_GET['showStore']) {
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
    <p>
        
    </p>
</body>
</html>