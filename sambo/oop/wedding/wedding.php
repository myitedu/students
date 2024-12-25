<?php
class Wedding{

    public $budget;
    public $money;

    public function __construct(){
        $this->money = "170000";
        $this->budget = "$20000";
        echo "Entrance <hr>";
    }

    public function greet(){
        echo "Assalom allaykum, Xush kelibsiz! <hr>";
    }

    public function eat(){
        echo "Enjoy the milliy taomlar!<hr>";
    }

    public function dance(){
        echo "Dance away.. joy and fun<hr>";
    }


    public function __destruct(){
        echo "Exit <hr>";
    }
}

