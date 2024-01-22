<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Pinegrow Web Editor - Directory Bootstrap v5 Template">
        <meta name="author" content="">
        <title>Veldtoe | Where your hunt begins</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="blocks.css">
        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Flex:400&display=swap">
    </head>
    <body class="text-black-50">
        <header style="background-color: rgba(255, 255, 255, 0.05);" class="fixed-top" id="navbar">
            <nav class="navbar navbar-expand-lg navbar-light pb-lg-0 pt-lg-0" data-pgc="lj.navbar"> 
                <div class="container"> <a class="fw-bold navbar-brand text-warning" href="."><img src="assets/img/veldtoe_logo1.png" width="115" height="46"></a>
                    <ul class="align-items-lg-center flex-row ms-auto me-2 me-lg-0 navbar-nav order-lg-2"> 
                        <li class="d-none d-sm-block nav-item"> <a class="btn btn-light pe-4 ps-4 rounded-pill" href="Farm-register.html"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.25em" height="1.25em" class="me-2">
                                    <g>
                                        <path fill="none" d="M0 0h24v24H0z"/>
                                        <path d="M11 11V7h2v4h4v2h-4v4h-2v-4H7v-2h4zm1 11C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z"/>
                                    </g>
                                </svg><span class="align-middle">Add Listing</span></a> 
                        </li>
                        <li class="ms-2 nav-item"> 
</li>
                        <li class="ms-2 nav-item">
                            <div class="form-check form-switch">
                                <input class="bg-warning form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                <label class="form-check-label text-white" for="flexSwitchCheckChecked">Switch to Afrikaans
</label>
                            </div>                             
                        </li>                         
                    </ul>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown-3" aria-controls="navbarNavDropdown-3" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> 
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNavDropdown-3"> 
                        <ul class="navbar-nav "> 
                            <li class="nav-item"> 
</li>                             
                            <li class="nav-item"> 
