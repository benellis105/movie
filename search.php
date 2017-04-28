<?php
    error_reporting(0);
    $search = $_GET['search'];
    $search = str_replace(" ", "%20", $search);
    $url = "https://api.themoviedb.org/3/search/movie?api_key=7ff0d10e861ad74ae54df0dbf1d0e794&language=en-US&query=" . $search . "&page=1&include_adult=false";
    $cSession = curl_init(); 
    curl_setopt($cSession, CURLOPT_URL,$url);
    curl_setopt($cSession, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($cSession, CURLOPT_HEADER, 0); 
    curl_setopt($cSession, CURLOPT_SSL_VERIFYPEER, 0);
    $result = curl_exec($cSession);
    curl_close($cSession);
    $result = json_decode($result, 1);
    $i = 0;
    foreach ($result['results'] as $movie) {
        $title = $movie['original_title'];
        $id = $movie['id'];
        echo ('<a href="#" onclick="getResults(' . $id . ')">' . $title . '</a><br>');
    }
?>