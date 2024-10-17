<?php
namespace Dsw\TiendaVirtual;

use \DateTime;

class PerishableProduct extends Product {
    private DateTime $expirationDate;

    public function __construct($name, $basePrice, $maker, $weight, $volume, $expirationDate) {
        parent::__construct($name, $basePrice, $maker, $weight, $volume);
        $this->$expirationDate = new DateTime($expirationDate);
    }

    public function isExpired() {
        
    }

    public function daysToExpire() {
        $diff = ($this->expirationDate)->diff(new DateTime('now'))->d;
        return $diff;
    }  

    public function getPrice() {}
}