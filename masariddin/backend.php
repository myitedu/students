<?php
$age = $_GET['age']??null;

if ($age >=18){
    $msg = "This person is 18 years old or older";
    header("Location: frontend.php?age=$age&msg=$msg&status=yes");
    exit;
}else{
    $msg = "This person is under 18!";
    header("Location: frontend.php?age=$age&msg=$msg&status=no");
    exit;
}