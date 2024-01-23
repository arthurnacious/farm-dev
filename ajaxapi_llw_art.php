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
$db_name = 'farm';

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

$check_in       = $_POST['check_in'];
$check_out      = $_POST['check_out'];
$hunters        = $_POST['hunters'];
$guests         = $_POST['guests'];


$tagNames = [];
foreach ($tags as $key => $value) {
    if (isset($tags[$key]) && $tags[$key] !== '') {
        $tagNames[] = ucwords(str_replace("_", " ", $key));
    }
}

//references
if (!empty($tagNames)) {
  $featureSql = "SELECT id FROM reference_features WHERE english IN ('" . implode("', '", $tagNames) . "')";
  $featureResult = $conn->query($featureSql);

  while ($row = $featureResult->fetch_assoc()) {
      $featureIds[] = $row['id'];
  }
}

$sql = "SELECT f.*, 
        COALESCE(AVG(fr.star_rating), 0) AS average_rating, 
        COUNT(DISTINCT fr.hunter_id) as count_rating,
        AVG(au.price) AS avg_price, 
        MIN(au.price) AS min_price, 
        MAX(au.price) AS max_price
        FROM farm f
        LEFT JOIN farm_features ff ON f.farm_id = ff.farm_id
        LEFT JOIN reference_features rf ON ff.feature_id = rf.id
        LEFT JOIN farm_ratings fr ON f.farm_id = fr.farm_id
        LEFT JOIN accommodation_units au ON f.farm_id = au.farm_id";
$sql .= !empty($featureIds) ? " WHERE (rf.id IN (" . implode(", ", $featureIds) . ")) " : null;
$sql .= !empty($location) ? " AND f.district LIKE '%" . $location . "%'" : null;
$sql .= !empty($searchKeywords) ? " AND f.farm_name LIKE '%" . $searchKeywords . "%'" : null;
$sql .= " GROUP BY f.farm_id";
$sql .= " ORDER BY f.farm_id";


$result = $conn->query($sql);

$farms = [];
while ($farm = $result->fetch_assoc()) {
    $farms[] = $farm;
}

$conn->close(); //close connection

$data = [];
$i = 0;
foreach ($farms as $farm) { //add images to each farm...
  // farm_image
  $farms[$i]['farm_image'] = checkImage('farms', $farm->farm_id, 'profile');
  $i++;
}

echo json_encode($farms);
exit();
















