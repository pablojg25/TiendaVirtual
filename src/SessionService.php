<?php
namespace Dsw\TiendaVirtual;

class SessionService extends Service implements Session {
    private int $sessionNumber;

    public function __construct($name, $basePrice, $sessionNumber) {
        parent::__construct($name, $basePrice);
        $this->sessionNumber = $sessionNumber;
    }

    public function useSession() {
        $this->sessionNumber--;
    }

    public function __toString() {
        return sprintf("%s, quedan %d sesiones",parent::__toString(),$this->sessionNumber);
    }
}
