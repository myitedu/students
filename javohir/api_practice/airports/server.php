<?php
include "../database.php";

$data = json_decode(file_get_contents('php://input'), true);

$keyword = strip_tags($data['keyword'] ?? null); 
if (!$keyword) {
    exit(json_encode(['error' => 'The keyword is empty']));  
}

$sql = "SELECT distinct country FROM airports WHERE country like '$keyword%'";
$obj = new Database();
$result = $obj->sql($sql);

header('Content-Type: application/json');
echo json_encode($result);

