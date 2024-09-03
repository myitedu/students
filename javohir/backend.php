<?php
$keyword = $_POST['keyword']??null;
if (empty($keyword)){
    exit("The keyword is empty");
}
//Safe zone
include "database.php";
$obj = new database();
$sql =  "SELECT distinct country FROM airports WHERE country like '$keyword%';";
$results = $obj->sql($sql);

echo "<ul>";
foreach ($results as $result){
    echo "<li>{$result['country']}</li>";
}
echo "</ul>";
