<?php
namespace Dsw\TiendaVirtual;

class PerishableProduct extends Product {
    private Date $expirationDate;

    public function isExpired() {}

    public function daysToExpire() {}

    public function getPrice() {}
}