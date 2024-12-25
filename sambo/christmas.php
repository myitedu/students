<?php
echo "<pre>";
function isValid($zip) {
    $validate = preg_match("#^[0-9]{5}$#",$zip,$matches);
    if ($validate){
        echo "true <hr>";
    }else{
        echo "false <hr>";
    }
}

isValid("59001");// ➞ true
isValid("85317");// ➞ false
isValid("73232");// ➞ false
isValid("39393");// ➞ false