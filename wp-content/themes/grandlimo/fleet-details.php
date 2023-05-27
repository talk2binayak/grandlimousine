<?php

/**
 * Template Name: Fleet Details Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
  <div class="breadcrumb-bar">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-md-12 col-12">
                        <h2 class="breadcrumb-title">Chevrolet Camaro</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Chevrolet Camaro</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <section class="product-detail-head">
            <div class="container">
                <div class="detail-page-head">
                    <div class="detail-headings">
                        <div class="star-rated">
                            <div class="list-rating">
                                <span class="year">2023</span>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span class="d-inline-block average-list-rating"> 5.0 </span>
                            </div>
                            <div class="camaro-info">
                                <h3>Chevrolet Camaro</h3>
                                <div class="camaro-location">
                                    <div class="camaro-location-inner">
                                        <i class="feather-map-pin me-2"></i>
                                        <span class="me-2"> <b>Location :</b> Miami St, Destin, FL 32550, USA </span>
                                    </div>
                                    <div class="camaro-locations-inner">
                                        <i class="feather-eye me-2"></i>
                                        <span><b>Views :</b> 250 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section product-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="detail-product">
                            <div class="slider detail-bigimg">
                                <div class="product-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/slider-01.jpg" alt="Slider">
                                </div>
                                <div class="product-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/slider-02.jpg" alt="Slider">
                                </div>
                                <div class="product-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/slider-03.jpg" alt="Slider">
                                </div>
                                <div class="product-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/slider-04.jpg" alt="Slider">
                                </div>
                                <div class="product-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/slider-05.jpg" alt="Slider">
                                </div>
                            </div>
                            <div class="slider slider-nav-thumbnails">
                                <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/slider-thum-01.jpg" alt="product image"></div>
                                <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/slider-thum-02.jpg" alt="product image"></div>
                                <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/slider-thum-03.jpg" alt="product image"></div>
                                <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/slider-thum-04.jpg" alt="product image"></div>
                                <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/slider-thum-05.jpg" alt="product image"></div>
                            </div>
                        </div>
                        <div class="review-sec extra-service">
                            <div class="review-header">
                                <h4>Extra Service</h4>
                            </div>
                            <span>Baby Seat - $10</span>
                        </div>

                        <div class="review-sec specification-card ">
                            <div class="review-header">
                                <h4>Specifications</h4>
                            </div>
                            <div class="card-body">
                                <div class="lisiting-featues">
                                    <div class="row">
                                        <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                            <div class="feature-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/specification/specification-icon-1.svg" alt>
                                            </div>
                                            <div class="featues-info">
                                                <span>Body </span>
                                                <h6> Sedan</h6>
                                            </div>
                                        </div>
                                        <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                            <div class="feature-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/specification/specification-icon-2.svg" alt>
                                            </div>
                                            <div class="featues-info">
                                                <span>Make </span>
                                                <h6> Nisssan</h6>
                                            </div>
                                        </div>
                                        <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                            <div class="feature-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/specification/specification-icon-3.svg" alt>
                                            </div>
                                            <div class="featues-info">
                                                <span>Transmission </span>
                                                <h6> Automatic</h6>
                                            </div>
                                        </div>
                                        <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                            <div class="feature-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/specification/specification-icon-4.svg" alt>
                                            </div>
                                            <div class="featues-info">
                                                <span>Fuel Type </span>
                                                <h6> Diesel</h6>
                                            </div>
                                        </div>
                                        <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                            <div class="feature-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/specification/specification-icon-5.svg" alt>
                                            </div>
                                            <div class="featues-info">
                                                <span>Mileage </span>
                                                <h6>16 Km</h6>
                                            </div>
                                        </div>
                                        <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                            <div class="feature-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/specification/specification-icon-6.svg" alt>
                                            </div>
                                            <div class="featues-info">
                                                <span>Drivetrian </span>
                                                <h6>Front Wheel</h6>
                                            </div>
                                        </div>
                                        <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                            <div class="feature-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/specification/specification-icon-7.svg" alt>
                                            </div>
                                            <div class="featues-info">
                                                <span>Year</span>
                                                <h6> 2018</h6>
                                            </div>
                                        </div>
                                        <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                            <div class="feature-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/specification/specification-icon-8.svg" alt>
                                            </div>
                                            <div class="featues-info">
                                                <span>AC </span>
                                                <h6> Air Condition</h6>
                                            </div>
                                        </div>
                                        <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                            <div class="feature-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/specification/specification-icon-9.svg" alt>
                                            </div>
                                            <div class="featues-info">
                                                <span>VIN </span>
                                                <h6> 45456444</h6>
                                            </div>
                                        </div>
                                        <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                            <div class="feature-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/specification/specification-icon-10.svg" alt>
                                            </div>
                                            <div class="featues-info">
                                                <span>Door </span>
                                                <h6> 4 Doors</h6>
                                            </div>
                                        </div>
                                        <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                            <div class="feature-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/specification/specification-icon-11.svg" alt>
                                            </div>
                                            <div class="featues-info">
                                                <span>Brake </span>
                                                <h6> ABS</h6>
                                            </div>
                                        </div>
                                        <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                            <div class="feature-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/specification/specification-icon-12.svg" alt>
                                            </div>
                                            <div class="featues-info">
                                                <span>Engine (Hp) </span>
                                                <h6> 3,000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 theiaStickySidebar">
                        <div class="review-sec mt-0">
                            <div class="review-header">
                                <h4>Check Availability</h4>
                            </div>
                            <div class>
                                <form class>
                                    <ul>
                                        <li class="column-group-main">
                                            <div class="form-group">
                                                <label>Pickup Location</label>
                                                <div class="group-img">
                                                    <input type="text" class="form-control"
                                                        placeholder="45, 4th Avanue  Mark Street USA">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-group-main">
                                            <div class="form-group">
                                                <label>Dropoff Location</label>
                                                <div class="group-img">
                                                    <input type="text" class="form-control"
                                                        placeholder="78, 10th street Laplace USA">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-group-main">
                                            <div class="form-group m-0">
                                                <label>Pickup Date</label>
                                            </div>
                                            <div class="form-group-wrapp sidebar-form">
                                                <div class="form-group me-2">
                                                    <div class="group-img">
                                                        <input type="text" class="form-control datetimepicker"
                                                            placeholder="04/11/2023">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="group-img">
                                                        <input type="text" class="form-control timepicker"
                                                            placeholder="11:00 AM">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-group-main">
                                            <div class="form-group m-0">
                                                <label>Return Date</label>
                                            </div>
                                            <div class="form-group-wrapp sidebar-form">
                                                <div class="form-group me-2">
                                                    <div class="group-img">
                                                        <input type="text" class="form-control datetimepicker"
                                                            placeholder="04/11/2023">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="group-img">
                                                        <input type="text" class="form-control timepicker"
                                                            placeholder="11:00 AM">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-group-last">
                                            <div class="form-group mb-0">
                                                <div class="search-btn">
                                                    <button class="btn btn-primary check-available w-100" type="button"
                                                        data-bs-toggle="modal" data-bs-target="#pages_edit"> Check
                                                        Availability</button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <div class="review-sec extra-service mt-0">
                            <div class="review-header">
                                <h4>Listing Owner Details</h4>
                            </div>
                            <div class="owner-detail">
                                <div class="owner-img">
                                    <a href><img src="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/avatar-07.jpg" alt></a>
                                </div>
                                <div class="reviewbox-list-rating">
                                    <h5><a>Brooklyn Cars</a></h5>
                                    <p>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span> (5.0)</span>
                                    </p>
                                </div>
                            </div>
                            <ul class="booking-list">
                                <li>
                                    No of Listings
                                    <span>05</span>
                                </li>
                                <li>
                                    No of Bookings
                                    <span>225</span>
                                </li>
                                <li>
                                    Verification
                                    <h6>Verified</h6>
                                </li>
                            </ul>
                            <div class="message-btn">
                                <a href="#" class="btn btn-order">Message to owner</a>
                            </div>
                        </div>
                        <div class="review-sec share-car mt-0">
                            <div class="review-header">
                                <h4>Share this car</h4>
                            </div>
                            <ul class="nav-social">
                                <li>
                                    <a href="javascript:void(0)"><i
                                            class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fab fa-instagram fi-icon"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fab fa-behance fi-icon"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa-brands fa-pinterest-p fi-icon"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fab fa-twitter fi-icon"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fab fa-linkedin fi-icon"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="review-sec share-car mt-0 mb-0">
                            <div class="review-header">
                                <h4>View Location</h4>
                            </div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509170.989457427!2d-123.80081967108484!3d37.192957227641294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1669181581381!5m2!1sen!2sin"
                                class="iframe-video"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php
get_footer();
?>