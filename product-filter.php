<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gexin</title>
    <?php include('includes/css.php') ?>
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/ribbon.css">
 
</head>

<body>
    <div class="theme-body">
        <?php include('includes/header.php') ?>

       
        <section class="rtl">
            <div class="row first-product-bg" >
                <div class="col-12 mt-5">
                    <h2 class="fw-bold text-center text-white pt-3">PC</h2>
                </div>
                <div class="col-12">
                    <ul class="nav nav-tabs justify-content-center border-bottom-0" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active nav-title" id="LAPTOPs-tab" data-bs-toggle="tab" href="#LAPTOPS" type="button" role="tab" aria-controls="LAPTOPS" aria-selected="true">LAPTOPS</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link nav-title" id="EGPUS-tab" data-bs-toggle="tab" href="#EGPUS" type="button" role="tab" aria-controls="EGPUS" aria-selected="true">EGPUS</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link nav-title" id="ACCESSORIES-tab" data-bs-toggle="tab" href="#ACCESSORIES" type="button" role="tab" aria-controls="ACCESSORIES" aria-selected="true">ACCESSORIES</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container  my-4 " style="max-width:1400px"  >
                <div class="row">
                    <div class="col-sm-3 col-md-3 col-lg-3 d-sm-none d-md-none d-xs-none d-lg-block">
                        <!--<h2 class="pb-5" style="color: #8A9999;font-size: .975rem;font-weight:700;line-height: 1.3125rem;">
                            Filter By
                        </h2>-->
                        <div class="row d-sm-none  d-none d-sm-block d-sm-none  d-md-block  ">

                            <div class="col-6">
                                <h2 class="pb-5 filter-applied" style="">
                                    Filter Applied
                                </h2>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void();" class="float-end clear">clear all</a>

                            </div>
                        </div>
                        <div id="filters" class="  pb-3 d-none d-sm-block d-sm-none  d-md-block    " >
                            
                            <button type="button" class="btn btn-secondary tags  mb-2 mx-1" >
                                15 inch <i class="fa fa-times cancel-filter-btn" ></i>
                            </button>
                          

                        </div>
                        <div class="accordion  d-none d-sm-block d-sm-none  d-md-block   " id="accordionExample">
                            <div class="accordion-item py-2 first-page-acc"  >
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button  first-page-acc-button collapsed"   type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        SCREEN SIZE
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault1">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault1"  >
                                                    15 Inch (12)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault2">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault2"  >
                                                    14 Inch (9)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault3">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault3"  >
                                                    13 Inch (7)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault4">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault4"  >
                                                    12 Inch
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item first-page-accordian-item first-page-accordian-item py-2"  >
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed first-page-acc-button"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        SCREEN TYPE
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault5">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault5"  >
                                                    15 Inch (12)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault52">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault52"  >
                                                    14 Inch (9)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault6">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault6"  >
                                                    13 Inch (7)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault7">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault7"  >
                                                    12 Inch
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item first-page-accordian-item py-2"  >
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed first-page-acc-button"   type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        REFRESH RATE
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault8">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault8"  >
                                                    15 Inch (12)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault9">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault9"  >
                                                    14 Inch (9)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault10">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault10"  >
                                                    13 Inch (7)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault11">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault11"  >
                                                    12 Inch
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item first-page-accordian-item py-2"  >
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed first-page-acc-button"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        PROCESSOR
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault12">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault12"  >
                                                    15 Inch (12)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault13">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault13"  >
                                                    14 Inch (9)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault14">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault14"  >
                                                    13 Inch (7)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault15">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault15"  >
                                                    12 Inch
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item first-page-accordian-item py-2"  >
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed first-page-acc-button"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        GRAPHICS
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault16">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault16"  >
                                                    15 Inch (12)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault17">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault17"  >
                                                    14 Inch (9)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault18">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault18"  >
                                                    13 Inch (7)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault19">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault19"  >
                                                    12 Inch
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item first-page-accordian-item py-2"  >
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed first-page-acc-button"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        STORAGE
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault20">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault20"  >
                                                    15 Inch (12)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault21">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault21"  >
                                                    14 Inch (9)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault22">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault22"  >
                                                    13 Inch (7)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault23">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault23"  >
                                                    12 Inch
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item first-page-accordian-item py-2"  >
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed first-page-acc-button"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        MEMORY
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault24">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault24"  >
                                                    15 Inch (12)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault25">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault25"  >
                                                    14 Inch (9)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault26">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault26"  >
                                                    13 Inch (7)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault27">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault27"  >
                                                    12 Inch
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item first-page-accordian-item py-2"  >
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed first-page-acc-button"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        COLOR
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault28">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault28"  >
                                                    15 Inch (12)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault29">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault29"  >
                                                    14 Inch (9)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault30">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault30"  >
                                                    13 Inch (7)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault31">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault31"  >
                                                    12 Inch
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item first-page-accordian-item py-2"  >
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed first-page-acc-button"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        KEYBOARD TYPE
                                    </button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault32">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault32"  >
                                                    15 Inch (12)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault33">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault33"  >
                                                    14 Inch (9)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault34">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault34"  >
                                                    13 Inch (7)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault35">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault35"  >
                                                    12 Inch
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item first-page-accordian-item py-2"  >
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed first-page-acc-button"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        STUDIO EDITION
                                    </button>
                                </h2>
                                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault36">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault36"  >
                                                    15 Inch (12)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault37">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault37"  >
                                                    14 Inch (9)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault38">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault38"  >
                                                    13 Inch (7)
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault39">
                                                <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault39"  >
                                                    12 Inch
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-6 col-lg-8">
                             
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary  first-page-filter-btn  mb-2 text-white d-lg-none d-md-block d-sm-block d-xs-block"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    FILTER <i class="fa fa-check" style="color: #44D62C !important;"></i>
                                </button>
                              
                            </div>
                            <div class="col-6 col-lg-4">
                                <label class="form-group border-lable-flt">
                                    <select class="form-select  custom-select first-page-form-select " style="">
                                        <option selected>Newest</option>
                                        <option>Price(Low to High)</option>
                                        <option>Price(High to Low)</option>
                                    </select>
                                    <span class="fw-bold custom-select-label-sm" >Sort By</span>
                                </label>
                            </div>

                        </div>
                        <!-- Tabs content -->
                        <div class="tab-content" id="ex1-content">
                            <div class="tab-pane fade show active" id="LAPTOPS" role="tabpanel" aria-labelledby="LAPTOPS-tab">
                                <div class="row">
                                    <div class="text-center text-md-start col-lg-12">
                                             <p  class="product-count-page3   d-lg-block d-md-none d-sm-none d-xs-none">9 Products</p>
                                         </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                                        <div class="container-fluid" style="position:relative;background-color: #111111 !important;">
                                            <div class="ribbon-3">
                                                <div class="ribbon-content">
                                                    <p style="color: #000;" class="fw-bold">New</p>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);"><img src="https://assets3.razerzone.com/XrsbaD0nA9GA11DSmEYOi1GisYI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh11%2Fhb4%2F9250062598174%2Frazerbook-quartz-m15-500x500.png" class="img-fluid"></a>
                                        </div>
                                        <div class="container-fluid py-3 first-product-bg" >
                                            <a href="javascript:void();" class="product-title">
                                                <p class="text-white ">جيكسن  Book - Full HD 60Hz - Intel® Iris® Xe Graphics - Quartz</p>
                                            </a>
                                            <ul>
                                                <li>Intel Core i5-1135G7</li>
                                                <li>Windows 11 Home</li>
                                                <li>13.4" 60Hz Full HD</li>
                                                <li>Intel® Iris® Xe Graphics</li>
                                                <li>8GB RAM, 256GB SSD</li>
                                            </ul>
                                            <a href="javascript:void();" class="product-details">
                                                <a  class="mb-0 view-details-btn" href="product-detail.php">View details ></a>
                                            </a>
                                            <span class="text-white fw-bold">US$999.99</span>
                                            <br>
                                            <a class="product-btn first-add-to-cart " href="physical-product-1.php">ADD TO CART</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                                        <div class="container-fluid bg-products" >
                                            <a href="javascript:void();"><img src="https://assets3.razerzone.com/XrsbaD0nA9GA11DSmEYOi1GisYI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh11%2Fhb4%2F9250062598174%2Frazerbook-quartz-m15-500x500.png" class="img-fluid"></a>
                                        </div>
                                        <div class="container-fluid py-3 first-product-bg" >
                                            <a href="javascript:void();" class="product-title">
                                                <p class="text-white ">جيكسن  Book - Full HD 60Hz - Intel® Iris® Xe Graphics - Quartz</p>
                                            </a>
                                            <ul>
                                                <li>Intel Core i5-1135G7</li>
                                                <li>Windows 11 Home</li>
                                                <li>13.4" 60Hz Full HD</li>
                                                <li>Intel® Iris® Xe Graphics</li>
                                                <li>8GB RAM, 256GB SSD</li>
                                            </ul>
                                            <a href="javascript:void();" class="product-details">
                                                <a  class="mb-0 view-details-btn" href="product-detail.php">View details ></a>
                                            </a>
                                            <span class="text-white fw-bold">US$999.99</span>
                                            <br>
                                            <a href="physical-product-1.php" class="product-btn first-add-to-cart" >ADD TO CART</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                                        <div class="container-fluid bg-products"  >
                                        <a href="javascript:void();"><img src="https://assets3.razerzone.com/XrsbaD0nA9GA11DSmEYOi1GisYI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh11%2Fhb4%2F9250062598174%2Frazerbook-quartz-m15-500x500.png" class="img-fluid"></a>    
                                    </div>
                                        <div class="container-fluid py-3 first-product-bg" >
                                            <a href="javascript:void();" class="product-title">
                                                <p class="text-white ">جيكسن  Book - Full HD 60Hz - Intel® Iris® Xe Graphics - Quartz</p>
                                            </a>
                                            <ul>
                                                <li>Intel Core i5-1135G7</li>
                                                <li>Windows 11 Home</li>
                                                <li>13.4" 60Hz Full HD</li>
                                                <li>Intel® Iris® Xe Graphics</li>
                                                <li>8GB RAM, 256GB SSD</li>
                                            </ul>
                                            <a href="javascript:void();" class="product-details">
                                                <a  class="mb-0 view-details-btn" href="product-detail.php">View details ></a>
                                            </a>
                                            <span class="text-white fw-bold">US$999.99</span>
                                            <br>
                                            <a href="physical-product-1.php" class="product-btn first-add-to-cart" >ADD TO CART</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                                        <div class="container-fluid bg-products" >
                                        <a href="javascript:void();"><img src="https://assets3.razerzone.com/XrsbaD0nA9GA11DSmEYOi1GisYI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh11%2Fhb4%2F9250062598174%2Frazerbook-quartz-m15-500x500.png" class="img-fluid"></a>    
                                    </div>
                                        <div class="container-fluid py-3 first-product-bg" >
                                            <a href="javascript:void();" class="product-title">
                                                <p class="text-white ">جيكسن  Book - Full HD 60Hz - Intel® Iris® Xe Graphics - Quartz</p>
                                            </a>
                                            <ul>
                                                <li>Intel Core i5-1135G7</li>
                                                <li>Windows 11 Home</li>
                                                <li>13.4" 60Hz Full HD</li>
                                                <li>Intel® Iris® Xe Graphics</li>
                                                <li>8GB RAM, 256GB SSD</li>
                                            </ul>
                                            <a href="javascript:void();" class="product-details">
                                                <a  class="mb-0 view-details-btn" href="product-detail.php">View details ></a>
                                            </a>
                                            <span class="text-white fw-bold">US$999.99</span>
                                            <br>
                                            <a href="physical-product-1.php" class="product-btn first-add-to-cart" >ADD TO CART</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                                        <div class="container-fluid bg-products" >
                                        <a href="javascript:void();"><img src="https://assets3.razerzone.com/XrsbaD0nA9GA11DSmEYOi1GisYI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh11%2Fhb4%2F9250062598174%2Frazerbook-quartz-m15-500x500.png" class="img-fluid"></a>    
                                    </div>
                                        <div class="container-fluid py-3 first-product-bg" >
                                            <a href="javascript:void();" class="product-title">
                                                <p class="text-white ">جيكسن  Book - Full HD 60Hz - Intel® Iris® Xe Graphics - Quartz</p>
                                            </a>
                                            <ul>
                                                <li>Intel Core i5-1135G7</li>
                                                <li>Windows 11 Home</li>
                                                <li>13.4" 60Hz Full HD</li>
                                                <li>Intel® Iris® Xe Graphics</li>
                                                <li>8GB RAM, 256GB SSD</li>
                                            </ul>
                                            <a href="javascript:void();" class="product-details">
                                                <a  class="mb-0 view-details-btn" href="product-detail.php">View details ></a>
                                            </a>
                                            <span class="text-white fw-bold">US$999.99</span>
                                            <br>
                                            <a href="physical-product-1.php" class="product-btn first-add-to-cart" >ADD TO CART</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                                        <div class="container-fluid bg-products" >
                                        <a href="javascript:void();"><img src="https://assets3.razerzone.com/XrsbaD0nA9GA11DSmEYOi1GisYI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh11%2Fhb4%2F9250062598174%2Frazerbook-quartz-m15-500x500.png" class="img-fluid"></a>    
                                    </div>
                                        <div class="container-fluid py-3 first-product-bg" >
                                            <a href="javascript:void();" class="product-title">
                                                <p class="text-white ">جيكسن  Book - Full HD 60Hz - Intel® Iris® Xe Graphics - Quartz</p>
                                            </a>
                                            <ul>
                                                <li>Intel Core i5-1135G7</li>
                                                <li>Windows 11 Home</li>
                                                <li>13.4" 60Hz Full HD</li>
                                                <li>Intel® Iris® Xe Graphics</li>
                                                <li>8GB RAM, 256GB SSD</li>
                                            </ul>
                                            <a href="javascript:void();" class="product-details">
                                                <a  class="mb-0 view-details-btn" href="product-detail.php">View details ></a>
                                            </a>
                                            <span class="text-white fw-bold">US$999.99</span>
                                            <br>
                                            <a href="physical-product-1.php" class="product-btn first-add-to-cart" >ADD TO CART</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="EGPUS" role="tabpanel" aria-labelledby="EGPUS-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                                        <div class="container-fluid bg-products" >
                                        <a href="javascript:void();"><img src="https://assets3.razerzone.com/XrsbaD0nA9GA11DSmEYOi1GisYI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh11%2Fhb4%2F9250062598174%2Frazerbook-quartz-m15-500x500.png" class="img-fluid"></a>    
                                    </div>
                                        <div class="container-fluid py-3 first-product-bg" >
                                            <a href="javascript:void();" class="product-title">
                                                <p class="text-white ">جيكسن  Book - Full HD 60Hz - Intel® Iris® Xe Graphics - Quartz</p>
                                            </a>
                                            <ul>
                                                <li>Intel Core i5-1135G7</li>
                                                <li>Windows 11 Home</li>
                                                <li>13.4" 60Hz Full HD</li>
                                                <li>Intel® Iris® Xe Graphics</li>
                                                <li>8GB RAM, 256GB SSD</li>
                                            </ul>
                                            <a href="javascript:void();" class="product-details">
                                                <a  class="mb-0 view-details-btn" href="product-detail.php">View details ></a>
                                            </a>
                                            <span class="text-white fw-bold">US$999.99</span>
                                            <br>
                                            <a href="physical-product-1.php" class="product-btn first-add-to-cart" >ADD TO CART</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                                        <div class="container-fluid" style="position:relative;background-color: #111111 !important;">
                                            <div class="ribbon-3">
                                                <div class="ribbon-content">
                                                    <p style="color: #000;" class="fw-bold">New</p>
                                                </div>
                                            </div>
                                            <a href="javascript:void();"><img src="https://assets3.razerzone.com/XrsbaD0nA9GA11DSmEYOi1GisYI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh11%2Fhb4%2F9250062598174%2Frazerbook-quartz-m15-500x500.png" class="img-fluid"></a>
                                        </div>
                                        <div class="container-fluid py-3 first-product-bg" >
                                            <a href="javascript:void();" class="product-title">
                                                <p class="text-white ">جيكسن  Book - Full HD 60Hz - Intel® Iris® Xe Graphics - Quartz</p>
                                            </a>
                                            <ul>
                                                <li>Intel Core i5-1135G7</li>
                                                <li>Windows 11 Home</li>
                                                <li>13.4" 60Hz Full HD</li>
                                                <li>Intel® Iris® Xe Graphics</li>
                                                <li>8GB RAM, 256GB SSD</li>
                                            </ul>
                                            <a href="javascript:void();" class="product-details">
                                                <a  class="mb-0 view-details-btn" href="product-detail.php">View details ></a>
                                            </a>
                                            <span class="text-white fw-bold">US$999.99</span>
                                            <br>
                                            <a href="physical-product-1.php" class="product-btn first-add-to-cart" >ADD TO CART</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                                        <div class="container-fluid bg-products" >
                                        <a href="javascript:void();"><img src="https://assets3.razerzone.com/XrsbaD0nA9GA11DSmEYOi1GisYI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh11%2Fhb4%2F9250062598174%2Frazerbook-quartz-m15-500x500.png" class="img-fluid"></a>    
                                    </div>
                                        <div class="container-fluid py-3 first-product-bg" >
                                            <a href="javascript:void();" class="product-title">
                                                <p class="text-white ">جيكسن  Book - Full HD 60Hz - Intel® Iris® Xe Graphics - Quartz</p>
                                            </a>
                                            <ul>
                                                <li>Intel Core i5-1135G7</li>
                                                <li>Windows 11 Home</li>
                                                <li>13.4" 60Hz Full HD</li>
                                                <li>Intel® Iris® Xe Graphics</li>
                                                <li>8GB RAM, 256GB SSD</li>
                                            </ul>
                                            <a href="javascript:void();" class="product-details">
                                                <a  class="mb-0 view-details-btn" href="product-detail.php">View details ></a>
                                            </a>
                                            <span class="text-white fw-bold">US$999.99</span>
                                            <br>
                                            <a href="physical-product-1.php" class="product-btn first-add-to-cart" >ADD TO CART</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                                        <div class="container-fluid bg-products" >
                                        <a href="javascript:void();"><img src="https://assets3.razerzone.com/XrsbaD0nA9GA11DSmEYOi1GisYI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh11%2Fhb4%2F9250062598174%2Frazerbook-quartz-m15-500x500.png" class="img-fluid"></a>    
                                    </div>
                                        <div class="container-fluid py-3 first-product-bg" >
                                            <a href="javascript:void();" class="product-title">
                                                <p class="text-white ">جيكسن  Book - Full HD 60Hz - Intel® Iris® Xe Graphics - Quartz</p>
                                            </a>
                                            <ul>
                                                <li>Intel Core i5-1135G7</li>
                                                <li>Windows 11 Home</li>
                                                <li>13.4" 60Hz Full HD</li>
                                                <li>Intel® Iris® Xe Graphics</li>
                                                <li>8GB RAM, 256GB SSD</li>
                                            </ul>
                                            <a href="javascript:void();" class="product-details">
                                                <a  class="mb-0 view-details-btn" href="product-detail.php">View details ></a>
                                            </a>
                                            <span class="text-white fw-bold">US$999.99</span>
                                            <br>
                                            <a href="physical-product-1.php" class="product-btn first-add-to-cart" >ADD TO CART</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                                        <div class="container-fluid bg-products" >
                                        <a href="javascript:void();"><img src="https://assets3.razerzone.com/XrsbaD0nA9GA11DSmEYOi1GisYI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh11%2Fhb4%2F9250062598174%2Frazerbook-quartz-m15-500x500.png" class="img-fluid"></a>    
                                    </div>
                                        <div class="container-fluid py-3 first-product-bg" >
                                            <a href="javascript:void();" class="product-title">
                                                <p class="text-white ">جيكسن  Book - Full HD 60Hz - Intel® Iris® Xe Graphics - Quartz</p>
                                            </a>
                                            <ul>
                                                <li>Intel Core i5-1135G7</li>
                                                <li>Windows 11 Home</li>
                                                <li>13.4" 60Hz Full HD</li>
                                                <li>Intel® Iris® Xe Graphics</li>
                                                <li>8GB RAM, 256GB SSD</li>
                                            </ul>
                                            <a href="javascript:void();" class="product-details">
                                                <a  class="mb-0 view-details-btn" href="product-detail.php">View details ></a>
                                            </a>
                                            <span class="text-white fw-bold">US$999.99</span>
                                            <br>
                                            <a href="physical-product-1.php" class="product-btn first-add-to-cart" >ADD TO CART</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                                        <div class="container-fluid bg-products" >
                                        <a href="javascript:void();"><img src="https://assets3.razerzone.com/XrsbaD0nA9GA11DSmEYOi1GisYI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh11%2Fhb4%2F9250062598174%2Frazerbook-quartz-m15-500x500.png" class="img-fluid"></a>    
                                    </div>
                                        <div class="container-fluid py-3 first-product-bg" >
                                            <a href="javascript:void();" class="product-title">
                                                <p class="text-white ">جيكسن  Book - Full HD 60Hz - Intel® Iris® Xe Graphics - Quartz</p>
                                            </a>
                                            <ul>
                                                <li>Intel Core i5-1135G7</li>
                                                <li>Windows 11 Home</li>
                                                <li>13.4" 60Hz Full HD</li>
                                                <li>Intel® Iris® Xe Graphics</li>
                                                <li>8GB RAM, 256GB SSD</li>
                                            </ul>
                                            <a href="javascript:void();" class="product-details">
                                                <a  class="mb-0 view-details-btn" href="product-detail.php">View details ></a>
                                            </a>
                                            <span class="text-white fw-bold">US$999.99</span>
                                            <br>
                                            <a href="physical-product-1.php" class="product-btn first-add-to-cart" >ADD TO CART</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ACCESSORIES" role="tabpanel" aria-labelledby="ACCESSORIES-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                                        <div class="container-fluid bg-products" >
                                        <a href="javascript:void();"><img src="https://assets3.razerzone.com/XrsbaD0nA9GA11DSmEYOi1GisYI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh11%2Fhb4%2F9250062598174%2Frazerbook-quartz-m15-500x500.png" class="img-fluid"></a>    
                                    </div>
                                        <div class="container-fluid py-3 first-product-bg" >
                                            <a href="javascript:void();" class="product-title">
                                                <p class="text-white ">جيكسن  Book - Full HD 60Hz - Intel® Iris® Xe Graphics - Quartz</p>
                                            </a>
                                            <ul>
                                                <li>Intel Core i5-1135G7</li>
                                                <li>Windows 11 Home</li>
                                                <li>13.4" 60Hz Full HD</li>
                                                <li>Intel® Iris® Xe Graphics</li>
                                                <li>8GB RAM, 256GB SSD</li>
                                            </ul>
                                            <a href="javascript:void();" class="product-details">
                                                <a  class="mb-0 view-details-btn" href="product-detail.php">View details ></a>
                                            </a>
                                            <span class="text-white fw-bold">US$999.99</span>
                                            <br>
                                            <a href="physical-product-1.php" class="product-btn first-add-to-cart" >ADD TO CART</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                                        <div class="container-fluid bg-products" >
                                        <a href="javascript:void();"><img src="https://assets3.razerzone.com/XrsbaD0nA9GA11DSmEYOi1GisYI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh11%2Fhb4%2F9250062598174%2Frazerbook-quartz-m15-500x500.png" class="img-fluid"></a>    
                                    </div>
                                        <div class="container-fluid py-3 first-product-bg" >
                                            <a href="javascript:void();" class="product-title">
                                                <p class="text-white ">جيكسن  Book - Full HD 60Hz - Intel® Iris® Xe Graphics - Quartz</p>
                                            </a>
                                            <ul>
                                                <li>Intel Core i5-1135G7</li>
                                                <li>Windows 11 Home</li>
                                                <li>13.4" 60Hz Full HD</li>
                                                <li>Intel® Iris® Xe Graphics</li>
                                                <li>8GB RAM, 256GB SSD</li>
                                            </ul>
                                            <a href="javascript:void();" class="product-details">
                                                <a  class="mb-0 view-details-btn" href="product-detail.php">View details ></a>
                                            </a>
                                            <span class="text-white fw-bold">US$999.99</span>
                                            <br>
                                            <a href="physical-product-1.php" class="product-btn first-add-to-cart" >ADD TO CART</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                                        <div class="container-fluid bg-products" >
                                        <a href="javascript:void();"><img src="https://assets3.razerzone.com/XrsbaD0nA9GA11DSmEYOi1GisYI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh11%2Fhb4%2F9250062598174%2Frazerbook-quartz-m15-500x500.png" class="img-fluid"></a>    
                                    </div>
                                        <div class="container-fluid py-3 first-product-bg" >
                                            <a href="javascript:void();" class="product-title">
                                                <p class="text-white ">جيكسن  Book - Full HD 60Hz - Intel® Iris® Xe Graphics - Quartz</p>
                                            </a>
                                            <ul>
                                                <li>Intel Core i5-1135G7</li>
                                                <li>Windows 11 Home</li>
                                                <li>13.4" 60Hz Full HD</li>
                                                <li>Intel® Iris® Xe Graphics</li>
                                                <li>8GB RAM, 256GB SSD</li>
                                            </ul>
                                            <a href="javascript:void();" class="product-details">
                                                <a  class="mb-0 view-details-btn" href="product-detail.php">View details ></a>
                                            </a>
                                            <span class="text-white fw-bold">US$999.99</span>
                                            <br>
                                            <a href="physical-product-1.php" class="product-btn first-add-to-cart" >ADD TO CART</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                                        <div class="container-fluid bg-products" >
                                        <a href="javascript:void();"><img src="https://assets3.razerzone.com/XrsbaD0nA9GA11DSmEYOi1GisYI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh11%2Fhb4%2F9250062598174%2Frazerbook-quartz-m15-500x500.png" class="img-fluid"></a>    
                                    </div>
                                        <div class="container-fluid py-3 first-product-bg" >
                                            <a href="javascript:void();" class="product-title">
                                                <p class="text-white ">جيكسن  Book - Full HD 60Hz - Intel® Iris® Xe Graphics - Quartz</p>
                                            </a>
                                            <ul>
                                                <li>Intel Core i5-1135G7</li>
                                                <li>Windows 11 Home</li>
                                                <li>13.4" 60Hz Full HD</li>
                                                <li>Intel® Iris® Xe Graphics</li>
                                                <li>8GB RAM, 256GB SSD</li>
                                            </ul>
                                            <a href="javascript:void();" class="product-details">
                                                <a  class="mb-0 view-details-btn" href="product-detail.php">View details ></a>
                                            </a>
                                            <span class="text-white fw-bold">US$999.99</span>
                                            <br>
                                            <a href="physical-product-1.php" class="product-btn first-add-to-cart" >ADD TO CART</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                                        <div class="container-fluid bg-products" >
                                        <a href="javascript:void();"><img src="https://assets3.razerzone.com/XrsbaD0nA9GA11DSmEYOi1GisYI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh11%2Fhb4%2F9250062598174%2Frazerbook-quartz-m15-500x500.png" class="img-fluid"></a>    
                                    </div>
                                        <div class="container-fluid py-3 first-product-bg" >
                                            <a href="javascript:void();" class="product-title">
                                                <p class="text-white ">جيكسن  Book - Full HD 60Hz - Intel® Iris® Xe Graphics - Quartz</p>
                                            </a>
                                            <ul>
                                                <li>Intel Core i5-1135G7</li>
                                                <li>Windows 11 Home</li>
                                                <li>13.4" 60Hz Full HD</li>
                                                <li>Intel® Iris® Xe Graphics</li>
                                                <li>8GB RAM, 256GB SSD</li>
                                            </ul>
                                            <a href="javascript:void();" class="product-details">
                                                <a  class="mb-0 view-details-btn" href="product-detail.php">View details ></a>
                                            </a>
                                            <span class="text-white fw-bold">US$999.99</span>
                                            <br>
                                            <a href="physical-product-1.php" class="product-btn first-add-to-cart" >ADD TO CART</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                                        <div class="container-fluid bg-products" >
                                        <a href="javascript:void();"><img src="https://assets3.razerzone.com/XrsbaD0nA9GA11DSmEYOi1GisYI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh11%2Fhb4%2F9250062598174%2Frazerbook-quartz-m15-500x500.png" class="img-fluid"></a>    
                                    </div>
                                        <div class="container-fluid py-3 first-product-bg" >
                                            <a href="javascript:void();" class="product-title">
                                                <p class="text-white ">جيكسن  Book - Full HD 60Hz - Intel® Iris® Xe Graphics - Quartz</p>
                                            </a>
                                            <ul>
                                                <li>Intel Core i5-1135G7</li>
                                                <li>Windows 11 Home</li>
                                                <li>13.4" 60Hz Full HD</li>
                                                <li>Intel® Iris® Xe Graphics</li>
                                                <li>8GB RAM, 256GB SSD</li>
                                            </ul>
                                            <a href="javascript:void();" class="product-details">
                                                <a  class="mb-0 view-details-btn" href="product-detail.php">View details ></a>
                                            </a>
                                            <span class="text-white fw-bold">US$999.99</span>
                                            <br>
                                            <a href="physical-product-1.php" class="product-btn first-add-to-cart" >ADD TO CART</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tabs content -->

                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- move filters on modal md screen -->
    <div class="modal fade mx-1 mt-1" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content" style="background-color:#222222 !important;border: 1px solid #111111;">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title ps-4 fw-bold" style="color: #8A9999 !important;" id="staticBackdropLabel">FILTER</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row py-2" style="background-color: #333333 !important;">

                        <div class="col-12">
                            <div id="filters" class="d-flex pb-3" style="border-bottom: 1px solid #839999 !important;">
                                <button type="button" class="btn btn-secondary first-page-tags-btn" onMouseOver="this.style.background='#3C3C3C'" onMouseOut="this.style.background='#161616'" >
                                    14 inch <i class="fa fa-times cancel-filter-btn" ></i>
                                </button>
                                <button type="button" class="btn btn-secondary mx-1 first-page-tags-btn" onMouseOver="this.style.background='#3C3C3C'" onMouseOut="this.style.background='#161616'" >
                                    15 inch <i class="fa fa-times cancel-filter-btn" ></i>
                                </button>
                                    
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="javascript:void();" class="clear">clear all</a>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item first-page-accordian-item py-2"  >
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed first-page-acc-button"   type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            SCREEN SIZE
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="form-group">
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        15 Inch (12)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        14 Inch (9)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        13 Inch (7)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        12 Inch
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item first-page-accordian-item py-2"  >
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed first-page-acc-button"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            SCREEN TYPE
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="form-group">
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        15 Inch (12)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        14 Inch (9)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        13 Inch (7)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        12 Inch
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item first-page-accordian-item py-2"  >
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed first-page-acc-button"   type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            REFRESH RATE
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="form-group">
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        15 Inch (12)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        14 Inch (9)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        13 Inch (7)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        12 Inch
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item first-page-accordian-item py-2"  >
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed first-page-acc-button"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            PROCESSOR
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="form-group">
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        15 Inch (12)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        14 Inch (9)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        13 Inch (7)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        12 Inch
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item first-page-accordian-item py-2"  >
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed first-page-acc-button"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            GRAPHICS
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="form-group">
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        15 Inch (12)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        14 Inch (9)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        13 Inch (7)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        12 Inch
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item first-page-accordian-item py-2"  >
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed first-page-acc-button"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            STORAGE
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="form-group">
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        15 Inch (12)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        14 Inch (9)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        13 Inch (7)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        12 Inch
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item first-page-accordian-item py-2"  >
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed first-page-acc-button"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            MEMORY
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="form-group">
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        15 Inch (12)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        14 Inch (9)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        13 Inch (7)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        12 Inch
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item first-page-accordian-item py-2"  >
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed first-page-acc-button"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            COLOR
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="form-group">
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        15 Inch (12)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        14 Inch (9)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        13 Inch (7)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        12 Inch
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item first-page-accordian-item py-2"  >
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed first-page-acc-button"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            KEYBOARD TYPE
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="form-group">
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        15 Inch (12)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        14 Inch (9)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        13 Inch (7)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        12 Inch
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item first-page-accordian-item py-2"  >
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed first-page-acc-button"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            STUDIO EDITION
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="form-group">
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        15 Inch (12)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        14 Inch (9)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        13 Inch (7)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-1">
                                                    <input class="form-check-input form-check-input-lg bg-dark" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label first-page-label fw-bold" for="flexCheckDefault"  >
                                                        12 Inch
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-top-0 p-0 m-0">
                    <button type="button" class="btn btn-primary w-100 rounded-0 border-0" style="background-color: #44D62C !important;">SHOW 24 PRODUCTS</button>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/search-bar.php') ?>
    <?php include('includes/footer.php') ?>
    <?php include('includes/js.php') ?>
    <script src="js/slick.min.js"></script>
    <script>
        $(document).click(function() {
            $(".dropdown-menu").hide();
        });

        /* Clicks within the dropdown won't make
           it past the dropdown itself */
        $(".dropdown-menu").click(function(e) {
            e.stopPropagation();
        });
    </script>
</body>

</html>