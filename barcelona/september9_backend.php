<?php
require "database.php";
$obj = new database("myitedu");
$inputs = $_POST;
$message = addcslashes($inputs['message'],"'");


$sql = "INSERT INTO feedbacks 
    (first_name, last_name,email, phone, gender, dob,message) 
    VALUES ('{$inputs['first_name']}','{$inputs['last_name']}',
            '{$inputs['email']}','{$inputs['phone']}','{$inputs['gender']}',
            '{$inputs['dob']}','{$message}');";

$obj->sql($sql);
header("Location: september9_feedbacks.php");
exit;
