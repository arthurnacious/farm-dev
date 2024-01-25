<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Pinegrow Web Editor - Directory Bootstrap v5 Template">
        <meta name="author" content="">
        <title>Pinegrow | Bootstrap Blocks Template</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="blocks.css">
        <!-- Custom styles for this template -->
        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Flex:400&display=swap">
    </head>
    <body class="text-black-50">
        <header style="background-color: rgba(255, 255, 255, 0.6);" class="fixed-top" id="navbar">
            <nav class=" bg-dark bg-opacity-75 flex-grow-1 ms-auto navbar navbar-dark navbar-expand-lg pb-lg-0 pt-lg-0" style="background-color: rgba(52, 50, 50, 0.89);" data-pgc="veldtoe.navbar"> 
                <div class="container">
                    <a class="fw-bold navbar-brand text-warning" href=".">
                        <img src="assets/img/veldtoe_horns_words_option2.png" width="auto" height="74">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown-66" aria-controls="navbarNavDropdown-66" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span> 
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNavDropdown-66"> 
                        <ul class="navbar-nav ms-auto"> 
                            <li class="nav-item">
                                <a class="nav-link px-lg-3 py-lg-4 text-light" href="#">
                                    <img src="assets/img/hunter.png" style="margin-right: 5px;" data-bs-toggle="modal" data-bs-target="#modalSigninHunter">
                                    Hunter: Login/Sign Up
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-lg-3 py-lg-4 text-light" href="#">
                                    <img src="assets/img/farmer.png" style="margin-right: 5px;" data-bs-toggle="modal" data-bs-target="#modalSigninFarmer">
                                    Farmer: Login/Sign Up
                                </a> 
                            </li>
                            <li class="nav-link m-4">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" style="margin-right: 12px;">
                                    <label class="form-check-label text-white" for="flexSwitchCheckChecked">
                                        Switch to Afrikaans
                                    </label>
                                </div>                                 
                            </li>                             
                        </ul>                         
                    </div>                     
                </div>                 
            </nav>
        </header>
        <main>
        <section style="background-image:url('https://images.unsplash.com/photo-1696418799893-4d2e12da2e73?crop=entropy&cs=tinysrgb&fit=clamp&fm=jpg&ixid=M3wyMDkyMnwwfDF8cmFuZG9tfHx8fHx8fHx8MTcwMTI4NzEwNHw&ixlib=rb-4.0.3&q=80&w=1080');" class="background-center-center background-cover bg-dark position-sticky text-white">
           <div class="container mt-5 position-relative pt-5">
                <div class="col-lg-10 col-xl-8 col-xxl-7 pb-5 pt-5">
                    <h2 class="col-lg-auto fw-light" style="font-family: 'Roboto', sans-serif; gap: 0; row-gap: 0; column-gap: 0; border-radius: 10px;">Where&apos;s your next hunt?</h2>
                    <form> 
                        <div class="gx-2 row">
                        </div>                             
                    </form>
                </div>
                <div class="pb-1 pt-1 row">
                    <div class="bg-dark bg-opacity-50 col-lg-7 col-xl-6 col-xxl-5 pb-1 pt-2" style="font-family: 'Roboto', sans-serif; border-radius: 42px;">
                        <form action="/directory-listing_ryane.php" method="get"> 
                            <div class="gx-2 row">
                                <div class="col-12 col-sm-9 col-xl-7 mb-3"> 
                                    <label for="search_location" class="col-form-label-lg form-label">Step 1: Where do you want to go?</label>
                                    <input id="search_location" type="text" name="search_location" class="form-control form-control-lg ps-4 pe-4 rounded-pill" placeholder="Province / District / Town" id="SearchFarmLocation"> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="row gx">
                                    <label for="from" class="col-form-label-lg col-xl-6 form-label">Step 2: Select your dates</label>
                                </div>
                                <div class="col-lg-5 col-md-4 col-sm-5 col-xl-5 mb-1"> 
                                    <!--<input type="text" class="form-control form-control-lg ps-4 pe-4 rounded-pill" placeholder="What are you looking for?"> -->                                         
                                    <label for="check_in" class="col-form-label-lg form-label">Check in</label>
                                    <input name="check_in" id="check_in" type="date" class="form-control form-control-lg ps-4 pe-4 input-group date rounded-pill" placeholder="When must your trip start?" id="SelectFromDate1">
                                    <div class="input-group date" id="SelectFromDate2"></div>                                         
                                </div>
                                <div class="col-lg-5 col-md-4 col-sm-5 col-xl-5 mb-1"> 
                                    <!--<input type="text" class="form-control form-control-lg ps-4 pe-4 rounded-pill" placeholder="What are you looking for?"> -->                                         
                                    <label for="check_out" class="col-form-label-lg form-label">Check out</label>
                                    <input name="check_out" id="check_out" type="date" class="form-control form-control-lg ps-4 pe-4 input-group date rounded-pill" placeholder="When must your trip start?" id="SelectToDate1">
                                    <div class="input-group date" id="SelectToDate2"></div>                                         
                                </div>
                            </div>
                            <div class="gx-2 row">
                                <div class="col-9 col-sm-5 col-xl-5 col-xxl-7 mb-3">
                                    <label for="numhunters" class="col-12 col-form-label-lg col-xl-12 col-xxl-12 form-label">How many hunters?
                                        <span id="TimeText">1</span>
                                    </label>
                                    <input name="hunters" type="range" class="form-range" min="1" max="20" value="1" id="TimeRange" style="width: 195px;">
                                </div>
                            </div>
                            <div class="gx-2 row">
                                <div class="col-9 col-sm-5 col-xl-5 col-xxl-7 mb-3">
                                    <label for="numguests" class="col-12 col-form-label-lg col-xl-12 col-xxl-12 form-label">How many guests?
                                        <span id="TimeTextGuests">0</span>
                                    </label>
                                    <input name="guests" type="range" class="form-range" min="0" max="20" value="0" id="TimeRangeGuests" style="width: 195px;">
                                </div>
                            </div>
                            <div class="gx-2 row text-sm-center">
                                <div class="col-sm-12 mb-3 text-center">
                                    <a href="directory-listing-1.html">
                                        <button type="submit" class="btn btn-lg form-submit pe-4 ps-4 rounded-pill">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.25em" height="1.25em" class="me-1">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z"></path>
                                                </g>
                                            </svg>
                                            <span class="align-middle">Search</span>&nbsp;
                                        </button>
                                    </a> 
                                </div>
                            </div>                                 
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-5 pt-5">
            <div class="container">
                <div class="mb-4 text-center">
                    <h2 class="text-dark">Trending Places</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod</p>
                </div>
                <div class="justify-content-center row"> 
                    <div class="col-lg-4 col-md-6 pb-3 pt-3"> 
                        <div class="border"> <a href="#" class="d-block"><img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDY5fHxhbyUyMG5hbmd8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=350&h=240&fit=crop" class="img-fluid w-100" alt="Location image" width="350" height="240"></a>
                            <div class="pb-3 ps-4 pe-4 pt-4">
                                <div class="align-items-center d-flex justify-content-between">
                                    <div class="pb-1 pt-1"><a href="#" class="link-dark text-decoration-none"><h3 class="h5 mb-1">Panan Krabi Resort</h3></a>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em" class="me-1 text-primary">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M18.364 17.364L12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                                </g>
                                            </svg>
                                            <span class="align-middle">Ao Nang, Thailand</span>
                                        </div>
                                    </div>
                                    <a class="btn form-submit ms-2 p-2 rounded-pill" href="#" aria-label="Add to favorite"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="d-block">
                                            <g>
                                                <path fill="none" d="M0 0H24V24H0z"/>
                                                <path d="M20.243 4.757c2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236C5.515 3 8.093 2.56 10.261 3.44L6.343 7.358l1.414 1.415L12 4.53l-.013-.014.014.013c2.349-2.109 5.979-2.039 8.242.228z"/>
                                            </g>
                                        </svg></a>
                                </div>
                                <hr/>
                                <div class="align-items-center d-flex justify-content-between">
                                    <div class="pb-1 pt-1">
                                        <span class="me-1 text-primary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 15.968l4.247 2.377-.949-4.773 3.573-3.305-4.833-.573L12 5.275v10.693zm0 2.292l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928L12 18.26z"/>
                                                </g>
                                            </svg></span>
                                        <span class="align-middle">432 reviews</span>
                                    </div><span class="fw-bold pb-1 pt-1"><span>$</span><span>$</span><span>$</span></span>
                                </div>
                            </div>                                 
                        </div>                             
                    </div>
                    <div class="col-lg-4 col-md-6 pb-3 pt-3"> 
                        <div class="border"> <a href="#" class="d-block"><img src="https://images.unsplash.com/photo-1596178065887-1198b6148b2b?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDkxfHxjaGljYWdvJTIwaG90ZWx8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=350&h=240&fit=crop" class="img-fluid w-100" alt="Location image" width="350" height="240"></a>
                            <div class="pb-3 ps-4 pe-4 pt-4">
                                <div class="align-items-center d-flex justify-content-between">
                                    <div class="pb-1 pt-1"><a href="#" class="link-dark text-decoration-none"><h3 class="h5 mb-1">Holiday Inn Rotorua</h3></a>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em" class="me-1 text-primary">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M18.364 17.364L12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                                </g>
                                            </svg>
                                            <span class="align-middle">Rotorua, New Zealand</span>
                                        </div>
                                    </div>
                                    <a class="btn form-submit ms-2 p-2 rounded-pill" href="#" aria-label="Add to favorite"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="d-block">
                                            <g>
                                                <path fill="none" d="M0 0H24V24H0z"/>
                                                <path d="M20.243 4.757c2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236C5.515 3 8.093 2.56 10.261 3.44L6.343 7.358l1.414 1.415L12 4.53l-.013-.014.014.013c2.349-2.109 5.979-2.039 8.242.228z"/>
                                            </g>
                                        </svg></a>
                                </div>
                                <hr/>
                                <div class="align-items-center d-flex justify-content-between">
                                    <div class="pb-1 pt-1">
                                        <span class="me-1 text-primary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 15.968l4.247 2.377-.949-4.773 3.573-3.305-4.833-.573L12 5.275v10.693zm0 2.292l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928L12 18.26z"/>
                                                </g>
                                            </svg></span>
                                        <span class="align-middle">432 reviews</span>
                                    </div><span class="fw-bold pb-1 pt-1"><span>$</span><span>$</span><span class="opacity-50">$</span></span>
                                </div>
                            </div>                                 
                        </div>                             
                    </div>
                    <div class="col-lg-4 col-md-6 pb-3 pt-3"> 
                        <div class="border"> <a href="#" class="d-block"><img src="https://images.unsplash.com/photo-1548588627-f978862b85e1?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDY5fHxhbm5hcHVybmElMjBiYXNlJTIwY2FtcHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=350&h=240&fit=crop" class="img-fluid w-100" alt="Location image" width="350" height="240"></a>
                            <div class="pb-3 ps-4 pe-4 pt-4">
                                <div class="align-items-center d-flex justify-content-between">
                                    <div class="pb-1 pt-1"><a href="#" class="link-dark text-decoration-none"><h3 class="h5 mb-1">Annpurna Base Camp</h3></a>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em" class="me-1 text-primary">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M18.364 17.364L12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                                </g>
                                            </svg>
                                            <span class="align-middle">Ghandruk, Nepal</span>
                                        </div>
                                    </div>
                                    <a class="btn form-submit ms-2 p-2 rounded-pill" href="#" aria-label="Add to favorite"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="d-block">
                                            <g>
                                                <path fill="none" d="M0 0H24V24H0z"/>
                                                <path d="M20.243 4.757c2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236C5.515 3 8.093 2.56 10.261 3.44L6.343 7.358l1.414 1.415L12 4.53l-.013-.014.014.013c2.349-2.109 5.979-2.039 8.242.228z"/>
                                            </g>
                                        </svg></a>
                                </div>
                                <hr/>
                                <div class="align-items-center d-flex justify-content-between">
                                    <div class="pb-1 pt-1">
                                        <span class="me-1 text-primary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 15.968l4.247 2.377-.949-4.773 3.573-3.305-4.833-.573L12 5.275v10.693zm0 2.292l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928L12 18.26z"/>
                                                </g>
                                            </svg></span>
                                        <span class="align-middle">432 reviews</span>
                                    </div><span class="fw-bold pb-1 pt-1"><span>$</span><span class="opacity-50">$</span><span class="opacity-50">$</span></span>
                                </div>
                            </div>                                 
                        </div>                             
                    </div>
                    <div class="col-lg-4 col-md-6 pb-3 pt-3"> 
                        <div class="border"> <a href="#" class="d-block"><img src="https://images.unsplash.com/photo-1569369926169-9ee7fb80adeb?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDMwfHxldmVyZXN0JTIwaG90ZWx8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=350&h=240&fit=crop" class="img-fluid w-100" alt="Location image" width="350" height="240"></a>
                            <div class="pb-3 ps-4 pe-4 pt-4">
                                <div class="align-items-center d-flex justify-content-between">
                                    <div class="pb-1 pt-1"><a href="#" class="link-dark text-decoration-none"><h3 class="h5 mb-1">The Whitehall Hotel</h3></a>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em" class="me-1 text-primary">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M18.364 17.364L12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                                </g>
                                            </svg>
                                            <span class="align-middle">East Delaware, Chicago</span>
                                        </div>
                                    </div>
                                    <a class="btn form-submit ms-2 p-2 rounded-pill" href="#" aria-label="Add to favorite"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="d-block">
                                            <g>
                                                <path fill="none" d="M0 0H24V24H0z"/>
                                                <path d="M20.243 4.757c2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236C5.515 3 8.093 2.56 10.261 3.44L6.343 7.358l1.414 1.415L12 4.53l-.013-.014.014.013c2.349-2.109 5.979-2.039 8.242.228z"/>
                                            </g>
                                        </svg></a>
                                </div>
                                <hr/>
                                <div class="align-items-center d-flex justify-content-between">
                                    <div class="pb-1 pt-1">
                                        <span class="me-1 text-primary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 15.968l4.247 2.377-.949-4.773 3.573-3.305-4.833-.573L12 5.275v10.693zm0 2.292l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928L12 18.26z"/>
                                                </g>
                                            </svg></span>
                                        <span class="align-middle">432 reviews</span>
                                    </div><span class="fw-bold pb-1 pt-1"><span>$</span><span>$</span><span>$</span></span>
                                </div>
                            </div>                                 
                        </div>                             
                    </div>
                    <div class="col-lg-4 col-md-6 pb-3 pt-3"> 
                        <div class="border"> <a href="#" class="d-block"><img src="https://images.unsplash.com/photo-1590401939533-2e990cbce326?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDQ3fHxUYW5haCUyMExvdCUyMFRlbXBsZSwlMjBiYWxpfGVufDB8fHw&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=350&h=240&fit=crop" class="img-fluid w-100" alt="Location image" width="350" height="240"></a>
                            <div class="pb-3 ps-4 pe-4 pt-4">
                                <div class="align-items-center d-flex justify-content-between">
                                    <div class="pb-1 pt-1"><a href="#" class="link-dark text-decoration-none"><h3 class="h5 mb-1">Tanah Lot Temple</h3></a>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em" class="me-1 text-primary">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M18.364 17.364L12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                                </g>
                                            </svg>
                                            <span class="align-middle">Beraban, Kediri, Bali</span>
                                        </div>
                                    </div>
                                    <a class="btn form-submit ms-2 p-2 rounded-pill" href="#" aria-label="Add to favorite"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="d-block">
                                            <g>
                                                <path fill="none" d="M0 0H24V24H0z"/>
                                                <path d="M20.243 4.757c2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236C5.515 3 8.093 2.56 10.261 3.44L6.343 7.358l1.414 1.415L12 4.53l-.013-.014.014.013c2.349-2.109 5.979-2.039 8.242.228z"/>
                                            </g>
                                        </svg></a>
                                </div>
                                <hr/>
                                <div class="align-items-center d-flex justify-content-between">
                                    <div class="pb-1 pt-1">
                                        <span class="me-1 text-primary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 15.968l4.247 2.377-.949-4.773 3.573-3.305-4.833-.573L12 5.275v10.693zm0 2.292l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928L12 18.26z"/>
                                                </g>
                                            </svg></span>
                                        <span class="align-middle">432 reviews</span>
                                    </div><span class="fw-bold pb-1 pt-1"><span>$</span><span>$</span><span class="opacity-50">$</span></span>
                                </div>
                            </div>                                 
                        </div>                             
                    </div>
                    <div class="col-lg-4 col-md-6 pb-3 pt-3"> 
                        <div class="border"> <a href="#" class="d-block"><img src="https://images.unsplash.com/photo-1605825831039-8b6b4199b04a?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDI3fHxldmVyZXN0JTIwaG90ZWx8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=350&h=240&fit=crop" class="img-fluid w-100" alt="Location image" width="350" height="240"></a>
                            <div class="pb-3 ps-4 pe-4 pt-4">
                                <div class="align-items-center d-flex justify-content-between">
                                    <div class="pb-1 pt-1"><a href="#" class="link-dark text-decoration-none"><h3 class="h5 mb-1">Hotel Abbazia</h3></a>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em" class="me-1 text-primary">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M18.364 17.364L12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                                </g>
                                            </svg>
                                            <span class="align-middle">Venice, Italy</span>
                                        </div>
                                    </div>
                                    <a class="btn form-submit ms-2 p-2 rounded-pill" href="#" aria-label="Add to favorite"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="d-block">
                                            <g>
                                                <path fill="none" d="M0 0H24V24H0z"/>
                                                <path d="M20.243 4.757c2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236C5.515 3 8.093 2.56 10.261 3.44L6.343 7.358l1.414 1.415L12 4.53l-.013-.014.014.013c2.349-2.109 5.979-2.039 8.242.228z"/>
                                            </g>
                                        </svg></a>
                                </div>
                                <hr/>
                                <div class="align-items-center d-flex justify-content-between">
                                    <div class="pb-1 pt-1">
                                        <span class="me-1 text-primary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/>
                                                </g>
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="1.125em" height="1.125em">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"/>
                                                    <path d="M12 15.968l4.247 2.377-.949-4.773 3.573-3.305-4.833-.573L12 5.275v10.693zm0 2.292l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928L12 18.26z"/>
                                                </g>
                                            </svg></span>
                                        <span class="align-middle">432 reviews</span>
                                    </div><span class="fw-bold pb-1 pt-1"><span>$</span><span>$</span><span class="opacity-50">$</span></span>
                                </div>
                            </div>                                 
                        </div>                             
                    </div>                         
                </div>
                <div class="pb-3 pt-3 text-center">
                    <a class="btn form-submit pe-4 ps-4 rounded-pill" href="#">View More</a>
                </div>                     
            </div>                 
        </section>
        <div class="container pb-4 pt-4">
            <hr class="mb-0 mt-0"/>
        </div>
        <section class="bg-dark pb-5 pt-5 text-white-50">
            <div class="container"> 
                <div class="align-items-center justify-content-center row"> 
                    <div class="col-lg-3 col-sm-6 pb-3 pt-3">
                        <div class="align-items-center d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="3rem" height="3rem" class="me-3 text-primary">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z"/>
                                    <path d="M4 6.143v12.824l5.065-2.17 6 3L20 17.68V4.857l1.303-.558a.5.5 0 0 1 .697.46V19l-7 3-6-3-6.303 2.701a.5.5 0 0 1-.697-.46V7l2-.857zm12.243 5.1L12 15.485l-4.243-4.242a6 6 0 1 1 8.486 0zM12 12.657l2.828-2.829a4 4 0 1 0-5.656 0L12 12.657z"/>
                                </g>
                            </svg>
                            <div>
                                <h2 class="h4 mb-1 text-white">50+</h2>
                                <p class="mb-0">New Listing Everyday</p>
                            </div>
                        </div>                             
                    </div>
                    <div class="col-lg-3 col-sm-6 pb-3 pt-3">
                        <div class="align-items-center d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="3rem" height="3rem" class="me-3 text-primary">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z"/>
                                    <path d="M18 17v5h-2v-5c0-4.451 2.644-8.285 6.447-10.016l.828 1.82A9.002 9.002 0 0 0 18 17zM8 17v5H6v-5A9.002 9.002 0 0 0 .725 8.805l.828-1.821A11.002 11.002 0 0 1 8 17zm4-5a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </g>
                            </svg>
                            <div>
                                <h2 class="h4 mb-1 text-white">420+</h2>
                                <p class="mb-0">Unique Visitor Per Day</p>
                            </div>
                        </div>                             
                    </div>
                    <div class="col-lg-3 col-sm-6 pb-3 pt-3">
                        <div class="align-items-center d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="3rem" height="3rem" class="me-3 text-primary">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z"/>
                                    <path d="M12 14v2a6 6 0 0 0-6 6H4a8 8 0 0 1 8-8zm0-1c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm6 10.5l-2.939 1.545.561-3.272-2.377-2.318 3.286-.478L18 14l1.47 2.977 3.285.478-2.377 2.318.56 3.272L18 21.5z"/>
                                </g>
                            </svg>
                            <div>
                                <h2 class="h4 mb-1 text-white">16000+</h2>
                                <p class="mb-0">Customer&apos;s Review</p>
                            </div>
                        </div>                             
                    </div>
                    <div class="col-lg-3 col-sm-6 pb-3 pt-3">
                        <div class="align-items-center d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgb(255, 106, 0)" width="3rem" height="3rem" class="me-3 text-primary">
                                <g>
                                    <path fill="none" d="M0 0H24V24H0z"/>
                                    <path d="M12 1l8.217 1.826c.457.102.783.507.783.976v9.987c0 2.006-1.003 3.88-2.672 4.992L12 23l-6.328-4.219C4.002 17.668 3 15.795 3 13.79V3.802c0-.469.326-.874.783-.976L12 1zm0 2.049L5 4.604v9.185c0 1.337.668 2.586 1.781 3.328L12 20.597l5.219-3.48C18.332 16.375 19 15.127 19 13.79V4.604L12 3.05zm4.452 5.173l1.415 1.414L11.503 16 7.26 11.757l1.414-1.414 2.828 2.828 4.95-4.95z"/>
                                </g>
                            </svg>
                            <div>
                                <h2 class="h4 mb-1 text-white">4500+</h2>
                                <p class="mb-0">Virified Businesses</p>
                            </div>
                        </div>                             
                    </div>                         
                </div>                     
            </div>
        </section>
    </main>
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
                        <form class="mb-4"></form>
                        <div class="d-inline-flex flex-wrap">
                            <a href="#" class="link-secondary p-1" aria-label="facebook link">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                                    <path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"/> 
                                </svg>
                            </a>
                            <a href="#" class="link-secondary p-1" aria-label="twitter link">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                                    <path d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z"/> 
                                </svg>
                            </a>
                            <a href="#" class="link-secondary p-1" aria-label="instagram link">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                                    <path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"/> 
                                </svg>
                            </a>
                            <a href="#" class="link-secondary p-1" aria-label="linkedin link">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                                    <path d="M6.94 5a2 2 0 1 1-4-.002 2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z"/> 
                                </svg>
                            </a>
                            <a href="#" class="link-secondary p-1" aria-label="youtube link">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                                    <path d="M21.543 6.498C22 8.28 22 12 22 12s0 3.72-.457 5.502c-.254.985-.997 1.76-1.938 2.022C17.896 20 12 20 12 20s-5.893 0-7.605-.476c-.945-.266-1.687-1.04-1.938-2.022C2 15.72 2 12 2 12s0-3.72.457-5.502c.254-.985.997-1.76 1.938-2.022C6.107 4 12 4 12 4s5.896 0 7.605.476c.945.266 1.687 1.04 1.938 2.022zM10 15.5l6-3.5-6-3.5v7z"/> 
                                </svg>
                            </a> 
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
    <div class="modal fade" id="modalSigninHunter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-pgc-define="hunter.modal" data-pgc-define-name="Hunter Modal" data-pgc-define-description="Modal used by hunters">
        <div class="modal-dialog" role="document" data-pg-collapsed>
            <div class="modal-content rounded-5 shadow">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Signin to book a hunting trip</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5 pt-0">
                    <form method="post" action="profile_registration.php">
                        <div class="vt-accordion" id="panels1"> 
                            <div class="vt-accordion-item"> 
                                <h2 class="accordion-header" id="collapse1" data-pg-collapsed> <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="margin-bottom: 15px;">                            Click here to register                            </button> </h2> 
                                <div id="collapseOne" class="vt-accordion-collapse collapse" aria-labelledby="collapse1" data-bs-parent="#panels1"> 
                                    <div class="accordion-body"> 
                                        <div>
                                            <form class="row g-3 needs-validation" novalidate method="post" action="/dev/index.php">
                                                <div class="col-md-9 col-xl-12">
                                                    <input type="text" class="form-control rounded-4 registration-fields" id="validationCustom01" value="" required placeholder="First Name" />

                                                </div>
                                                <div class="col-md-9 col-xl-12">
                                                    <input type="text" class="form-control rounded-4 registration-fields" id="validationCustom02" value="" required placeholder="Surname" />

                                                </div>
                                                <div class="col-md-9 col-xl-12">
                                                    <div class="has-validation">
                                                        <input type="email" class="form-control rounded-4 registration-fields" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required placeholder="Email Address" />

                                                    </div>
                                                </div>
                                                <div class="col-md-9 col-xl-12">
                                                    <input type="password" class="form-control rounded-4 registration-fields" id="validationCustom03" required placeholder="Password" />

                                                </div>
                                                <div class="col-12">
                                                    <button class="btn form-submit rounded-4 text-center text-lg-center w-auto" type="submit" id="registerSubmit">Register</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>                                               
                                </div>                                             
                            </div>                                         
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripts/navscroll.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/popper.min.js"></script>
    </body>
</html>