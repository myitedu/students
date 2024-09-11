<?php 
ini_set("display errors",1);
include "MyInterface.php";

class Customer implements MyInterface {
    protected string $fullName;
    protected string $accountNumber;

    public function log($message, $status){
        echo 
        "<p 
        style='width: 500px; height: 50px; background: $status; 
        text-align: center; padding-top: 25px; color: white; margin: auto;'>
         $message </p>";
    }

    public function __construct($fullName, $accountNumber) {
        $this->fullName = $fullName;
        if (preg_match('/^\d+$/', $accountNumber) && strlen($accountNumber) == 12) {
            $this->accountNumber = $accountNumber;
            $this->log('All Set', 'green');
        }
        else {
            $this->log("Account Number is required to be filled correctly!", "red");
        }
    }

    public function cahngeName($newName): void { 
        $this->fullName = $newName;
    }

    public function getInfo() {
        echo date('Y-m-d h:i:s');
    }
}

$customer = new Customer("Javohir Ergashev", "12131h2312312");
$customer->getInfo();