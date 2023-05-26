<?php

$inf = curl_init('http://ipwhois.app/json/');
curl_setopt($inf, CURLOPT_RETURNTRANSFER, true);
$jsonData = curl_exec($inf);
curl_close($inf);

$resultData = json_decode($jsonData, true);
var_dump($resultData);

?>
