<?php
ini_set("display_errors",1);
$conn = mysqli_connect("127.0.0.1","root","","ergashev.uz", 3308);
$result = $conn->query("SELECT * FROM area_codes WHERE state = 'New York';");
while ($areacode = $result->fetch_assoc()){
    echo $areacode['id'].") ".$areacode['city']."<hr>";
}