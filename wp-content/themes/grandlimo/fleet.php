<?php

/**
 * Template Name: Fleet Page
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
                        <h2 class="breadcrumb-title">Car Listings</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Car Listings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section class="section car-listing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">

                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="listing-item">
                                    <div class="listing-img">
                                        <a href="<?php echo site_url(); ?>/fleet-deatails/">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/car-01.jpg" class="img-fluid" alt="Toyota">
                                        </a>
                                        <div class="fav-item">
                                            <span class="featured-text">Toyota</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/avatar-0.jpg" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="<?php echo site_url(); ?>/fleet-deatails/">Toyota Camry SE 350</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(5.0)</span>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg"
                                                            alt="Auto"></span>
                                                    <p>Auto</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-02.svg"
                                                            alt="10 KM"></span>
                                                    <p>10 KM</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-03.svg"
                                                            alt="Petrol"></span>
                                                    <p>Petrol</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-04.svg"
                                                            alt="Power"></span>
                                                    <p>Power</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg"
                                                            alt="2018"></span>
                                                    <p>2018</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-06.svg"
                                                            alt="Persons"></span>
                                                    <p>5 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">
                                            <div class="listing-price">
                                                <span><i class="feather-map-pin"></i></span>Germany
                                            </div>
                                            <div class="listing-price">
                                                <h6>$400 <span>/ Day</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="<?php echo site_url(); ?>/fleet-deatails/" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="listing-item">
                                    <div class="listing-img">
                                        <a href="<?php echo site_url(); ?>/fleet-deatails/">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/car-02.jpg" class="img-fluid" alt="KIA">
                                        </a>
                                        <div class="fav-item">
                                            <span class="featured-text">KIA</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/avatar-02.jpg" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="<?php echo site_url(); ?>/fleet-deatails/">Kia Soul 2016</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(5.0)</span>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg"
                                                            alt="Auto"></span>
                                                    <p>Auto</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-02.svg"
                                                            alt="22 KM"></span>
                                                    <p>22 KM</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-03.svg"
                                                            alt="Petrol"></span>
                                                    <p>Petrol</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-04.svg"
                                                            alt="Diesel"></span>
                                                    <p>Diesel</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg"
                                                            alt="2016"></span>
                                                    <p>2016</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-06.svg"
                                                            alt="Persons"></span>
                                                    <p>5 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">
                                            <div class="listing-price">
                                                <span><i class="feather-map-pin"></i></span>Belgium
                                            </div>
                                            <div class="listing-price">
                                                <h6>$80 <span>/ Day</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="<?php echo site_url(); ?>/fleet-deatails/" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="listing-item">
                                    <div class="listing-img">
                                        <a href="<?php echo site_url(); ?>/fleet-deatails/">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/car-03.jpg" class="img-fluid" alt="Audi">
                                        </a>
                                        <div class="fav-item">
                                            <span class="featured-text">Audi</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/avatar-03.jpg" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="<?php echo site_url(); ?>/fleet-deatails/">Audi A3 2019 new</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(5.0)</span>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg"
                                                            alt="Manual"></span>
                                                    <p>Manual</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-02.svg"
                                                            alt="10 KM"></span>
                                                    <p>10 KM</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-03.svg"
                                                            alt="Petrol"></span>
                                                    <p>Petrol</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-04.svg"
                                                            alt="Power"></span>
                                                    <p>Power</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg"
                                                            alt="2019"></span>
                                                    <p>2019</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-06.svg"
                                                            alt="Persons"></span>
                                                    <p>4 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">
                                            <div class="listing-price">
                                                <span><i class="feather-map-pin"></i></span>Newyork, USA
                                            </div>
                                            <div class="listing-price">
                                                <h6>$45 <span>/ Day</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="<?php echo site_url(); ?>/fleet-deatails/" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="listing-item">
                                    <div class="listing-img">
                                        <a href="<?php echo site_url(); ?>/fleet-deatails/">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/car-04.jpg" class="img-fluid" alt="Audi">
                                        </a>
                                        <div class="fav-item">
                                            <span class="featured-text">Ferrai</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/avatar-04.jpg" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="<?php echo site_url(); ?>/fleet-deatails/">Ferrari 458 MM Speciale</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(5.0)</span>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg"
                                                            alt="Manual"></span>
                                                    <p>Manual</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-02.svg"
                                                            alt="14 KM"></span>
                                                    <p>14 KM</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-03.svg"
                                                            alt="Diesel"></span>
                                                    <p>Diesel</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-04.svg"
                                                            alt="Basic"></span>
                                                    <p>Basic</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg"
                                                            alt="2022"></span>
                                                    <p>2022</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-06.svg"
                                                            alt="Persons"></span>
                                                    <p>5 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">
                                            <div class="listing-price">
                                                <span><i class="feather-map-pin"></i></span>Newyork, USA
                                            </div>
                                            <div class="listing-price">
                                                <h6>$160 <span>/ Day</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="<?php echo site_url(); ?>/fleet-deatails/" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="listing-item">
                                    <div class="listing-img">
                                        <a href="<?php echo site_url(); ?>/fleet-deatails/">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/car-05.jpg" class="img-fluid" alt="Audi">
                                        </a>
                                        <div class="fav-item">
                                            <span class="featured-text">Chevrolet</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/avatar-05.jpg" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="<?php echo site_url(); ?>/fleet-deatails/">2018 Chevrolet Camaro</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(5.0)</span>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg"
                                                            alt="Manual"></span>
                                                    <p>Manual</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-02.svg"
                                                            alt="18 KM"></span>
                                                    <p>18 KM</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-03.svg"
                                                            alt="Diesel"></span>
                                                    <p>Diesel</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-04.svg"
                                                            alt="Power"></span>
                                                    <p>Power</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg"
                                                            alt="2018"></span>
                                                    <p>2018</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-06.svg"
                                                            alt="Persons"></span>
                                                    <p>4 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">
                                            <div class="listing-price">
                                                <span><i class="feather-map-pin"></i></span>Germany
                                            </div>
                                            <div class="listing-price">
                                                <h6>$36 <span>/ Day</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="<?php echo site_url(); ?>/fleet-deatails/" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="listing-item">
                                    <div class="listing-img">
                                        <a href="<?php echo site_url(); ?>/fleet-deatails/">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/car-06.jpg" class="img-fluid" alt="Audi">
                                        </a>
                                        <div class="fav-item">
                                            <span class="featured-text">Acura</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/avatar-06.jpg" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="<?php echo site_url(); ?>/fleet-deatails/">Acura Sport Version</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(5.0)</span>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg"
                                                            alt="Auto"></span>
                                                    <p>Auto</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-02.svg"
                                                            alt="12 KM"></span>
                                                    <p>12 KM</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-03.svg"
                                                            alt="Diesel"></span>
                                                    <p>Diesel</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-04.svg"
                                                            alt="Power"></span>
                                                    <p>Power</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg"
                                                            alt="2013"></span>
                                                    <p>2013</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-06.svg"
                                                            alt="Persons"></span>
                                                    <p>5 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">
                                            <div class="listing-price">
                                                <span><i class="feather-map-pin"></i></span>Newyork, USA
                                            </div>
                                            <div class="listing-price">
                                                <h6>$30 <span>/ Day</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="<?php echo site_url(); ?>/fleet-deatails/" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="listing-item">
                                    <div class="listing-img">
                                        <a href="<?php echo site_url(); ?>/fleet-deatails/">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/car-07.jpg" class="img-fluid" alt="Audi">
                                        </a>
                                        <div class="fav-item">
                                            <span class="featured-text">Chevrolet</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/avatar-07.jpg" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="<?php echo site_url(); ?>/fleet-deatails/">Chevrolet Pick Truck 3.5L</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(5.0)</span>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg"
                                                            alt="Manual"></span>
                                                    <p>Manual</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-02.svg"
                                                            alt="10 KM"></span>
                                                    <p>10 KM</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-03.svg"
                                                            alt="Petrol"></span>
                                                    <p>Petrol</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-04.svg"
                                                            alt="Power"></span>
                                                    <p>Power</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg"
                                                            alt="2012"></span>
                                                    <p>2012</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-06.svg"
                                                            alt="Persons"></span>
                                                    <p>5 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">
                                            <div class="listing-price">
                                                <span><i class="feather-map-pin"></i></span>Spain
                                            </div>
                                            <div class="listing-price">
                                                <h6>$77 <span>/ Day</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="<?php echo site_url(); ?>/fleet-deatails/" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="listing-item">
                                    <div class="listing-img">
                                        <a href="<?php echo site_url(); ?>/fleet-deatails/">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/car-08.jpg" class="img-fluid" alt="Toyota">
                                        </a>
                                        <div class="fav-item">
                                            <span class="featured-text">Toyota</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/avatar-08.jpg" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="<?php echo site_url(); ?>/fleet-deatails/">Toyota Tacoma 4WD</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(5.0)</span>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg"
                                                            alt="Auto"></span>
                                                    <p>Auto</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-02.svg"
                                                            alt="22 miles"></span>
                                                    <p>22 miles</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-03.svg"
                                                            alt="Diesel"></span>
                                                    <p>Diesel</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-04.svg"
                                                            alt="Power"></span>
                                                    <p>Power</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg"
                                                            alt="2019"></span>
                                                    <p>2019</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-06.svg"
                                                            alt="Persons"></span>
                                                    <p>5 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">
                                            <div class="listing-price">
                                                <span><i class="feather-map-pin"></i></span>Dallas, USA
                                            </div>
                                            <div class="listing-price">
                                                <h6>$30 <span>/ Day</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="<?php echo site_url(); ?>/fleet-deatails/" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                <div class="listing-item">
                                    <div class="listing-img">
                                        <a href="<?php echo site_url(); ?>/fleet-deatails/">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/car-09.jpg" class="img-fluid" alt="Toyota">
                                        </a>
                                        <div class="fav-item">
                                            <span class="featured-text">Accura</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/avatar-08.jpg" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="<?php echo site_url(); ?>/fleet-deatails/">Acura RDX FWD</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(5.0)</span>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg"
                                                            alt="Auto"></span>
                                                    <p>Auto</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-02.svg"
                                                            alt="22 miles"></span>
                                                    <p>42 miles</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-03.svg"
                                                            alt="Petrol"></span>
                                                    <p>Petrol</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-04.svg"
                                                            alt="Power"></span>
                                                    <p>Power</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg"
                                                            alt="2019"></span>
                                                    <p>2021</p>
                                                </li>
                                                <li>
                                                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-06.svg"
                                                            alt="Persons"></span>
                                                    <p>5 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">
                                            <div class="listing-price">
                                                <span><i class="feather-map-pin"></i></span>Dallas, USA
                                            </div>
                                            <div class="listing-price">
                                                <h6>$80 <span>/ Day</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="<?php echo site_url(); ?>/fleet-deatails/" class="btn btn-order"><span><i
                                                        class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>


<?php
get_footer();
?>