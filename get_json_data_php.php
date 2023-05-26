<?php
$people_json = file_get_contents('data.json');
$decoded_json = json_decode($people_json, true);
?>
