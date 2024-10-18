<?php
namespace Dsw\TiendaVirtual;

class Service extends Item {

    public function __construct($name, $basePrice)
    {
        parent::__construct($name,$basePrice);
    }
    public function __toString()
    {
        return sprintf("El servicio %s con precio de %.2f€",$this->name,$this->basePrice);
    }
}