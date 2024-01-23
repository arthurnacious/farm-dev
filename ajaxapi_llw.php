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

// require('/home/veldtuoy/llw_php/llw_config.php');
//please remove me
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('HTTP/1.1 403 Forbidden');
  exit('Direct script access is not allowed.');
}
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'Pass1234';
// $db_name = 'farm';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);



if ($conn->connect_error) {
  echo json_encode("failed".$conn->connect_error);
  exit();
}



$searchKeywords = $_POST['keyword'];
$category       = $_POST['category'];
$location       = $_POST['location'];
$tags           = $_POST['tags'];
$on_load        = $_POST['load'];


if (count($_POST) !== 0) { //with search

  $tagNames = [];
  foreach ($tags as $key => $value) {
    if (isset($tags[$key]) && $tags[$key] !== '') {
      $tagNames[] = ucwords(str_replace("_", " ", $key));
    }
  }


  $sqlStmnt = "SELECT id FROM reference_features WHERE english IN ('" . implode("', '", array_map(function($tagName) {
    global $conn;
    return mysqli_real_escape_string($conn, $tagName);
  }, $tagNames)) . "')";

  $result = $conn->query($sqlStmnt);

  $featureId = [];
  while ($row = $result->fetch_assoc()) {
      $featureId[] = $row['id'];
  }

  $farmSql = "SELECT * FROM farm where farm_id = 0"; // will return null if there is no farm features found...

  if(count($featureId) > 0){
    $farmFeat = "SELECT farm_id FROM farm_features where feature_id IN (". implode(", ", $featureId) . ")";
    
    $farmFetRes = $conn->query($farmFeat);

    $farmIds = [];
    while ($row = $farmFetRes->fetch_assoc()) {
        $farmIds[] = $row['farm_id'];
    }

    if(count($farmIds) > 0){
      $ands = '';

      if($searchKeywords != '')
      {
        $ands .= " AND farm_name LIKE '%". $searchKeywords ."%'";
      }

      if($location != '')
      {
        $ands .= " AND district like '%". $location ."%'";
      }

      $farmSql = "SELECT * FROM farm where farm_id IN (". implode(", ", $farmIds) . ")" . $ands;
    }
  }

  $result = $conn->query($farmSql);


}else{ //without search

  $sqlStmnt = "SELECT * FROM farm";
  $result = $conn->query($sqlStmnt);

}

$farms = [];
while ($row = $result->fetch_assoc()) {
  $farms[] = $row;
}

$data = [];
$i = 0;
foreach ($farms as $farm) {
  // profile_image
  $farms[$i]['profile_image'] = checkImage('farms', $farm->farm_id, 'profile');

  // average_rating
  $averageQuery = $conn->query("SELECT AVG(star_rating) AS average_rating, COUNT(DISTINCT(hunter_id)) as count_rating  FROM farm_ratings WHERE farm_id = ". $farm['farm_id']);
  $averageResult = $averageQuery->fetch_assoc();
  $farms[$i]['average_rating'] = $averageResult['average_rating'] ?? 0;
  $farms[$i]['count_rating'] = $averageResult['count_rating'] ?? 0;


  // price from
  $priceQuery = $conn->query("SELECT AVG(price) AS avg_price, MIN(price) AS min_price, MAX(price) AS max_price FROM accommodation_units WHERE farm_id = " . $farm['farm_id']);
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
















