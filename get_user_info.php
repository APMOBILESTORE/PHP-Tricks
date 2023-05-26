<?php
$query = @unserialize(file_get_contents('http://ip-api.com/php/'));
if($query && $query['status'] == 'success') {
  echo 'Hello visitor from '.$query['country'].', '.$query['city'].'!';
} else {
  echo 'Unable to get location';
}
?>
