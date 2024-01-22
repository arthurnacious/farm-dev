<?php
$responseData = $_POST;




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
  $files = (array) scandir($directory);
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
require('/home/veldtuoy/llw_php/llw_config.php');

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);




if ($conn->connect_error) {
  echo json_encode("failed".$conn->connect_error);
  exit();
}




$searchKeywords = $_POST['keyword'];
$category       = $_POST['category'];
$location       = $_POST['location'];
$tags           = $_POST['tags'];




$sqlStmnt = "SELECT * FROM farm";
$conditions = [];




if ($searchKeywords) {
  $conditions[] = "(farm_name LIKE '%$searchKeywords%' OR farm_description_afrikaans LIKE '%$searchKeywords%' OR farm_description_english LIKE '%$searchKeywords%')";
}


if (!empty($category)) {
  $conditions[] = "category = $category";
}




if ($location) {
  $conditions[] = "district LIKE '%$location%'";
}


foreach ($tags as $key => $value) {
   if (isset($tags[$key]) && $tags[$key] !== '') {
       $conditions[] = "$key = " . (int) $value;
   }
}


if (!empty($conditions)) {
  $sqlStmnt .= " WHERE " . implode(" AND ", $conditions);
}

$sqlresult = $conn->query($sqlStmnt);



$farms = [];
while ($row = $sqlresult->fetch_assoc()) {
  $farms[] = $row;
}


$data = [];
$i = 0;
foreach ($farms as $farm) {
  // profile_image
  $farms[$i]['profile_image'] = checkImage('farms', $farm->farm_id, 'profile');

  // average_rating
  $averageQuery = $conn->query("SELECT AVG(star_rating) AS average_rating FROM farm_ratings WHERE farm_id = ". $farm['farm_id']);
  $averageResult = $averageQuery->fetch_assoc();
  $farms[$i]['average_rating'] = $averageResult['average_rating'] ?? 0;


  // price from
  $priceQuery = $conn->query("SELECT AVG(price) AS avg_price, MIN(price) AS min_price, MAX(price) AS max_price FROM farm_accommodation_stock WHERE farm_id = " . $farm['farm_id']);
  $priceResult = $priceQuery->fetch_assoc();
  $farms[$i]['price'] = [];
  if($priceResult){
    $farms[$i]['price']['from'] = $priceResult['min_price'];
    $farms[$i]['price']['to'] = $priceResult['max_price'];
  }
  $i++;
}


$conn->close();
echo json_encode($farms); // Debugging
exit();
















