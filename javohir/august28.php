<?php
ini_set("display errors", 1);
$conn = mysqli_connect("127.0.0.1","root","","myitedu");
$result = $conn->query("SELECT * FROM airports WHERE country = 'Uzbekistan';");
while ($airport = $result->fetch_assoc()){
    echo $airport['id'].") ".$airport['city']."<hr>";
}

$conn->close();
