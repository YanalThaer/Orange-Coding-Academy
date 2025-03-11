<?php

class Balance {
    private $balance;

    public function __construct() {
        $this->balance = 0;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function getBalance() {
        return $this->balance;
    }
}

?>