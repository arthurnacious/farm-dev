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
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    </head>
    <body class="text-black-50">
        <header style="background-color: rgba(255, 255, 255, 0.05);" class="fixed-top" id="navbar">
            <nav class=" bg-dark bg-opacity-75 flex-grow-1 ms-auto navbar navbar-dark navbar-expand-lg pb-lg-0 pt-lg-0" style="background-color: rgba(52, 50, 50, 0.89);" data-pgc="veldtoe.navbar"> 
                <div class="container"> <a class="fw-bold navbar-brand text-warning" href="."><img src="assets/img/veldtoe_horns_words_option2.png" width="auto" height="74"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown-66" aria-controls="navbarNavDropdown-66" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> 
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNavDropdown-66"> 
                        <ul class="navbar-nav ms-auto"> 
                            <li class="nav-item"> <a class="nav-link px-lg-3 py-lg-4 text-light text-nowrap" href="#" data-pgc="hunterregister.modal"> <img src="assets/img/hunter.png" style="margin-right: 5px;" data-bs-toggle="modal" data-bs-target="#modalSigninHunter">Hunter: Login/Sign Up </a>
                            </li>
                            <li class="nav-item"> <a class="nav-link px-lg-3 py-lg-4 text-light text-nowrap" href="#"><img src="assets/img/farmer.png" style="margin-right: 5px;" data-bs-toggle="modal" data-bs-target="#modalSigninFarmer" data-pgc="Farmerregister.Modal">
                                    Farmer: Login/Sign Up</a> 
                            </li>
                            <li class="nav-link m-4">
                                <div class="form-check form-switch text-nowrap">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" style="margin-right: 12px;">
                                    <label class="form-check-label text-white" for="flexSwitchCheckChecked">Switch to Afrikaans
</label>
                                </div>                                 
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
            <section class="pb-5 pt-5">
                <div class="container pb-2 pt-2">
                    <div class="gx-lg-5 gy-4 row">
                        <div class="col-lg-12 col-xl-12 order-lg-0"> 
                            <h5 class="mb-3 text-dark">Review and update farm details</h5>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne"> <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Farm Information</button> </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="t" class="form-label"></label>
                                                    <input class="form-control" id="farmname" placeholder="Farm Name"> 
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleDataList" class="form-label"></label>
                                                    <input class="form-control" id="farmlocation" placeholder="Type in coordinates or use my current location">
                                                </div>
                                            </form>                                             
                                            <div class="mb-3">
                                                <label for="exampleDataList" class="form-label"></label>
                                                <input class="form-control" id="exampleDataList" placeholder="Farm Size (ha)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Accommodation Information</button> </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form>
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
                                                    <textarea class="form-control" id="accommdesc" rows="10" placeholder=""></textarea>
                                                </div>
                                            </form>                                             
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
                                    <h2 class="accordion-header" id="headingThree"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Services Offered</button> </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body"> 
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchBoma">
                                                <label class="form-check-label ms-3" for="flexSwitchBoma"> Boma</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchButcherHouse">
                                                <label class="form-check-label ms-3" for="flexSwitchButcherHouse"> Butcher House</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchBraai">
                                                <label class="form-check-label ms-3" for="flexSwitchBraai"> Braai Area</label>
                                            </div>                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Game Details
</button></h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample" "">
                                        <div class="accordion-body">
                                            <form>
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
                                            <div class="row">
                                                <table class="table"> 
                                                    <thead> 
                                                        <tr> 
                                                            <th scope="col">#</th> 
                                                            <th scope="col">Animal</th> 
                                                            <th scope="col">Price (ZAR) - male</th> 
                                                            <th scope="col">Price (ZAR) - female</th>
                                                            <th scope="col">Price (ZAR)- trophy</th> 
                                                        </tr>                                                         
                                                    </thead>                                                     
                                                    <tbody> 
                                                        <tr> 
                                                            <th scope="row">1</th> 
                                                            <td>Impala</td> 
                                                            <td>1100</td> 
                                                            <td>980</td>
                                                            <td>2225</td> 
                                                        </tr>                                                         
                                                        <tr> 
                                                            <th scope="row">2</th> 
                                                            <td>Kudu</td> 
                                                            <td>2898</td> 
                                                            <td>2655</td>
                                                            <td>4879</td> 
                                                        </tr>                                                         
                                                        <tr> 
                                                            <th scope="row">3</th> 
                                                            <td>Bushpig</td> 
                                                            <td>989</td> 
                                                            <td>1100</td>
                                                            <td>1458</td> 
                                                        </tr>                                                         
                                                    </tbody>                                                     
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Photos
</button> </h2>
                                </div>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <form>
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
                                    <h2 class="accordion-header" id="headingSix"> <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" class="accordion-button collapsed">
                                            Extras
</button> </h2>
                                </div>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <form>
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
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix"> <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" class="accordion-button collapsed">
                                            Farm Bookings
