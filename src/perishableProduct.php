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
        return ($this->daysToExpire() <= 0);
    }

    public function daysToExpire() {
        $diff = ($this->expirationDate)->diff(new DateTime('now'))->d;
        return $diff;
    }  

    public function getPrice() {
        if ($this->daysToExpire() <= 30) {
            return ($this->basePrice * 0.9);
        } else if ($this->daysToExpire() <= 10) {
            return ($this->basePrice * 0.75);
        } else if ($this->daysToExpire() <= 0) {
            return 0;
        }
    }
}