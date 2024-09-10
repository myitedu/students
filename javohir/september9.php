<?php
ini_set("display_errors",1);
echo "<pre>";

function validatePIN($pin) {
    $pattern = "#([0-9]{4}).*#";
    $jon = preg_match($pattern, $pin, $matches);
    if (isset($matches[0])) {
        $result = (strlen($matches[0]) == 4 || strlen($matches[0]) == 6);
        if ($result) {
            echo "true";
        } else {
            echo "false";
        }
    }else{
        echo "false";
    }
    echo "<hr>";
}

validatePIN("");

    //true,
 validatePIN("1234");
//true,
validatePIN("5678");
//true,
validatePIN("123456");


    //false, 
 validatePIN("12345");
    //false, 
 validatePIN("a234");
    //false, 
 validatePIN("");
    //false, 
 validatePIN("%234");
    //false, 
 validatePIN("`234");
    //false, 
 validatePIN("@234");
    //false, 
 validatePIN("#234");
    //false, 
 validatePIN("$234");
    //false, 
 validatePIN("*234");
    //false,
 validatePIN("^234");
    //false, 
 validatePIN("(234");
    //false, 
 validatePIN(")234");

    //false, 
 validatePIN("-234");
    //false, 
 validatePIN("_234");
    //false, 
 validatePIN("+234");
    //false, 
 validatePIN("=234");
    //false, 
 validatePIN("?234");
