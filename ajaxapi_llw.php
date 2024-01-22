<?php
// Print received data for debugging
//$responseData = array('content' => 'Updated content from the server',);
//header('Content-Type: application/json');
//echo json_encode($responseData);
//exit();

// Initialize cURL session
function getTable_llw($table) {
    $curl = curl_init();

    // Set cURL options for GET request to fetch data from the 'farm' table
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://veldtoe.co.za/dev/api.php/records/".$table,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: application/json",
        ),
    ));

    // Execute cURL session and store the response
    $response = curl_exec($curl);

    // Decode the JSON response into an associative array
    $responseArray = json_decode($response, true);

    // Check for cURL errors
    $err = curl_error($curl);

    // Close cURL session
    curl_close($curl);

    // Check if there was an error during the cURL request
    if ($err) return false;
    else {
        // Return the decoded response array (data retrieved from the API) as an array of objects
        $objectArray = array();
        foreach ($responseArray['records'] as $record) $objectArray[] = (object)$record;
        return $objectArray;
    }
}
function checkImage($type, $id, $fileName) {
    $directory = "/home/veldtuoy/public_html/dev/photos/{$type}/{$id}/";
    $files = scandir($directory);
    $matchingFiles = preg_grep("/^{$fileName}\..*$/", $files);
    
    // Check if there is at least one matching file
    if (!empty($matchingFiles)) {
        reset($matchingFiles);
        $fullFileName = "https://www.veldtoe.co.za/dev/photos/{$type}/{$id}/".current($matchingFiles);
    } else {
        // Gets image placeholder if image doesn't exist
        $fullFileName = 'https://www.veldtoe.co.za/dev/photos/no-image.jpg';
    }
    return $fullFileName;
}

$farms = getTable_llw('farm');
foreach($farms as $farm) {
    $farm->profileImage = checkImage('farms', $farm->farm_id, 'profile');
}
$jsonData = json_encode($farms);
echo $jsonData;
exit();


