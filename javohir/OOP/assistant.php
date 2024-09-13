<?php
include "myinterface.php";
include "myinterface2.php";
include "utilities.php";
abstract class Assistant implements Myinterface, Myinterface2 {
    use Utilities;

}