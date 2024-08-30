<?php
include "assistant.php";
class Wedding extends Assistant {

    public function payOntime()
    {
        // TODO: Implement payOntime() method.
    }
    public function treatOthersWell()
    {
        // TODO: Implement treatOthersWell() method.
    }
}

$toy = new Wedding();

$result = method_exists(Wedding::class,'treatOthersWell');

var_dump($result);
