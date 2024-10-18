<?php
namespace Dsw\TiendaVirtual;

class Item {
    public string $name;
    public float $basePrice;
    public float $tax = 0.07;

    public function __construct($name, $basePrice) {}

    public function getPrice() {}

    public function setTax(float $tax) {}
}