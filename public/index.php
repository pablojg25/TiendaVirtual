<?php

require "../vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice tienda virtual</title>
</head>
<body>
    <h1>Tienda virtual</h1>
    <form action="./mostrarTienda.php" method="get">
        <p>
        <input type="radio" name="showStore" id="showElements" value="showElements">
        <label for="showElements">Mostrar todos los elementos</label>
        </p>
        <p>
        <input type="radio" name="showStore" id="showProducts" value="showProducts">
        <label for="showProducts">Mostrar los productos</label>
        </p>
        <p>
        <input type="radio" name="showStore" id="showServices" value="showServices">
        <label for="showServices">Mostrar los servicios</label>
        </p>
        <p>
        <input type="radio" name="showStore" id="showExpirationDate" value="showExpirationDate">
        <label for="showExpirationDate">Mostrar los elementos con fecha de expiración</label>
        </p>
        <p>
        <input type="radio" name="showStore" id="showSellable" value="showSellable">
        <label for="showSellable">Mostrar los elementos que no han caducado</label>
        </p>
        <p><input type="submit" value="Mostrar"></p>
    </form>
</body>
</html>