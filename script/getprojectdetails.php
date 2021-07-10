<?php


$url = 'https://ticaq2jk54.execute-api.ap-south-1.amazonaws.com/GetDetails/getprojectdetails';
$line = file_get_contents($url);
$array = json_decode($line,true);

$last = end($array);
$nextid = $last['Project_ID']+1;

print_r($array);



?>