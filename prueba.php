<?php

require './vendor/autoload.php';
use Dsw\TiendaVirtual\PerishableProduct;

$pr1 = new PerishableProduct('',0,'',0,0,"2024-10-18");
echo $pr1->daysToExpire();