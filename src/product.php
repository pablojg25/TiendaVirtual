<?php
namespace Dsw\TiendaVirtual;

class Product extends Item {
    public string $maker;
    public float $weight;
    public float $volume;

    public function shippingCost() {}
}