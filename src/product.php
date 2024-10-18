<?php
namespace Dsw\TiendaVirtual;

class Product extends Item {
    public string $maker;
    public float $weight;
    public float $volume;

    public function __construct($name, $basePrice, $maker, $weight, $volume) {
        parent::__construct($name, $basePrice);
        $this->maker = $maker;
        $this->weight = $weight;
        $this->volume = $volume;
    }

    public function shippingCost() {
        return round((2 + ($this->weight * 0.0002) + floor($this->volume/1000)),2);
    }

    public function __toString()
    {
        return sprintf("%s de la marca %s con precio de %.2f€ pesa %.2d gramos y un volumen de %.2d cm3",$this->name,$this->maker,$this->basePrice, $this->weight, $this->volume);
    }
}