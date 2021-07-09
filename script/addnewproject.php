<?php

include('getresources.php');
echo 'Manpower = '.$Manpower;
echo ' Tools = '.$Tools;
echo ' Budget = '.$Budget;
echo ' Vehicles = '.$Vehicles;

//compare new project input values here

$url = 'https://z9lqck4h2k.execute-api.ap-south-1.amazonaws.com/Hackotsav/projectdetails';
$ch = curl_init($url);
$jsonData = array(
    'Project_ID' => '10',
    'Budget' => 1000,
    'Manpower' => 10,
    'ProjectStage' => 1,
    'Tools' => 10,
    'Vehicles' => 10
);
$jsonDataEncoded = json_encode($jsonData);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($ch);


?>