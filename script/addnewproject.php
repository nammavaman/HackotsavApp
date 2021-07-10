<?php
if(isset($_POST['submit']))
{
    $EnteredManpower = $_POST['Manpower'];
    $EnteredTools = $_POST['Tools'];
    $EnteredBudget = $_POST['Budget'];
    $EnteredVehicles = $_POST['Vehicles'];
        
    include('getresources.php');
    // echo 'Manpower = '.$Manpower;
    // echo ' Tools = '.$Tools;
    // echo ' Budget = '.$Budget;
    // echo ' Vehicles = '.$Vehicles;
    include('getprojectdetails.php');

   
    echo($Manpower>$EnteredManpower);
    echo($Budget>$EnteredBudget);
    echo($Tools>$EnteredTools);
    echo($Vehicles>$EnteredVehicles);
    //compare new project input values here
    if($Manpower>$EnteredManpower && $Budget>$EnteredBudget && $Tools>$EnteredTools && $Vehicles>$EnteredVehicles)
    {
        $url = 'https://z9lqck4h2k.execute-api.ap-south-1.amazonaws.com/Hackotsav/projectdetails';
        $ch = curl_init($url);
        $jsonData = array(
            'Project_ID' => 11,
            'Budget' => $EnteredBudget,
            'Manpower' => $EnteredManpower,
            'ProjectStage' => 1,
            'Tools' => $EnteredTools,
            'Vehicles' => $EnteredVehicles
        );
        $jsonDataEncoded = json_encode($jsonData);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
        $result = curl_exec($ch);
        header("Location: /");
    }

    

}

?>