</li>                             
                        </ul>
                        <ul class="align-items-lg-center ms-auto navbar-nav"> 
                            <li class="nav-item"> <a class="nav-link px-lg-3 py-lg-4 text-white" href="Farmer-register.html"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.25em" height="1.25em" class="me-2">
                                        <g>
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-4.987-3.744A7.966 7.966 0 0 0 12 20c1.97 0 3.773-.712 5.167-1.892A6.979 6.979 0 0 0 12.16 16a6.981 6.981 0 0 0-5.147 2.256zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"></path>
                                        </g>
                                    </svg>Login/Sign Up</a> 
                            </li>                             
                        </ul>                         
                    </div>                     
                </div>                 
            </nav>
        </header>
        <section class="background-cover bg-dark pb-4 position-relative pt-5" style="background-image:url('https://images.unsplash.com/photo-1515914560649-8fe5d631aa62?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wyMDkyMnwwfDF8c2VhcmNofDI5fHxzYWZhcml8ZW58MHx8fHwxNjkwODEzNzM3fDA&ixlib=rb-4.0.3&q=80&w=1080');">
            <div class="container mt-5 position-relative pt-5">
                <div class="mt-5 pb-5 pt-5"></div>
                <div class="mt-5 pb-5 pt-5"></div>
                <div class="mt-5 pb-5 pt-5"></div>
            </div>
        </section>
        <main>
            
            
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //== REGISTER USER ==//
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];

    // Validate form data (you can add more validation as needed)
    if (empty($name) || empty($surname) || empty($email) || empty($mobile)) {
        echo "<p style='color: red;'>All fields are required: Please complete Step 0 with your personal information</p>";
    } else {
        // Create an associative array with the data
        $data0 = [
            "name" => $name,
            "surname" => $surname,
            "email" => $email,
            "mobile" => $mobile
        ];

        // Convert data to JSON format
        $jsonData0 = json_encode($data0);

        // Send the data to the php-crud-api service using cURL
        $apiUrl0 = "http://veldtoe.co.za/dev/api.php/records/profiles"; // Change this URL to your php-crud-api endpoint
        $ch0 = curl_init($apiUrl0);
        curl_setopt($ch0, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch0, CURLOPT_POSTFIELDS, $jsonData0);
        curl_setopt($ch0, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch0, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData0)
        ]);

        // Execute cURL session and get the response
        $response0 = curl_exec($ch0);

        // Close cURL session
        curl_close($ch0);

        // Process the response (you may want to check for errors)
        //echo "<h2>Registration Successful!</h2>";
        //echo "<p><strong>Name:</strong> $name $surname</p>";
        //echo "<p><strong>Email:</strong> $email</p>";
        //echo "<p><strong>Mobile Number:</strong> $mobile</p>";
    }
    //===== <<REGISTER USER>> =====//




    //== REGISTER FARM ==//
        $farmNumber = $_POST["farm_number"];
        $ownerName = $_POST["name"];
        $ownerSurname = $_POST["surname"];
        $ownerEmail = $_POST["email"];
        $ownerMobile = $_POST["mobile"];
        $farmName = $_POST["farm_name"];
        $farmSize = $_POST["farm_size"];
        $farmDescriptionEnglish = $_POST["farm_description_english"];
        $farmDescriptionAfrikaans = $_POST["farm_description_afrikaans"];
        $district = $_POST["district"];
        $longitude = $_POST["longitude"];
        $latitude = $_POST["latitude"];
        $accommodation = $_POST["accommodation"];
        $aircon = isset($_POST["aircon"]) ? 1 : 0;
        $freeWifi = isset($_POST["free_wifi"]) ? 1 : 0;
        $housekeeping = isset($_POST["housekeeping"]) ? 1 : 0;
        $swimmingPool = isset($_POST["swimming_pool"]) ? 1 : 0;
        $dstv = isset($_POST["dstv"]) ? 1 : 0;
        $wood = isset($_POST["wood"]) ? 1 : 0;
        $boma = isset($_POST["boma"]) ? 1 : 0;
    
        // Validate form data (you can add more validation as needed)
        if (empty($farmName) || empty($district) || empty($longitude) || empty($latitude) || empty($farmDescriptionEnglish) || empty($accommodation)) {
            echo "<p style='color: red;'>All fields marked with * are required: Please complete the farm information</p>";
        } else {
            // Create an associative array with the data
            $data1 = [
                "farm_number" => $farmNumber,
                "owner_name" => $ownerName,
                "owner_surname" => $ownerSurname,
                "owner_email" => $ownerEmail,
                "owner_mobile" => $ownerMobile,
                "farm_name" => $farmName,
                "district" => $district,
                "longitude" => $longitude,
                "latitude" => $latitude,
                "farm_description_english" => $farmDescriptionEnglish,
                "farm_description_afrikaans" => $farmDescriptionAfrikaans,
                "farm_size" => $farmSize,
                //"accommodation" => $accommodation,
                "accommodation" => 12,
                "aircon" => $aircon,
                "free_wifi" => $freeWifi,
                "housekeeping" => $housekeeping,
                "swimming_pool" => $swimmingPool,
                "dstv" => $dstv,
                "wood" => $wood,
                "boma" => $boma
            ];
            //var_dump($data1);
            //echo "<br /><br />>>";
    
            // Convert data to JSON format
            $jsonData1 = json_encode($data1);
            //echo $jsonData;
    
            // Send the data to the php-crud-api service using cURL
            $apiUrl1 = "http://veldtoe.co.za/dev/api.php/records/farm"; // Change this URL to your php-crud-api endpoint
            $ch1 = curl_init($apiUrl1);
            curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch1, CURLOPT_POSTFIELDS, $jsonData1);
            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch1, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($jsonData1)
            ]);
    
            // Execute cURL session and get the response
            $response = curl_exec($ch1);
            $curlerror = curl_error($ch1);
            //echo $response;
            // Close cURL session
            curl_close($ch1);

    
    
    
            // Process the response (you may want to check for errors)
            echo "<h2>Data Submitted Successfully!</h2>";
            echo "<p><strong>Farm Name:</strong> $farmName</p>";
            echo "<p><strong>District:</strong> $district</p>";
            echo "<p><strong>Longitude:</strong> $longitude</p>";
            echo "<p><strong>Latitude:</strong> $latitude</p>";
            echo "<p><strong>Farm Description (English):</strong> $farmDescriptionEnglish</p>";
            echo "<p><strong>Farm Description (Afrikaans):</strong> $farmDescriptionAfrikaans</p>";
            echo "<p><strong>Accommodation:</strong> $accommodation</p>";
            echo "<p><strong>Facilities:</strong> Aircon: $aircon, Free WiFi: $freeWifi, Housekeeping: $housekeeping, Swimming Pool: $swimmingPool, DSTV: $dstv, Wood: $wood, Boma: $boma</p>";
    
            // Create folder with farm name
            $folderPath = "photos/farms/$farmName";
            if (!file_exists($folderPath) && !mkdir($folderPath, 0777, true)) {
                die('Failed to create folders...');
            }
    
            // Upload images to the folder
            $uploadedImages = [];
            $totalFiles = count($_FILES['images']['name']);
    
            for ($i = 0; $i < $totalFiles; $i++) {
                $fileName = $_FILES['images']['name'][$i];
                $targetPath = "$folderPath/$fileName";
    
                if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetPath)) {
                    $uploadedImages[] = $fileName;
                }
            }
    
            // Display success message
            echo "<h3>Images Uploaded Successfully!</h3>";
            if (!empty($uploadedImages)) {
                echo "<p><strong>Uploaded Images:</strong> " . implode(', ', $uploadedImages) . "</p>";
            }
        }
    //===== <<REGISTER FARM>> =====//

    
    //=== GET: RETRIEVE FARM_ID ===//
	$curl1b = curl_init();
	curl_setopt_array($curl1b, array(
	   CURLOPT_URL => "https://veldtoe.co.za/dev/api.php/records/profiles",
	   CURLOPT_RETURNTRANSFER => true,
	   CURLOPT_ENCODING => "",
	   CURLOPT_MAXREDIRS => 10,
	   CURLOPT_TIMEOUT => 30,
	   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	   CURLOPT_CUSTOMREQUEST => "GET",
		//CURLOPT_POSTFIELDS => $datastring1b,
	  //  CURLOPT_POSTFIELDS => $datajson1b,
	  // CURLOPT_POSTFIELDS => "type=password&value=".$passwordnew."&temporary=false",//."&client_id=health-realm",//."&client_id=admin-cli&client_secret=c7166ad8-6676-4ec7-9f34-6f0e9df88c98",
	   CURLOPT_HTTPHEADER => array(
		"cache-control: no-cache",
		"content-type: application/json",
		// "content-type: application/x-www-form-urlencoded",
		"Authorization: Bearer ".$admin_token,
	   ),
	 ));
	$response1b = curl_exec($curl6b);
	$response_array1b = json_decode($response1b, true);
    $sizeres = sizeof($response_array1b["records"]);
    echo '<br />';
    $farm_id = $response_array1b["records"][$sizeres-1]['farm_id'];
    //==============================================================//


    //=== WRITE ACCOMMODATION ===//
    $accom_capacity = $_POST["capacity"];
    $accom_boma = $_POST["boma"];
    $accom_butcher = $_POST["butcher_annex"];
    $accom_braai = $_POST["braai"];
    $accom_price = $_POST["price"];
    $accom_price_unit = $_POST["price_unit"];

    // Validate form data (you can add more validation as needed)
    if (empty($accom_capacity) || empty($accom_boma) || empty($accom_butcher) || empty($accom_braai) || empty($accom_price) || empty($accom_price_unit)) {
        echo "<p style='color: red;'>All fields are required: Please complete Step 2 with your personal information</p>";
    } else {
        // Create an associative array with the data
        $data2 = [
            "capacity" => $accom_capacity,
            "boma" => $accom_boma,
            "butcher_annex" => $accom_butcher,
            "braai" => $accom_braai,
            "price" => $accom_price,
            "price_unit" => $accom_price_unit
        ];

        // Convert data to JSON format
        $jsonData2 = json_encode($data2);

        // Send the data to the php-crud-api service using cURL
        $apiUrl2 = "http://veldtoe.co.za/dev/api.php/records/farm_accommodation_stock"; // Change this URL to your php-crud-api endpoint
        $ch2 = curl_init($apiUrl2);
        curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch2, CURLOPT_POSTFIELDS, $jsonData2);
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch2, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData2)
        ]);

        // Execute cURL session and get the response
        $response0 = curl_exec($ch2);

        // Close cURL session
        curl_close($ch2);

        // Process the response (you may want to check for errors)
        //echo "<h2>Registration Successful!</h2>";
        //echo "<p><strong>Name:</strong> $name $surname</p>";
        //echo "<p><strong>Email:</strong> $email</p>";
        //echo "<p><strong>Mobile Number:</strong> $mobile</p>";
    }
    
    
    //=== <<WRITE ACCOMMODATION>> ===//


    //=== WRITE SERVICES ===//
    
    
    //===== <<WRITE SERVICES>> =====//



}
?>
            
            
            
            <section class="pb-5 pt-5">
                <div class="container pb-2 pt-2">
                    <div class="gx-lg-5 gy-4 row">
                        <div class="col-lg-12 col-xl-12 order-lg-0"> 
                            <h2 class="h5 mb-3 text-dark">Let&apos;s register your farm in six easy steps</h2>
                            <div class="accordion" id="accordionExample">
                                
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingZero"> <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">Step 0 -Tell us about yourself</button> </h2>
                                    <div id="collapseZero" class="accordion-collapse collapse show" aria-labelledby="headingZero" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label"></label>
                                                    <input class="form-control" id="name" placeholder="Name"> 
                                                </div>
                                                <div class="mb-3">
                                                    <label for="surname" class="form-label"></label>
                                                    <input class="form-control" id="surname" placeholder="Surname"> 
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label"></label>
                                                    <input class="form-control" id="email" placeholder="Email address">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="mobile" class="form-label"></label>
                                                    <input class="form-control" id="mobile" placeholder="Mobile contact number">
                                                </div>
                                            </form>                                             
    
                                        </div>
                                    </div>
                                </div>
    
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne"> <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Step 1 -Tell us about your farm</button> </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label for="t" class="form-label"></label>
                                                    <input class="form-control" id="farm_name" placeholder="Farm Name"> 
                                                </div>
                                                <div class="mb-3">
                                                    <label for="t" class="form-label"></label>
                                                    <input class="form-control" id="farm_number" placeholder="Farm Number"> 
                                                </div>
                                                <div class="mb-3">
                                                    <label for="t" class="form-label">Farm Description (English): *</label>
                                                    <textarea id="farm_description_english" name="farm_description_english" class="form-control" required></textarea> 
                                                </div>
                                                <div class="mb-3">
                                                    <label for="t" class="form-label">Farm Description (Afrikaans):</label>
                                                    <textarea id="farm_description_afrikaans" name="farm_description_afrikaans" class="form-control" required></textarea> 
                                                </div>
                                                

                                                <div class="mb-3">
                                                        <label class="form-label">Facilities:</label>

                                                    <label><input type="checkbox" name="aircon"> Aircon</label>
                                                    <label><input type="checkbox" name="free_wifi"> Free WiFi</label>
                                                    <label><input type="checkbox" name="housekeeping"> Housekeeping</label>
                                                    <label><input type="checkbox" name="swimming_pool"> Swimming Pool</label>
                                                    <label><input type="checkbox" name="dstv"> DSTV</label>
                                                    <label><input type="checkbox" name="wood"> Wood</label>
                                                    <label><input type="checkbox" name="boma"> Boma</label>
                                                </div>
                                                    <div class="mb-3">
                                                        <label for="exampleDataList" class="form-label"></label>
                                                        <input class="form-control" type="number" id="farm_size" placeholder="Farm Size (ha)">
                                                    </div>
                                                <div class="mb-3">
                                                    <label for="t" class="form-label"></label>
                                                    <input class="form-control" id="district" placeholder="District"> 
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleDataList" class="form-label"></label>
                                                    <input class="form-control" id="farmlocation" placeholder="Type in coordinates or use my current location: Latitude, Longitude">
                                                </div>
                                            </form>                                             
                                            <div class="bg-light p-4">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3170.191198800076!2d-118.18046714839134!3d37.38531037973326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80be49e630bb0f4d%3A0x626d864ec13dbdba!2sAncient%20Bristlecone%20Pine%20Forest%20Visitor%20Center!5e0!3m2!1sen!2snp!4v1622962262896!5m2!1sen!2snp" height="350" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" width="100%" class="d-block" title="Location map"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Step 2 - Tell us about the accommodation</button> </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1"></label>
                                                    <select id="exampleFormControlSelect1" class="form-select" aria-label="Default select example">
                                                        <option selected>Select accommodation type</option>
                                                        <option value="1">Tents</option>
                                                        <option value="2">Chalets</option>
                                                        <option value="3">Camping</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="numberguest" class="form-label"></label>
                                                    <input class="form-control" id="numberguest" placeholder="Number of people">
                                                </div>                                                 
                                                <div class="mb-3">
                                                    <label for="accommdesc" class="form-label"></label>
                                                    <textarea class="form-control" id="accommdesc" rows="10"></textarea>
                                                </div>
                                            </form>                                             
                                            <div class="form-check form-switch">
                                                <label class="form-check-label" for="flexSwitchBoma">Boma</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchButcherHouse">
                                                <label class="form-check-label" for="flexSwitchButcherHouse">Butcher House</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchBraai">
                                                <label class="form-check-label" for="flexSwitchBraai">Braai Area</label>
                                            </div>
                                            <div class="mb-3">
                                                <label for="costpernignt" class="form-label"></label>
                                                <input class="form-control" id="costpernight" placeholder="Cost in ZAR per nignt">
                                            </div>                                             
                                            <div class="mb-3">
                                                <select id="exampleFormControlSelect1" class="form-select" aria-label="Default select example">
                                                    <option selected>Per</option>
                                                    <option value="1">Hunter</option>
                                                    <option value="2">Chalet</option>
                                                    <option value="3">Camp site</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Step 3 - Game Details
