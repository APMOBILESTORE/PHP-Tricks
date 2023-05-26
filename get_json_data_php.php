<?php
$people_json = file_get_contents('data.json');
$decoded_json = json_decode($people_json, true);
?>

<?php echo $decoded_json['name']; ?>
<?php echo $decoded_json['address']; ?>
<?php echo $decoded_json['mobile']; ?>
