<?php
$people_json = file_get_contents('https://ipinfo.io/json');
$decoded_json = json_decode($people_json, true);
?>
<?php echo $decoded_json['ip']; ?>
<br>
<?php echo $decoded_json['city']; ?>
<br>
<?php echo $decoded_json['region']; ?>
<br>
<?php echo $decoded_json['country']; ?>
<br>
<?php echo $decoded_json['loc']; ?>
<br>
<?php echo $decoded_json['org']; ?>
<br>
<?php echo $decoded_json['postal']; ?>
<br>
<?php echo $decoded_json['timezone']; ?>