</button> </h2>
                                </div>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <form>
                                            <div class="container pb-2 pt-2">
                                                <div class="container">
                                                    <div class="mb-4">
                                                        <p>Here you can view your up coming bookings and also provide a review on hunters p.s. bookings are sorted automatically by most recent 1st....</p>
                                                    </div>
                                                    <div class="justify-content-center row"> 
                                                        <div class="col-lg-4 col-md-6 pb-3 pt-3"> 
                                                            <div class="border"> <a href="#" class="d-block"><img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDY5fHxhbyUyMG5hbmd8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=350&h=240&fit=crop" class="img-fluid w-100" alt="Location image" width="350" height="240" data-bs-toggle="modal" data-bs-target="#modal1"></a>
                                                                <div class="pb-3 ps-4 pe-4 pt-4" style="background-color: rgba(112, 211, 62, 0.4);">
                                                                    <div class="align-items-center d-flex justify-content-between">
                                                                        <div class="pb-1 pt-1">
                                                                            <a href="#" class="link-dark text-decoration-none"><h3 class="h5 mb-1">Panan Krabi Resort</h3></a>
                                                                        </div>
                                                                    </div>
                                                                    <hr/>
                                                                    <div class="align-items-center d-flex justify-content-between">
                                                                        <div class="pb-1 pt-1"><span class="align-middle">Trip Date: 20/06/2024</span>
                                                                        </div>
                                                                    </div>
                                                                </div>                                                                 
                                                            </div>                                                             
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 pb-3 pt-3"> 
                                                            <div class="border"> <a href="#" class="d-block"><img src="https://images.unsplash.com/photo-1596178065887-1198b6148b2b?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDkxfHxjaGljYWdvJTIwaG90ZWx8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=350&h=240&fit=crop" class="img-fluid w-100" alt="Location image" width="350" height="240"></a>
                                                                <div class="pb-3 ps-4 pe-4 pt-4">
                                                                    <div class="align-items-center d-flex justify-content-between">
                                                                        <div class="pb-1 pt-1">
                                                                            <a href="#" class="link-dark text-decoration-none"><h3 class="h5 mb-1">Holiday Inn Rotorua</h3></a>
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
                                                                        <div class="pb-1 pt-1"><span class="align-middle">Trip Date: 07/07/2023</span>
                                                                        </div>
                                                                    </div>
                                                                </div>                                                                 
                                                            </div>                                                             
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 pb-3 pt-3"> 
                                                            <div class="border"> <a href="#" class="d-block"><img src="https://images.unsplash.com/photo-1548588627-f978862b85e1?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDY5fHxhbm5hcHVybmElMjBiYXNlJTIwY2FtcHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=350&h=240&fit=crop" class="img-fluid w-100" alt="Location image" width="350" height="240"></a>
                                                                <div class="pb-3 ps-4 pe-4 pt-4">
                                                                    <div class="align-items-center d-flex justify-content-between">
                                                                        <div class="pb-1 pt-1">
                                                                            <a href="#" class="link-dark text-decoration-none"><h3 class="h5 mb-1">Annpurna Base Camp</h3></a>
                                                                        </div>
                                                                    </div>
                                                                    <hr/>
                                                                    <div class="align-items-center d-flex justify-content-between">
                                                                        <div class="pb-1 pt-1"><span class="align-middle">Trip Date: 16/05/2022</span>
                                                                        </div>
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
                                                                        </div><a class="btn form-submit ms-2 p-2 rounded-pill" href="#" aria-label="Add to favorite"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="d-block">
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
                                                                        </div><a class="btn form-submit ms-2 p-2 rounded-pill" href="#" aria-label="Add to favorite"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="d-block">
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
                                                                        </div><a class="btn form-submit ms-2 p-2 rounded-pill" href="#" aria-label="Add to favorite"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1em" height="1em" class="d-block">
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
                                                    <div class="pb-3 pt-3 text-center"><a class="btn form-submit pe-4 ps-4 rounded-pill" href="#">View More</a>
                                                    </div>                                                     
                                                </div>
                                            </div>                                             
                                        </form>
                                    </div>
                                </div>
                            </div>                             
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
                                <button class="btn form-submit mb-3 rounded-4 text-center text-lg-center text-nowrap w-auto" type="submit">Sign In
</button>
                            </form>
                            <a data-bs-toggle="modal" href="#modalRegisterHunter" class="btn form-submit mb-3  rounded-4 text-center text-lg-center text-nowrap w-auto">Click here to register</a>
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
            </div><a class="nav-link px-lg-3 py-lg-4 text-light text-nowrap" href="#" data-pgc="hunterregister.modal"> <img src="assets/img/hunter.png" style="margin-right: 5px;" data-bs-toggle="modal" data-bs-target="#modalSigninHunter">Hunter: Login/Sign Up </a>
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
        <script src="scripts/navscroll.js"></script>
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script>
    </body>
</script>
