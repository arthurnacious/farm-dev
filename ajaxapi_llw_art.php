<?php
$responseData = $_POST;

function escapeLineBreaksAndSpaces($inputString): string {
  // Remove \r\n
  $outputString = str_replace("\r\n", '', $inputString);

  // Remove multiple spaces
  $outputString = preg_replace('/\s+/', ' ', $outputString);

  return $outputString;
}


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
$capacity = (int) $hunters + (int) $guests;

// search location
$radius         = $_POST['radius'];
$latitute       = isset($_POST['latitute']) && is_numeric($_POST['latitute']) ? (float) $_POST['latitute'] : 0;
$longitude      = isset($_POST['longitude']) && is_numeric($_POST['longitude']) ? (float) $_POST['longitude'] : 0;
$boundingbox    = $_POST['boundingbox'];

// echo json_encode($_POST);
// exit();


$tagNames = [];
foreach ($tags as $key => $value) {
    if (isset($tags[$key]) && $tags[$key] !== "0" && $tags[$key] !== '' && $tags[$key] !== 0) {
        $tagNames[] = ucwords(str_replace("_", " ", $key));
    }
}

//references
if (!empty($tagNames)) {
  $featureSql = "SELECT id FROM reference_features WHERE english IN ('" . implode("', '", $tagNames) . "')";
  $featureResult = $conn->query($featureSql);

  $featureIds = [];
  while ($row = $featureResult->fetch_assoc()) {
      $featureIds[] = $row['id'];
  }
}

$sql = "SELECT f.*, 
  COALESCE(AVG(fr.star_rating), 0) AS average_rating, 
  COUNT(DISTINCT fr.hunter_id) as count_rating,
  AVG(au.price) AS avg_price, 
  MIN(au.price) AS min_price, 
  MAX(au.price) AS max_price";
  if(!empty($radius)){
    $sql .=  ", (6371 * acos(cos(radians(".$latitute.")) * cos(radians(f.latitude)) * cos(radians(f.longitude) - radians(".$longitude.") + sin(radians(".$latitute.")) * sin(radians(f.latitude))))) AS distance_value
    FROM farm f";
  }
  $sql .= " LEFT JOIN farm_features ff ON f.farm_id = ff.farm_id
  LEFT JOIN reference_features rf ON ff.feature_id = rf.id
  LEFT JOIN farm_ratings fr ON f.farm_id = fr.farm_id
  LEFT JOIN accommodation_units au ON f.farm_id = au.farm_id
  LEFT JOIN bookings b ON b.farm_id = au.farm_id";

// Add WHERE clause if any of the conditions are present
$conditions = [];

if (!empty($check_out)) {
    $conditions[] = "b.booking_date_to <= " . $check_out;
}

if (!empty($featureIds) && count($featureIds) > 0) {
    $conditions[] = "(rf.id IN (" . implode(", ", $featureIds) . "))";
}

if (!empty($location)) {
    $conditions[] = "f.district LIKE '%" . $location . "%'";
}

if (!empty($searchKeywords)) {
    $conditions[] = "f.farm_name LIKE '%" . $searchKeywords . "%'";
}

if (!empty($category)) {
    $conditions[] = "f.category = " . (int) $category;
}

if (!empty($conditions)) {
    $sql .= " WHERE " . implode(" AND ", $conditions);
}

if(!empty($radius) && !empty($boundingbox)){
  $topLeftLat     = $boundingbox[0];
  $bottomRightLat = $boundingbox[1];
  $topLeftLong     = $boundingbox[2];
  $bottomRightLong     = $boundingbox[3];

  $sql .= !empty($conditions) ? " AND " : " WHERE ";
  $sql .= " f.latitude BETWEEN ".$topLeftLat." AND ".$bottomRightLat."
              AND f.longitude BETWEEN ".$topLeftLong." AND ".$bottomRightLong;
}

$sql .= " GROUP BY f.farm_id";

if(!empty($radius) && !empty($boundingbox)){
  $sql .= " HAVING distance_value < ". $radius;
}
$sql .= " ORDER BY f.farm_id";


// echo json_encode(escapeLineBreaksAndSpaces($sql));
// exit();

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
  $farms[$i]['farm_image'] = checkImage('farms', $farm['farm_id'], 'profile');
  $i++;
}

echo json_encode($farms);
exit();
