</button></h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" "">
                                        <div class="accordion-body">
                                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlSelect1"></label>
                                                    <select id="exampleFormControlSelect1" class="form-select" aria-label="Default select example">
                                                        <option selected>Select game you have available for hunting</option>
                                                        <option value="1">Elephant</option>
                                                        <option value="2">Impala</option>
                                                        <option value="3">Kudu</option>
                                                        <option value="4">Zebra</option>
                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h5>Male</h5> 
                                                        <input class="form-control" id="numberguest" placeholder="Price in ZAR">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5>Female</h5> 
                                                        <input class="form-control" id="numberguest" placeholder="Price in ZAR">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5>Trophy</h5> 
                                                        <input class="form-control" id="numberguest" placeholder="Price in ZAR">
                                                    </div>
                                                </div>                                                 
                                            </form>                                             
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="mb-3">
                                                        <button type="button" class=" btn btn-primary btn-sm mt-3">Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Step 4 - Let's load some photos
</button> </h2>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="align-items-center col-md-5 col-xl-6 mb-3">
                                                    <h5>Add photos of the accommodation and facilities on offer</h5>
                                                    <div class="mb-3">
                                                        <label for="formFileMultiple" class="form-label">You can select multiple photos and load them at once</label>
                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                    </div>
                                                    <label for="numberguest" class="form-label"></label>
                                                </div>
                                                <div class="col-md-5 col-xl-6 mb-3">
                                                    <img src="https://images.unsplash.com/photo-1627829631879-5b6e726cb57c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wyMDkyMnwwfDF8c2VhcmNofDEzfHxzYWZhcmklMjB0ZW50fGVufDB8fHx8MTY5MDc0MDU3OXww&ixlib=rb-4.0.3&q=80&w=200" class="img-thumbnail" width="120" height="Auto">
                                                    <img src="https://images.unsplash.com/photo-1631551221140-97f450f8f25d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wyMDkyMnwwfDF8c2VhcmNofDJ8fHNhZmFyaSUyMHRlbnR8ZW58MHx8fHwxNjkwNzQwNTc5fDA&ixlib=rb-4.0.3&q=80&w=200" class="img-thumbnail" width="120" height="Auto">
                                                    <img src="https://images.unsplash.com/photo-1507498016354-887e17c7d231?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wyMDkyMnwwfDF8c2VhcmNofDF8fGZpcmUlMjBwaXR8ZW58MHx8fHwxNjkwNzQwNjg4fDA&ixlib=rb-4.0.3&q=80&w=200" class="img-thumbnail" width="120" height="Auto">
                                                    <img src="https://images.unsplash.com/photo-1632757359515-44dae452b4a7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wyMDkyMnwwfDF8c2VhcmNofDIzfHxjaGFsZXRzJTIwYnVzaHZlbGR8ZW58MHx8fHwxNjkwNzQwODM4fDA&ixlib=rb-4.0.3&q=80&w=200" class="img-thumbnail" width="120" height="Auto">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="align-items-center col-md-5 col-xl-6 mb-3">
                                                    <h5>Add photos of animals and landscape of the farm</h5>
                                                    <label for="numberguest" class="form-label">You can select multiple photos and load them at once</label>
                                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                </div>
                                                <div class="col-md-5 col-xl-6 mb-3">
                                                    <img src="https://images.unsplash.com/photo-1632757319470-806ea2f10add?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wyMDkyMnwwfDF8c2VhcmNofDI0fHxidXNodmVsZHxlbnwwfHx8fDE2OTA3NDAxMjZ8MA&ixlib=rb-4.0.3&q=80&w=200" class="img-thumbnail" width="120" height="Auto">
                                                    <img src="https://images.unsplash.com/photo-1632757376223-5a30f14d713e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wyMDkyMnwwfDF8c2VhcmNofDl8fGJ1c2h2ZWxkfGVufDB8fHx8MTY5MDc0MDEyNnww&ixlib=rb-4.0.3&q=80&w=200" class="img-thumbnail" sizes="35vw,
