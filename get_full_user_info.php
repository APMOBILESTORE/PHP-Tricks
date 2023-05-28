<?php
$people_json = file_get_contents('https://ipinfo.io/json');
$decoded_json = json_decode($people_json, true);
?>
<?php echo $decoded_json['city']; ?>
<?php echo $decoded_json['country']; ?>
