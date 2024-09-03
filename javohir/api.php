<?php
function fetchApi($keyword, $page=1)
{
    $page = (int) $page;
    $keyword = urlencode($keyword);
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://movie-database-alternative.p.rapidapi.com/?s=$keyword&r=json&page=$page",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: movie-database-alternative.p.rapidapi.com",
            "x-rapidapi-key: 7xMayFzkf7mshXdoD9ndBCxTd8W1p1qjCs3jsn1Hu3R7Y5pOCE"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    return json_decode($response);
}