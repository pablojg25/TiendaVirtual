<?php
namespace Dsw\TiendaVirtual;

class Shop {
    public $items = [];

    public function addElements(Item $element) {
        $this->items[] = $element;
    }

    public function showElements() {
    }

    public function showProducts() {}

    public function showServices() {}

    public function showExpirationDate() {}

    public function showSellable() {
        
    }
}
