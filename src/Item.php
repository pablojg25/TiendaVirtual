<?php
namespace Dsw\TiendaVirtual;

class Item {
    public string $name;
    public float $basePrice;
    public float $tax = 0.07;

    public function __construct($name, $basePrice) {
        $this->name = $name;
        $this->basePrice = $basePrice;
    }

    public function getPrice() {
        return $this->basePrice * (1 + $this->tax);
    }

    public function setTax(float $newTax) {
        $this->tax = $newTax;
    }

}
