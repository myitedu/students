<?php
ini_set("display errors", 1);
include "Myinterface.php";

class Account implements MyInterface {
    private $balance;
    private $currency = "$";

    public function __construct($initialBalance) {
        $this->balance = $initialBalance;
    }

    public function log($message, $status) {
        echo 
        "<p style='width: 500px; height: 50px; background: $status; 
        text-align: center; padding-top: 25px; color: white; margin: auto;'>
         $message </p>";
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $this->balance >= $amount) {
            $this->balance -= $amount;
        }
    }

    public function getBalance() {
        echo (string)$this->currency . $this->balance;
    }

}
