<?php
namespace Dsw\TiendaVirtual;

class MixedService extends Event implements Session {
    private int $sessionNumber;

    public function __construct($name, $basePrice, $executionDate, $sessionNumber) {
        parent::__construct($name, $basePrice, $executionDate);
        $this->sessionNumber = $sessionNumber;
    }

    public function useSession() {
        $this->sessionNumber--;
    }
}