(min-width: 576px) 466px,
(min-width: 768px) 249px,
(min-width: 992px) 349px,
(min-width: 1200px) 516px,
(min-width: 1400px) 606px" width="120" height="Auto">
                                                    <img src="https://images.unsplash.com/photo-1682610371065-79f69ca0e6c0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wyMDkyMnwwfDF8c2VhcmNofDU5fHxidXNodmVsZHxlbnwwfHx8fDE2OTA3NDA0MTJ8MA&ixlib=rb-4.0.3&q=80&w=200" class="img-thumbnail" sizes="35vw,
(min-width: 576px) 466px,
(min-width: 768px) 249px,
(min-width: 992px) 349px,
(min-width: 1200px) 516px,
(min-width: 1400px) 606px" width="120" height="Auto">
                                                </div>
                                            </div>                                             
                                        </form>
                                        <div class="row">
                                            <div class="align-items-center col-xl-auto">
                                                <button type="button" class="btn btn-warning">Add</button>
                                            </div>
                                        </div>
                                        <div class="row">
</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Step 5 - Throw in some extras
</button> </h2>
                                </div>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="align-items-center col-md-5 col-xl-4 mb-3">
                                                    <h5>Gun Hire</h5>
                                                    <label for="numberguest" class="form-label"></label>
                                                    <input class="form-control" id="animalpricemale" placeholder="Price in ZAR">
                                                </div>
                                                <div class="col-md-5 col-xl-4 mb-3">
                                                    <h5>Bakkie Hire</h5>
                                                    <label for="numberguest" class="form-label"></label>
                                                    <input class="form-control" id="animalpricefemale" placeholder="Price in ZAR">
                                                </div>
                                                <div class="col-md-5 col-xl-4 mb-3">
                                                    <h5>Bow Hire</h5>
                                                    <label for="numberguest" class="form-label"></label>
                                                    <input class="form-control" id="animalpricefemale" placeholder="Price in ZAR">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="align-items-center col-md-5 col-xl-4 mb-3">
                                                    <h5>Cook</h5>
                                                    <label for="numberguest" class="form-label"></label>
                                                    <input class="form-control" id="animalpricemale" placeholder="Price in ZAR">
                                                </div>
                                                <div class="col-md-5 col-xl-4 mb-3">
                                                    <h5>Professional Hunter (PH)</h5>
                                                    <label for="numberguest" class="form-label"></label>
                                                    <input class="form-control" id="animalpricefemale" placeholder="Price in ZAR">
                                                </div>
                                            </div>                                             
                                        </form>
                                        <div class="row">
                                            <div class="align-items-center col-xl-auto">
                                                <button type="button" class="btn btn-warning">Add</button>
                                            </div>
                                        </div>
                                        <div class="row">
