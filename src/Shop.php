<?php
namespace Dsw\TiendaVirtual;

class Shop {
    public $items = [];

    public function addElements($element) {
        $this->items[] = $element;
    }

    public function showElements() {
        return $this->items;
    }

    public function showProducts() {
        return array_filter($this->items, function($e) {
            return $e instanceof Product;
        });
    }

    public function showServices() {
        return array_filter($this->items, function($e) {
            return $e instanceof Service;
        });
    }

    public function showExpirationDate() {
        return array_filter($this->items, function($e) {
            return ($e instanceof PerishableProduct || $e instanceof Event);
        });
    }

    public function showSellable() {
        return array_filter($this->items, function($e) {
            return (($e instanceof PerishableProduct && !$e->isExpired()) || ($e instanceof Event && !$e->eventDone()));
        });
    }
}
