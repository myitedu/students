<?php
require "database.php";
$obj = new \Database\Database("myitedu");
$sql = "SELECT * FROM airports WHERE country = 'United States';";
$airports = $obj->sql($sql);
foreach ($airports as $airport){
    echo $airport['id']." | ";
    echo $airport['city']." | ";
    echo $airport['code']." | ";
    echo $airport['country'];
    echo "<br>";
}
?>