</div>
                                    </div>
                                </div>
                            </div>                             
                        </div>
                    </div>                     
                </div>                 
            </section>
        </main>
        <script src="scripts/navscroll.js"></script>
        <footer class="bg-dark pt-5 text-secondary" data-pgc-define="lj.footer" data-pgc-define-name="Lekker jag footer" data-pgc-define-photo-preview-only data-pgc-section="Lekker Jag"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-lg-6 col-xl-4 py-3"> 
                        <h2 class="h5 mb-4 text-white">Subscribe</h2>
                        <p class="mb-3">Subscribe to our newsletter and get exclusive updates directly in your inbox.</p>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" class="mb-4"> 
                            <div class="bg-white border input-group overflow-hidden p-1 rounded-pill">
                                <input type="email" class="border-0 form-control pe-3 ps-3" placeholder="Enter email..." aria-label="Recipient's email" aria-describedby="button-addon2" required>
                                <button class="btn btn-primary pb-2 pe-4 ps-4 pt-2 rounded-pill" type="submit" id="button-addon2" aria-label="Submit">
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="d-inline-block" height="16" width="16">
                                        <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>                         
                    </div>
                    <div class="col-lg-6 col-xl-4 py-3"> 
</div>
                    <div class="col-lg-6 col-xl-4 py-3">
                        <h2 class="h5 mb-3 text-white">Get Social</h2> 
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" class="mb-4"> 
</form>
                        <div class="d-inline-flex flex-wrap"> <a href="#" class="link-secondary p-1" aria-label="facebook link"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                                    <path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"/> 
                                </svg> </a> <a href="#" class="link-secondary p-1" aria-label="twitter link"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                                    <path d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z"/> 
                                </svg> </a> <a href="#" class="link-secondary p-1" aria-label="instagram link"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                                    <path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"/> 
                                </svg> </a> <a href="#" class="link-secondary p-1" aria-label="linkedin link"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                                    <path d="M6.94 5a2 2 0 1 1-4-.002 2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z"/> 
                                </svg> </a> <a href="#" class="link-secondary p-1" aria-label="youtube link"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                                    <path d="M21.543 6.498C22 8.28 22 12 22 12s0 3.72-.457 5.502c-.254.985-.997 1.76-1.938 2.022C17.896 20 12 20 12 20s-5.893 0-7.605-.476c-.945-.266-1.687-1.04-1.938-2.022C2 15.72 2 12 2 12s0-3.72.457-5.502c.254-.985.997-1.76 1.938-2.022C6.107 4 12 4 12 4s5.896 0 7.605.476c.945.266 1.687 1.04 1.938 2.022zM10 15.5l6-3.5-6-3.5v7z"/> 
                                </svg> </a> 
                        </div>                         
                    </div>                     
                </div>                 
                <div class="pb-3 pt-3 small"> 
                    <hr class="border-secondary mt-0"> 
                    <div class="align-items-center row">
                        <div class="col-md pb-2 pt-2">
                            <p class="mb-0">&copy; 2023 | All Rights Reserved - Lekker Jag</p>
                        </div>
                        <div class="col-md-auto pb-2 pt-2"><a href="#" class="link-secondary text-decoration-none">Privacy Policy</a> | <a href="#" class="link-secondary text-decoration-none">Terms of Use</a>
                        </div>
                    </div>                     
                </div>                 
            </div>             
        </footer>
        <script src="scripts/gmaps.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initAutocomplete&libraries=places&v=weekly" defer></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
})
</script>
    </body>
</html>
