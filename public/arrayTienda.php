<?php
//Crear objeto Tienda

require "../vendor/autoload.php";

use Dsw\TiendaVirtual\Event;
use Dsw\TiendaVirtual\PerishableProduct;
use Dsw\TiendaVirtual\Product;
use Dsw\TiendaVirtual\Service;

$product = new Product("Una aspiradora con nombre Cyclone 23",89.99,"Braun", 4250, 3300);
echo $product;

$perishable = new PerishableProduct("Un jamón con nombre Reserva Ibérico", 215, "Joselito",6790,4000,"2024/03/15");
echo "<br>" . $perishable;

$event = new Event("android",500,"2024/10/19");
echo "<br>" . $event;

$sessionService = new SessionService("Clases de piano", 0,10);
echo "<br>" . $sessionService;

// $mixedService = new MixedService("Clases de Yoga",45,"2024/11/15",12);
// echo "<br>" . $mixedService;
