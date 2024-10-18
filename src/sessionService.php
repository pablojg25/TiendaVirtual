<?php
namespace Dsw\TiendaVirtual;

class SessionService extends Service implements Session {
    private int $sessionNumber;

    public function constructor($name, $basePrice, $sessionNumber) {
        parent::__construct($name, $basePrice);
        $this->sessionNumber = $sessionNumber;
    }

    public function useSession() {
        $this->sessionNumber--;
    }
}