<?php
class Wedding{
    public function __construct(){
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


$asliddinovs = new Wedding();
$asliddinovs->greet();
$asliddinovs->eat();
$asliddinovs->dance();
