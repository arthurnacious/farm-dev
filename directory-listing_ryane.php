<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Pinegrow Web Editor - Directory Bootstrap v5 Template">
        <meta name="author" content="">
        <title>Veldtoe | Where your hunt begins</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="blocks.css">
        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <script>
            let items = [];
    
            function sortItems(items, option) {
                switch (option) {
                    case "Name":
                        items.sort((a, b) => a.farm_name.localeCompare(b.farm_name));
                        break;
                    case "Price: High to Low":
                        items.sort((a, b) => b.min_price - a.min_price);
                        break;
                    case "Price: Low to High":
                        items.sort((a, b) => a.min_price - b.min_price);
                        break;
                    case "Nearby":
                        // items.sort((a, b) => a.distance - b.distance);
                        break;
                    case "Random":
                        items.sort(() => Math.random() - 0.5);
                        break;
                    default:
                        //no sorting
                        break;
                }
    
                updateDisplay(items);
            }
    
            function updateDisplay(items) {
                // Get the container element for the grids and clear it
                let displayContainer = document.getElementById('grids');
                displayContainer.innerHTML = '';

                if(items.length > 0) {
                    items.forEach(item => {
                        let itemHTML = `
                            <div class="pb-3 pt-3"> 
                                <div class="border">
                                        <a href="/directory-details.php?farm=${item.farm_id}" class="d-block">
                                            <div style="width: 100%; height: 240px; background-image: url('${item.farm_image}'); background-size: cover" > </div>
                                        </a>                                    
                                    <div class="pb-3 ps-4 pe-4 pt-4">
                                        <div class="align-items-center d-flex justify-content-between">
                                            <div class="pb-1 pt-1">
                                                <a href="/directory-details.php?farm=${item.farm_id}" class="link-dark text-decoration-none"><h2 class="h5 mb-1">${item.farm_name}</h2></a>
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.125em" height="1.125em" class="me-1 location text-primary">
                                                        <g>
                                                            <path fill="none" d="M0 0h24v24H0z"/>
                                                            <path d="M18.364 17.364L12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                                        </g>
                                                    </svg>
                                                    <span class="align-middle">${item.district}</span>
                                                </div>
                                            </div>
                                            <a class="btn fav ms-2 p-2 rounded-pill" href="/directory-details.php?farm=${item.farm_id}" aria-label="add to favorite">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="d-block">
                                                    <g>
                                                        <path fill="none" d="M0 0H24V24H0z"/>
                                                        <path d="M20.243 4.757c2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236C5.515 3 8.093 2.56 10.261 3.44L6.343 7.358l1.414 1.415L12 4.53l-.013-.014.014.013c2.349-2.109 5.979-2.039 8.242.228z"/>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                        <hr/>
                                        <div class="align-items-center d-flex justify-content-between">
                                            <div class="pb-1 pt-1">
                                                <span class="me-1 currentcolor">
                                                    ${generateStarRating(roundToNearestHalf(item.average_rating))}
                                                </span>
                                                <span class="align-middle">${roundToNearestHalf(item.average_rating)}</span>
                                                <span class="align-middle">
                                                    (
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                                    ${item.count_rating}
                                                    )
                                                </span>
                                            </div>
                                            <span class="fw-bold pb-1 pt-1">From R ${item.min_price ?? 0}</span>
                                        </div>
                                    </div>                                         
                                </div>                                     
                            </div>
                        `;
                        
                        // Append the new HTML to the container
                        displayContainer.innerHTML += itemHTML;
                    });
                }else{
                    displayContainer.innerHTML =    `<div class="pb-3 pt-3" id="empty">
                                                        <div class="alert alert-info" role="alert">
                                                            No farm(s) with those search params.
                                                        </div>
                                                    </div>`;
                }

                ///update markers
                let locations = items?.map((farm) => {
                    return {
                        lat: farm.latitude,
                        lon:  farm.longitude,
                        title: farm.farm_name
                     }
                });
                placeMarkers(locations);
            }
    
            window.onload = function() {
                document.getElementById('sortingOption').addEventListener('change', function() {
                    sortItems(items, this.value);
                });
            };
        </script>    

    </head>
    <body class="text-black-50">
        <header style="background-color: rgba(255, 255, 255, 0.6);" class="fixed-top" id="navbar">
            <nav class=" bg-dark bg-opacity-75 flex-grow-1 ms-auto navbar navbar-dark navbar-expand-lg pb-lg-0 pt-lg-0" style="background-color: rgba(52, 50, 50, 0.89);" data-pgc="veldtoe.navbar"> 
                <div class="container"> <a class="fw-bold navbar-brand text-warning" href="."><img src="assets/img/veldtoe_horns_words_option2.png" width="auto" height="74"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown-66" aria-controls="navbarNavDropdown-66" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> 
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNavDropdown-66"> 
                        <ul class="navbar-nav ms-auto"> 
                            <li class="nav-item">
                                <a class="nav-link px-lg-3 py-lg-4 text-light text-nowrap" href="#" data-pgc="hunterregister.modal">
                                    <img src="assets/img/hunter.png" style="margin-right: 5px;" data-bs-toggle="modal" data-bs-target="#modalSigninHunter">
                                    Hunter: Login/Sign Up
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-lg-3 py-lg-4 text-light text-nowrap" href="#">
                                    <img src="assets/img/farmer.png" style="margin-right: 5px;" data-bs-toggle="modal" data-bs-target="#modalSigninFarmer" data-pgc="Farmerregister.Modal">
                                    Farmer: Login/Sign Up
                                </a> 
                            </li>
                            <li class="nav-link m-4">
                                <div class="form-check form-switch text-nowrap">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" style="margin-right: 12px;">
                                    <label class="form-check-label text-white" for="flexSwitchCheckChecked">Switch to Afrikaans</label>
                                </div>                                 
                            </li>                             
                        </ul>                         
                    </div>                     
                </div>                 
            </nav>
        </header>
        <main>
            <section class="bg-dark">
                <div class="row">
                    <div class="col-lg-12 col-md-8 col-xl-12" style='border: 1px solid red '></div>
                    <div class="leaflet-map" id="map"></div>
                </div>
            </section>
            <section class="pb-5 pt-5">
                <div class="container pb-2 pt-2">
                    <div class="gx-lg-5 gy-4 row">
                        <div class="col-lg-5 col-xl-4 order-lg-1"> 
                            <div class="bg-light p-4 position-sticky top-0">
                                <h2 class="h5 text-dark">Filter Search</h2>
                                <hr/>
                                <form id='filterForm_llw'> 
                                    <div class="input-group mb-3">
                                        <input type="text" class="border-end-0 form-control p-3" name="search_keywords" id="search_keywords" placeholder="Looking for?" aria-label="Enter Keyword" aria-describedby="keyword-input">
                                        <span class="bg-white input-group-text pe-3 ps-3" id="keyword-input">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="border-end-0 form-control p-3" value="<?=isset($_GET['search_location']) ? $_GET['search_location'] : '' ?>" name="search_location" id="search_location" placeholder="Location" aria-label="Enter Location" aria-describedby="location-input">
                                        <span class="bg-white input-group-text pe-3 ps-3" id="location-input">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em">
                                                <path fill="none" d="M0 0h24v24H0z"/>
                                                <path d="M12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zm4.95-7.778a7 7 0 1 0-9.9 0L12 20.9l4.95-4.95zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
                                            </svg>
                                        </span>
                                    </div>                                     
                                    <div class="mb-3">
                                        <select class="form-select p-3" id="searchCategory">
                                            <option selected disabled value="">Category</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                    </div>
                                    <div class="mb-3" id="range-div">
                                        <label for="radiusRange" class="form-label text-secondary">Radius <span id="radiusCount">1</span> km</label>
                                        <input type="range" class="form-range" id="radiusRange" value="1">
                                    </div>
                                    <div class="row">
                                        <p class="col-12">Step 2: Select your dates</p>
                                        <div class="col-lg-6 col-sm-12 mb-1"> 
                                            <label for="check_in" class="col-form-label-lg form-label">Check in</label>
                                            <input name="check_in" id="check_in" type="date" class="border-end-0 form-control p-3" placeholder="When must your trip start?">
                                            <div class="input-group date" id="SelectFromDate2"></div>                                         
                                        </div>
                                        <div class="col-lg-6 col-sm-12 mb-1"> 
                                            <label for="check_out" class="col-form-label-lg form-label">Check out</label>
                                            <input name="check_out" id="check_out" type="date" class="border-end-0 form-control p-3" placeholder="When must your trip start?">
                                            <div class="input-group date" id="SelectToDate2"></div>               
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="numhunters" class="col-12 form-label">
                                                <span id="TimeText">1</span> hunters
                                            </label>
                                            <input name="hunters" type="range" class="form-range" min="1" max="20" value="1" id="TimeRange" style="width: fit-content;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="numguests" class="col-12 form-label">
                                                <span id="TimeTextGuests">0</span> guests
                                            </label>
                                            <input name="guests" type="range" class="form-range" min="0" max="20" value="0" id="TimeRangeGuests" style="width: fit-content;">
                                        </div>
                                    </div>
                                    <label class="form-label mb-3 text-secondary">Filter by tags</label>
                                    <div class="gy-2 mb-3 row row-cols-sm-2">
                                        <div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check_atm" />
                                                <label class="form-check-label" for="check_atm">ATM on Site</label>
                                            </div>                                             
                                        </div>
                                        <div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check_wfi"/>
                                                <label class="form-check-label" for="check_wfi">Free Wi-fi</label>
                                            </div>                                             
                                        </div>
                                        <div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check_hkp"/>
                                                <label class="form-check-label" for="check_hkp">Housekeeping</label>
                                            </div>                                             
                                        </div>
                                        <div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check_fit" />
                                                <label class="form-check-label" for="check_fit">Fitness Center</label>
                                            </div>                                             
                                        </div>
                                        <div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check_dtv" />
                                                <label class="form-check-label" for="check_dtv">DSTV</label>
                                            </div>                                             
                                        </div>
                                        <div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check_air" />
                                                <label class="form-check-label" for="check_air">Air Conditioned</label>
                                            </div>                                             
                                        </div>
                                        <div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check_gft" />
                                                <label class="form-check-label" for="check_gft">Gift Shop</label>
                                            </div>                                             
                                        </div>
                                        <div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check_hal" />
                                                <label class="form-check-label" for="check_hal">Meeting Hall</label>
                                            </div>                                             
                                        </div>
                                        <div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check_pet" />
                                                <label class="form-check-label" for="check_pet">Pet Allowed</label>
                                            </div>                                             
                                        </div>
                                        <div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check_swm" />
                                                <label class="form-check-label" for="check_swm">Outdoor Pool</label>
                                            </div>                                             
                                        </div>
                                        <div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check_prk" />
                                                <label class="form-check-label" for="check_prk">Free Parking</label>
                                            </div>                                             
                                        </div>
                                        <div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check_bar" />
                                                <label class="form-check-label" for="check_bar">Bar/Lounge</label>
                                            </div>                                             
                                        </div>
                                        <div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check_pat" />
                                                <label class="form-check-label" for="check_pat">Terrace/Patio</label>
                                            </div>                                             
                                        </div>
                                        <div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check_rst" />
                                                <label class="form-check-label" for="check_rst">Restaurant</label>
                                            </div>                                             
                                        </div>
                                    </div>                                     
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary pe-4 ps-4 rounded-pill">
                                            <span>Filter Result</span>
                                        </button>
                                    </div>                                     
                                </form>
                            </div>                             
                        </div>
                        <div class="col-lg-7 col-xl-8 order-lg-0"> 
                            <div class="align-items-center g-2 mb-3 row">
                                <div class="col">
                                    <h1 class="h5 mb-0 text-dark">Result for: <span class="fw-normal small text-secondary" id="search_text">... </span></h1> 
                                </div>
                                <div class="col-sm-auto">
                                    <select class="form-select" id="sortingOption" required>
                                        <option selected disabled value="">Sort by</option>
                                        <option>Nearby</option>
                                        <option>Name</option>
                                        <option>Price: High to Low</option>
                                        <option>Price: Low to High</option>
                                        <option>Random</option>
                                    </select>                                     
                                </div>
                            </div>
                            <div id="loader"></div>
                            <div id="error" style="display: none;">
                                <div class="alert alert-warning" role="alert"></div>
                            </div>

                            <div id="location-error" style="display: none;">
                                <div class="alert alert-warning" role="alert"></div>
                            </div>

                            <div
                                class="justify-content-center row row-cols-md-2"
                                id="grids"
                            >
                            <!-- data goes here -->
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="loginRegisterModal" tabindex="-1" role="dialog" aria-labelledby="loginRegisterModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="loginRegisterModalLabel">Login/Register</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" id="loginRegisterTab" role="tablist">
                                      <li class="nav-item">
                                        <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                      </li>
                                    </ul>
                                    
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                      <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                                        <!-- Login Form -->
                                        <form id="loginForm">
                                          <!-- Email input -->
                                          <div class="form-group">
                                            <label for="loginEmail">Email address</label>
                                            <input type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp" placeholder="Enter email">
                                          </div>
                                          <!-- Password input -->
                                          <div class="form-group">
                                            <label for="loginPassword">Password</label>
                                            <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                                          </div>
                                          <button type="submit" class="btn btn-primary">Login</button>
                                        </form>
                                      </div>
                                      <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                        <!-- Register Form -->
                                        <form id="registerForm">
                                          <!-- Email input -->
                                          <div class="form-group">
                                            <label for="registerEmail">Email address</label>
                                            <input type="email" class="form-control" id="registerEmail" aria-describedby="emailHelp" placeholder="Enter email">
                                          </div>
                                          <!-- Password input -->
                                          <div class="form-group">
                                            <label for="registerPassword">Password</label>
                                            <input type="password" class="form-control" id="registerPassword" placeholder="Password">
                                          </div>
                                          <button type="submit" class="btn btn-primary">Register</button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginRegisterModal">
                                  Login/Register
                                </button>
                            </div>
                            <!-- <div class="pb-3 pt-3 text-center">
                                <a class="align-items-center btn btn-primary d-inline-flex pe-3 ps-3 rounded-pill" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.25em" height="1.25em" class="me-2">
                                        <path fill="none" d="M0 0h24v24H0z"/>
                                        <path d="M5.463 4.433A9.961 9.961 0 0 1 12 2c5.523 0 10 4.477 10 10 0 2.136-.67 4.116-1.81 5.74L17 12h3A8 8 0 0 0 6.46 6.228l-.997-1.795zm13.074 15.134A9.961 9.961 0 0 1 12 22C6.477 22 2 17.523 2 12c0-2.136.67-4.116 1.81-5.74L7 12H4a8 8 0 0 0 13.54 5.772l.997 1.795z"/>
                                    </svg><span>Load More</span>
                                </a>
                            </div>
                            -->
                        </div>
                    </div>                     
                </div>                 
            </section>
            <footer class="bg-dark pt-5 text-secondary" data-pgc="veldtoe.footer"> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-lg-4 col-xl-4 py-3"> 
                            <h2 class="h5 mb-4 text-white">Subscribe</h2>
                            <p class="mb-3">Subscribe to our newsletter and get exclusive updates directly in your inbox.</p>
                            <form class="mb-4"> 
                                <div class="bg-white border input-group overflow-hidden p-1 rounded-pill">
                                    <input type="email" class="border-0 form-control pe-3 ps-3" placeholder="Enter email..." aria-label="Recipient's email" aria-describedby="button-addon2" required>
                                    <button class="btn form-submit pb-2 pe-4 ps-4 pt-2 rounded-pill" type="submit" id="button-addon2" aria-label="Submit">
                                        <svg viewBox="0 0 24 24" fill="currentColor" class="d-inline-block" height="16" width="16">
                                            <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>                             
                        </div>
                        <div class="col-lg-6 col-xl-5 col-xxl-5 py-3"> 
                            <div class="col-lg-6 col-xl-4 offset-lg-6 offset-xl-9 offset-xxl-9 py-3">
                                <h2 class="h5 mb-3 text-white">Get Social</h2> 
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
                    </div>                     
                    <div class="pb-3 pt-3 small"> 
                        <hr class="border-secondary mt-0"> 
                        <div class="align-items-center row">
                            <div class="col-md pb-2 pt-2">
                                <p class="mb-0">&copy; 2023 | All Rights Reserved - Veldtoe</p>
                            </div>
                            <div class="col-md-auto pb-2 pt-2"><a href="#" class="link-secondary text-decoration-none">Privacy Policy</a> | <a href="#" class="link-secondary text-decoration-none">Terms of Use</a>
                            </div>
                        </div>                         
                    </div>                     
                </div>                 
            </footer>
            <!-- Hunter modal -->
            <div class="modal fade" id="modalSigninHunter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-pgc="hunter.modal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content rounded-5 shadow">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Signin to book a hunting trip or update your profile</h5> 
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="container"></div>
                        <div class="modal-body p-5 pt-0">
                            <form class="">
                                <div class="form-floating mb-3 signin-fields">
                                    <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" required>
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating mb-3 signin-fields">
                                    <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <button class="btn form-submit mb-3 rounded-4 text-center text-lg-center text-nowrap w-auto" type="submit">Sign In</button>
                            </form>
                            <a data-bs-toggle="modal" href="#modalRegisterHunter" class="btn form-submit mb-3 rounded-4 text-center text-lg-center text-nowrap w-auto">Click here to register</a>
                            <div>
                                <hr class="my-4">
                                <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                                <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-4" type="submit">
                                    <svg id="gmail" x="0px" y="0px" width="16" height="16" viewBox="0 0 50 50">
                                        <path d="M12 23.403V23.39 10.389L11.88 10.3h-.01L9.14 8.28C7.47 7.04 5.09 7.1 3.61 8.56 2.62 9.54 2 10.9 2 12.41v3.602L12 23.403zM38 23.39v.013l10-7.391V12.41c0-1.49-.6-2.85-1.58-3.83-1.46-1.457-3.765-1.628-5.424-.403L38.12 10.3 38 10.389V23.39zM14 24.868l10.406 7.692c.353.261.836.261 1.189 0L36 24.868V11.867L25 20l-11-8.133V24.868zM38 25.889V41c0 .552.448 1 1 1h6.5c1.381 0 2.5-1.119 2.5-2.5V18.497L38 25.889zM12 25.889L2 18.497V39.5C2 40.881 3.119 42 4.5 42H11c.552 0 1-.448 1-1V25.889z"></path>
                                    </svg>
                                    Sign up with Gmail
                                </button>
                                <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-4" type="submit">
                                    <svg id="twitter" viewBox="0 0 16 16" width="16" height="16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                    </svg>
                                    Sign up with Twitter
                                </button>
                                <button class="btn btn-outline-primary mb-auto py-2 rounded-4 w-100" type="submit">
                                    <svg id="facebook" viewBox="0 0 16 16" width="16" height="16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                    </svg>
                                    Sign up with Facebook
                                </button>
                            </div>
                        </div>                         
                        <div class="modal-footer">
                            <a href="#" data-bs-dismiss="modal" class="btn btn-outline-dark">Close</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="modalRegisterHunter" data-bs-backdrop="static" data-pgc-define="hunterregister.modal" data-pgc-define-name="Hunter Register Modal" data-pgc-define-description="Modal used to register hunters">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Hunter registration</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="container"></div>
                        <div class="modal-body">
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-md-9 col-xl-12">
                                    <input type="text" class="form-control rounded-4 registration-fields" id="validationCustom01" value="" required placeholder="First Name">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <input type="text" class="form-control rounded-4 registration-fields" id="validationCustom02" value="" required placeholder="Surname">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="has-validation">
                                        <input type="email" class="form-control rounded-4 registration-fields" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required placeholder="Email Address">
                                        <div class="invalid-feedback">
                                            Please enter a valid email address
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <input type="password" class="form-control rounded-4 registration-fields" id="validationCustom03" required placeholder="Password">
                                    <div class="invalid-feedback">
                                        Please enter a unique password.
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <input type="password" class="form-control rounded-4 registration-fields" id="validationCustom04" required placeholder="Retype your password">
                                    <div class="invalid-feedback">
                                        Passwords doesn't match. Please check and retype carefully
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check " style="margin-top: 10px; margin-bottom: 10px;">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck">
                                            Agree to terms and conditions
                                        </label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn form-submit rounded-4 text-center text-lg-center w-auto" type="submit" id="registerSubmit">Register</button>
                                    </div>
                                </div>
                            </form>
                            <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (function () {
                                'use strict'

                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.querySelectorAll('.needs-validation')

                                // Loop over them and prevent submission
                                Array.prototype.slice.call(forms)
                                    .forEach(function (form) {
                                        form.addEventListener('submit', function (event) {
                                            if (!form.checkValidity()) {
                                                event.preventDefault()
                                                event.stopPropagation()
                                            }

                                            form.classList.add('was-validated')
                                        }, false)
                                    })
                            })()
                        </script>
                        </div>
                        <div class="modal-footer">
                            <a href="#" data-bs-dismiss="modal" class="btn btn-outline-dark">Close</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Farmer modal -->
            <div class="modal fade" id="modalSigninFarmer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-pgc="Farmer.Modal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content rounded-5 shadow">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Signin to register or update your farm</h5> 
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="container"></div>
                        <div class="modal-body p-5 pt-0">
                            <form class="">
                                <div class="form-floating mb-3 signin-fields">
                                    <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" required>
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating mb-3 signin-fields">
                                    <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <button class="btn form-submit mb-3 rounded-4 text-center text-lg-center text-nowrap w-auto" type="submit">Sign In
                                </button>
                            </form>
                            <a data-bs-toggle="modal" href="#modalRegisterFarmer" class="btn form-submit mb-3 rounded-4 text-center text-lg-center text-nowrap w-auto">Click here to register</a>
                            <div>
                                <hr class="my-4">
                                <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                                <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-4" type="submit">
                                    <svg id="gmail" x="0px" y="0px" width="16" height="16" viewBox="0 0 50 50">
                                        <path d="M12 23.403V23.39 10.389L11.88 10.3h-.01L9.14 8.28C7.47 7.04 5.09 7.1 3.61 8.56 2.62 9.54 2 10.9 2 12.41v3.602L12 23.403zM38 23.39v.013l10-7.391V12.41c0-1.49-.6-2.85-1.58-3.83-1.46-1.457-3.765-1.628-5.424-.403L38.12 10.3 38 10.389V23.39zM14 24.868l10.406 7.692c.353.261.836.261 1.189 0L36 24.868V11.867L25 20l-11-8.133V24.868zM38 25.889V41c0 .552.448 1 1 1h6.5c1.381 0 2.5-1.119 2.5-2.5V18.497L38 25.889zM12 25.889L2 18.497V39.5C2 40.881 3.119 42 4.5 42H11c.552 0 1-.448 1-1V25.889z"></path>
                                    </svg>
                                    Sign up with Gmail
                                </button>
                                <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-4" type="submit">
                                    <svg id="twitter" viewBox="0 0 16 16" width="16" height="16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                    </svg>
                                    Sign up with Twitter
                                </button>
                                <button class="btn btn-outline-primary mb-auto py-2 rounded-4 w-100" type="submit">
                                    <svg id="facebook" viewBox="0 0 16 16" width="16" height="16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                    </svg>
                                    Sign up with Facebook
                                </button>
                            </div>
                        </div>                         
                        <div class="modal-footer">
                            <a href="#" data-bs-dismiss="modal" class="btn btn-outline-dark">Close</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="modalRegisterFarmer" data-bs-backdrop="static" data-pgc="Farmerregister.modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Farmer registration</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="container"></div>
                        <div class="modal-body">
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-md-9 col-xl-12">
                                    <input type="text" class="form-control rounded-4 registration-fields" id="validationCustom01" value="" required placeholder="First Name">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <input type="text" class="form-control rounded-4 registration-fields" id="validationCustom02" value="" required placeholder="Surname">
                                    <div class="valid-feedback">
                                        Looks good!
                                </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="has-validation">
                                        <input type="email" class="form-control rounded-4 registration-fields" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required placeholder="Email Address">
                                        <div class="invalid-feedback">
                                            Please enter a valid email address
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <input type="password" class="form-control rounded-4 registration-fields" id="validationCustom03" required placeholder="Password">
                                    <div class="invalid-feedback">
                                        Please enter a unique password.
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <input type="password" class="form-control rounded-4 registration-fields" id="validationCustom04" required placeholder="Retype your password">
                                    <div class="invalid-feedback">
                                        Passwords doesn't match. Please check and retype carefully
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check " style="margin-top: 10px; margin-bottom: 10px;">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck">
                                            Agree to terms and conditions
                                        </label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn form-submit rounded-4 text-center text-lg-center w-auto" type="submit" id="registerSubmit">Register</button>
                                    </div>
                                </div>
                            </form>
                            <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (function () {
                                'use strict'

                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.querySelectorAll('.needs-validation')

                                // Loop over them and prevent submission
                                Array.prototype.slice.call(forms)
                                    .forEach(function (form) {
                                        form.addEventListener('submit', function (event) {
                                            if (!form.checkValidity()) {
                                                event.preventDefault()
                                                event.stopPropagation()
                                            }

                                            form.classList.add('was-validated')
                                        }, false)
                                    })
                            })()
                        </script>
                        </div>
                        <div class="modal-footer"><a href="#" data-bs-dismiss="modal" class="btn btn-outline-dark">Close</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="assets/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="scripts/navscroll.js"></script>
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <script>
           // Initialize the map                
            var map = L.map('map').setView([-28.4792625, 24.6727135], 5);

            // Add a tile layer
            L.tileLayer('https://services.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);


            var locations = [];
            placeMarkers(locations);

            function placeMarkers(locations){


                locations.forEach(function(location) {
                    L.marker([location.lat, location.lon]).addTo(map)
                    .bindPopup(location.title)
                    .openPopup();
                });
            }
        </script>
        <script>
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl);
            })
        </script>
        <script>
            function spinner(dimension = 25) {
            return `<svg id="loading-spinner" xmlns="http://www.w3.org/2000/svg" width="${dimension}" height="${dimension}" viewBox="0 0 50 50">
                                <circle cx="25" cy="25" r="20" fill="none" stroke-width="5" stroke="#3498db">
                                    <animate attributeName="r" from="20" to="0" dur="1s" begin="0s" repeatCount="indefinite" />
                                    <animate attributeName="stroke-opacity" from="1" to="0" dur="1s" begin="0s" repeatCount="indefinite" />
                                </circle>
                            </svg>`;
            }
        </script>

        <script>
            jQuery(document).ready(function ($) {

                // fetch data without any params on page load;
                fetchHotelData({
                        location: "<?=isset($_GET['search_location']) ? $_GET['search_location'] : '' ?>",
                        check_in: "<?=isset($_GET['check_in']) ? $_GET['check_in'] : '' ?>",
                        check_out: "<?=isset($_GET['check_out']) ? $_GET['check_out'] : '' ?>",
                        hunters: "<?=isset($_GET['hunters']) ? $_GET['hunters'] : '' ?>",
                        guests: "<?=isset($_GET['guests']) ? $_GET['guests'] : '' ?>",
                    }); 

                
                $('#filterForm_llw').submit(function (event) {
                    // Prevent the default form submission
                    event.preventDefault();

                    const radius = + $('#radiusCount').text()

                    // Collect form data
                    var formData = {
                        keyword: $('#search_keywords').val(),
                        location: $('#search_location').val(),
                        category: $('#searchCategory').val(),
                        radius: radius,
                        tags: {
                            atm_on_site: $('#check_atm').prop('checked') ? 1 : 0,
                            free_wifi: $('#check_wfi').prop('checked') ? 1 : 0,
                            housekeeping: $('#check_hsk').prop('checked') ? 1 : 0,
                            dstv: $('#check_dtv').prop('checked') ? 1 : 0,
                            fitness_center: $('#check_fit').prop('checked') ? 1 : 0,
                            aircon: $('#check_air').prop('checked') ? 1 : 0,
                            gift_shop: $('#check_gft').prop('checked') ? 1 : 0,
                            meeting_hall: $('#check_hal').prop('checked') ? 1 : 0,
                            pet_allowed: $('#check_pet').prop('checked') ? 1 : 0,
                            swimming_pool: $('#scheck_swm').prop('checked') ? 1 : 0,
                            free_parking: $('#check_prk').prop('checked') ? 1 : 0,
                            bar_lounge: $('#check_bar').prop('checked') ? 1 : 0,
                            terrace_patio: $('#check_pat').prop('checked') ? 1 : 0,
                            restaurant: $('#check_rst').prop('checked') ? 1 : 0,
                        },
                        check_in: "<?=empty($_GET['check_in']) ? $_GET['check_in'] : '' ?>",
                        check_out: "<?=empty($_GET['check_out']) ? $_GET['check_out'] : '' ?>",
                        hunters: "<?=empty($_GET['hunters']) ? $_GET['hunters'] : '' ?>",
                        guests: "<?=empty($_GET['guests']) ? $_GET['guests'] : '' ?>",
                    };

                    fetchHotelData(formData);

                });
            
                async function fetchHotelData(formData) {

                    //defaults
                    $('#loader').html(`${createSkeletons(5)}`);
                    $('#loader').show();
                    $('#grids').hide();
                    $('#error').hide();
                    $('#filter_btn').html(`${spinner(25)} Filtering...`);

                    if(formData.location?.length > 0) { //Do this only if location is set
                        try {
                            const location = await getLocationLatLon(formData.location);
                            if (!location) {
                                console.log('Location not found.');
                                $('#location-error .alert').html('Couldnt find location ' + formData.location)
                                $('#location-error').show();
                                $('#range-div').hide();

                            }else{                       
                                formData.latitute   = location.lat;
                                formData.longitude  = location.lon;
                                formData.boundingbox = location.boundingbox;

                                formData.radius = formData.radius ?? 10;
                                $('#range-div').show();
                                $('#location-error').hide()
                            }

                        } catch (error) {
                            $('#location-error .alert').html('An error has occured while getting location ' + formData.location)
                            $('#location-error').show();
                            console.error('Failed to get location:', error);
                        }
                    }

                    var originalButtonText = $('#filter_btn').text();


                    $.ajax({
                        url: 'ajaxapi_llw_art.php',
                        type: 'POST',
                        data: formData,
                        dataType: 'json',
                        success: function(data) {
                            $('#empty').show();
                            items = data;
                            updateDisplay(items);
                        },
                        error: function(xhr, status, error) {
                            $('#error .alert').html('An error has occurred while fetching farms...');
                            $('#error').show();
                            $('#empty').hide();
                            $('#loader').hide();
                            console.warn({ error: error });
                        },
                        complete: function() {
                            $('#filter_btn').html(originalButtonText);
                            $('#loader').hide();
                            $('#grids').show();
                        }
                    });

                };

                async function getLocationLatLon(query) { //by the time of soing this, it required no api key
                    try {
                        // Construct the Nominatim API URL
                        const apiUrl = `https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(query)}`;

                        // Await the fetch request to the Nominatim API
                        const response = await fetch(apiUrl, {
                            method: 'GET',
                            headers: {
                                'User-Agent': 'farm/1.0', //whatever
                                'Accept': 'application/json'
                            }
                        });

                        const data = await response.json(); // Await the parsing of the JSON response

                        if (data && data.length > 0 && data.at(0)) {
                            var location = data.at(0);
                            return {
                                boundingbox: location.boundingbox,
                                lat: location.lat,
                                lon: location.lon
                            }
                        } else {
                            console.log('No results found');
                        }
                    } catch (error) {
                        console.error('Error fetching location data:', error);
                    }
                }

            });       
        </script>

        <script>
            const emptyStarSVG = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="1.125em" height="1.125em">
                                    <g>
                                        <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                    </g>
                                </svg>`;

            const filledStarSVG = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.125em" height="1.125em">
                                        <g>
                                            <path fill="none" d="M0 0h24v24H0z"/>
                                            <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                        </g>
                                    </svg>`;
            const halfStarSVG = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.125em" height="1.125em">
                                    <g>
                                        <path fill="none" d="M0 0h24v24H0z"/>
                                        <path d="M12 15.968l4.247 2.377-.949-4.773 3.573-3.305-4.833-.573L12 5.275v10.693zm0 2.292l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928L12 18.26z"/>
                                    </g>
                                </svg>`;

            function generateStarRating(ratingsAverage) {

                
                let ratingHTML = '';

                // Use a switch case to determine the star rating
                switch (Math.round(ratingsAverage * 2) / 2) {
                    case 0.5:
                        ratingHTML = emptyStarSVG + emptyStarSVG + emptyStarSVG + emptyStarSVG + halfStarSVG;
                    break;
                    case 1:
                        ratingHTML = emptyStarSVG + emptyStarSVG + emptyStarSVG + emptyStarSVG + filledStarSVG;
                    break;
                    case 1.5:
                        ratingHTML = emptyStarSVG + emptyStarSVG + emptyStarSVG + filledStarSVG + halfStarSVG;
                    break;
                    case 2:
                        ratingHTML = emptyStarSVG + emptyStarSVG + emptyStarSVG + filledStarSVG + filledStarSVG;
                    break;
                    case 2.5:
                        ratingHTML = emptyStarSVG + emptyStarSVG + filledStarSVG + filledStarSVG + halfStarSVG;
                    break;
                    case 3:
                        ratingHTML = emptyStarSVG + emptyStarSVG + filledStarSVG + filledStarSVG + filledStarSVG;
                    break;
                    case 3.5:
                        ratingHTML = emptyStarSVG + filledStarSVG + filledStarSVG + filledStarSVG + halfStarSVG;
                    break;
                    case 4:
                        ratingHTML = emptyStarSVG + filledStarSVG + filledStarSVG + filledStarSVG + filledStarSVG;
                    break;
                    case 4.5:
                        ratingHTML = filledStarSVG + filledStarSVG + filledStarSVG + filledStarSVG + halfStarSVG;
                    break;
                    case 5:
                        ratingHTML = filledStarSVG + filledStarSVG + filledStarSVG + filledStarSVG + filledStarSVG;
                    break;
                    default:
                        ratingHTML = emptyStarSVG + emptyStarSVG + emptyStarSVG + emptyStarSVG + emptyStarSVG;
                    break;
                }

                return ratingHTML;
            }

            function createSkeletons(count) {
                returnable = '';

                for (let i = 0; i < count; i++) {
                    let skeletonHTML = `
                        <div class="pb-3 pt-3"> 
                            <div class="border">
                                <div class="d-block bg-animate" style="width: 100%; height: 240px;"></div>
                                <div class="pb-3 ps-4 pe-4 pt-4">
                                    <div class="align-items-center d-flex justify-content-between">
                                        <div class="pb-1 pt-1">
                                            <div class="bg-animate" style="width: 150px; height: 20px; border-radius: 4px;"></div>
                                            <div class="mt-2 bg-animate" style="width: 100px; height: 15px; border-radius: 4px;"></div>
                                        </div>
                                        <div class="ms-2 p-2 rounded-pill" style="width: 36px; height: 36px; background-color: #ddd;"></div>
                                    </div>
                                    <hr>
                                    <div class="align-items-center d-flex justify-content-between">
                                        <div class="pb-1 pt-1 d-flex">
                                            <div class="bg-animate" style="width: 100px; height: 15px; border-radius: 4px;"></div>
                                        </div>
                                        <div class="bg-animate" style="width: 80px; height: 20px; border-radius: 4px;"></div>
                                    </div>
                                </div>                                         
                            </div>                                     
                        </div>
                    `;
                    returnable += skeletonHTML;
                }

                return `<div class="justify-content-center row row-cols-md-2"> ${returnable} </div>`;
            }

            function roundToNearestHalf(value) {
                return Math.round(value * 2) / 2;
            }
        </script>
        <script>

            $(document).ready(function() {

                toggleRange($("#search_keywords").val());

                function toggleRange(value) {
                    if(value.length > 0){
                        $('#range-div').show();
                    }else{
                        $('#range-div').hide();
                    }
                }

                let search_location = $("#search_location").val();
                let search_keywords = $("#search_keywords").val();
                $("#search_text").text(search_keywords.length > 0 ? search_keywords : search_location.length > 0 ? search_location : '...');

                $("#search_keywords").on("input", function() {
                    let value = $(this).val();
                    $("#search_text").text(value.length > 0 ? value : '...');
                });
                
                $('#search_location').on('input', function() {
                    // Get the value of the input
                    var inputValue = $(this).val();
                    var url = new URL(window.location);
                    var params = new URLSearchParams(url.search);
                    params.set('search_location', inputValue);
                    var newUrl = url.pathname + '?' + params.toString();
                    history.replaceState(null, '', newUrl);
                    toggleRange(inputValue)
                });
            });

        </script>
        <script src="/assets/js/slider.js"></script>
    </body>
</html>