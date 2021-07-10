<?php
$url = 'https://qjyze194nh.execute-api.ap-south-1.amazonaws.com/TotalDetails/gettotaldetails';
$line = file_get_contents($url);
$array = json_decode($line,true);
$Manpower = $array[0]['Manpower'];
$Tools = $array[0]['Tools'];
$Budget = $array[0]['Budget'];
$Vehicles = $array[0]['Vehicles'];


?>