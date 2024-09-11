<?php

// Getting Country and Country abbrevation from Airports database;

include "../database.php";
$data = json_decode(file_get_contents("php://input"), true);
$keyword = strip_tags($data["keyword"]?? null);
if(strlen($keyword) == 0) {
	exit(json_encode(['error' => 'The keyword is empty']));
}

$sql = "SELECT distinct country, country_abbr FROM airports WHERE country like '$keyword%'";
$db = new Database();
$result = $db->sql($sql);

header('Content-Type: application/json');
echo json_encode($result);

// Api for Country Details;

// $curl = curl_init();

// curl_setopt_array($curl, [
// 	CURLOPT_URL => "https://wft-geo-db.p.rapidapi.com/v1/geo/countries/US",
// 	CURLOPT_RETURNTRANSFER => true,
// 	CURLOPT_ENCODING => "",
// 	CURLOPT_MAXREDIRS => 10,
// 	CURLOPT_TIMEOUT => 30,
// 	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
// 	CURLOPT_CUSTOMREQUEST => "GET",
// 	CURLOPT_HTTPHEADER => [
// 		"x-rapidapi-host: wft-geo-db.p.rapidapi.com",
// 		"x-rapidapi-key: 42e1224ad1msh06b8f0f07cdd1a1p1a132bjsn25848521fd44"
// 	],
// ]);

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
// 	echo "cURL Error #:" . $err;
// } else {
//     echo $response;
// }

