<?php
namespace Dsw\TiendaVirtual;

use \DateTime;
use Dsw\TiendaVirtual\Service;

class Event extends Service {
    public DateTime $executionDate;

    public function __construct($name, $basePrice, $executionDate) {
        parent::__construct($name, $basePrice);
        $this->executionDate = new DateTime($executionDate);
    }

    public function eventDone () {
        return ($this->daysLeft() < 0);
    }

    public function daysLeft () {
        return ($this->executionDate)->diff(new DateTime('now'))->days;
    }

    public function getPrice () {
        if ($this->eventDone()) {
            return 0;
        } else if ($this->daysLeft() == 0) {
            return ($this->basePrice * 1.5);
        } else if ($this->daysLeft() >= 7) {
            return ($this->basePrice * 1.2);
        }
    }

    public function __toString() {
        return sprintf("%s con fecha de %s",parent::__toString(),$this->executionDate->format("d-m-Y"));
    }
}
