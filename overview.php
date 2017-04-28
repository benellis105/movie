<?php
    error_reporting(0);
    $id = $_GET['id'];
    $url = "https://api.themoviedb.org/3/movie/" . $id . "?api_key=7ff0d10e861ad74ae54df0dbf1d0e794&language=en-US";
    $cSession = curl_init(); 
    curl_setopt($cSession, CURLOPT_URL,$url);
    curl_setopt($cSession, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($cSession, CURLOPT_HEADER, 0); 
    curl_setopt($cSession, CURLOPT_SSL_VERIFYPEER, 0);
    $result = curl_exec($cSession);
    curl_close($cSession);
    $result = json_decode($result, 1);
    $overview = $result['overview'];
    echo($overview);
?>
