<?php
if(isset($_POST['submit']))
{
    include('getresources.php');
    if(isset($_POST['Manpower']) && isset($_POST['Budget']) && isset($_POST['Tools']) && isset($_POST['Vehicles']))
    {
        $EnteredManpower = $_POST['Manpower'];
        $EnteredTools = $_POST['Tools'];
        $EnteredBudget = $_POST['Budget'];
        $EnteredVehicles = $_POST['Vehicles'];

        if((int)$EnteredManpower==0)
            $EnteredManpower=$Manpower;
        if((int)$EnteredTools==0)
            $EnteredTools=$Tools;
        if((int)$EnteredBudget==0)
            $EnteredBudget=$Budget;
        if((int)$EnteredVehicles==0)
            $EnteredVehicles=$Vehicles;

    
        $url = 'https://1q4xuwd08e.execute-api.ap-south-1.amazonaws.com/Hackotsav/hackotsav';
        $ch = curl_init($url);
        $jsonData = array(
                
            'Manpower' => $EnteredManpower,
            'Tools' => $EnteredTools,
            'Budget' => $EnteredBudget,
            'Identifier'=>1,
            'Vehicles' => $EnteredVehicles
        );
        $jsonDataEncoded = json_encode($jsonData);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
        $result = curl_exec($ch);
            
        curl_close($ch);
        
        header("Location: /");


    }
    

}

?>