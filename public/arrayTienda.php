<?php
//Crear objeto Tienda

use Dsw\TiendaVirtual\Event;
use Dsw\TiendaVirtual\MixedService;
use Dsw\TiendaVirtual\PerishableProduct;
use Dsw\TiendaVirtual\Product;
use Dsw\TiendaVirtual\Service;
use Dsw\TiendaVirtual\SessionService;
use Dsw\TiendaVirtual\Shop;

require "../vendor/autoload.php";

$shop = new Shop();
$shop->addElements(new Product("Silla",20,"IKEA",5000,200));
$shop->addElements(new Product("Mesa",45,"IKEA",10000,450));

$shop->addElements(new PerishableProduct("Yogur",0.75,"Hacendado",125,25,"2024/10/01"));
$shop->addElements(new PerishableProduct("Manzana",1.25,"Gala",200,33,"2024/10/23"));
$shop->addElements(new PerishableProduct("Arroz",2.25,"Divenca",1000,25,"2024/11/10"));

$shop->addElements(new Service("E-book 1",50));
$shop->addElements(new Service("E-book 2",35));

$shop->addElements(new SessionService("Clases de inglés",10,3));
$shop->addElements(new SessionService("Clases de piano",25,0));

$shop->addElements(new Event("Cine al aire libre",7,"2024/10/18"));
$shop->addElements(new Event("Obra de teatro",50,"2024/10/20"));
$shop->addElements(new Event("Concierto",10,"2024/12/24"));

$shop->addElements(new MixedService("Clase de yoga",8,"2024/09/30",5));
$shop->addElements(new MixedService("Gimnasio",10,"2024/10/31",10));
