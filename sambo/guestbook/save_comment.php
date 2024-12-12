<?php

$comment = $_GET['comment']??null;
if (empty($comment)){
    exit("Your comment is empty");
}

require "database.php";
$obj = new database("myitedu");
$sql = "INSERT INTO comments (comment) VALUES('$comment');";
$exec = $obj->sql($sql);

header("Location: index.php?msg=successfully+added");
exit("Successfully Added");