<?php
if(isset($_POST['submit']))
{
    $EnteredManpower = $_POST['Manpower'];
    $EnteredTools = $_POST['Tools'];
    $EnteredBudget = $_POST['Budget'];
    $EnteredVehicles = $_POST['Vehicles'];
        
    include('getresources.php');
    include('getprojectdetails.php');

    //compare new project input values here
    if(isset($EnteredManpower) && isset($EnteredBudget) && isset($EnteredTools) && isset($EnteredVehicles))
    {
        if($Manpower>$EnteredManpower && $Budget>$EnteredBudget && $Tools>$EnteredTools && $Vehicles>$EnteredVehicles)
        {
            $url = 'https://z9lqck4h2k.execute-api.ap-south-1.amazonaws.com/Hackotsav/projectdetails';
            $ch = curl_init($url);
            $jsonData = array(
                'Project_ID' => (string)$nextid,
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
            curl_close($ch);
            $url = 'https://1q4xuwd08e.execute-api.ap-south-1.amazonaws.com/Hackotsav/hackotsav';
            $ch = curl_init($url);
            $jsonData = array(
                
                'Manpower' => $Manpower-(int)$EnteredManpower,
                'Tools' => $Tools-(int)$EnteredTools,
                'Budget' => $Budget-(int)$EnteredBudget,
                'Identifier'=>1,
                'Vehicles' => $Vehicles-(int)$EnteredVehicles
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
    

}

?>
