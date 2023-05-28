<?php

/**
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<section class="banner-section banner-slider">
    <div class="container">
        <div class="home-banner">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-down">
                    <p class="explore-text"> <span><i class="fa-solid fa-thumbs-up me-2"></i></span>Welcome to The Grand Limousine</p>
                    <h1>Find Your Best <br>
                        <span>Limous in Melbourne</span>
                    </h1>
                    <p>Grand Limous services are available 24 hours a day, 7 days a week, and 365 days a year. </p>
                    <div class="view-all">
                        <a href="listing-grid.html" class="btn btn-view d-inline-flex align-items-center">View all Cars <span><i class="feather-arrow-right ms-2"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-down">
                    <div class="banner-imgs">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car-right.png" class="img-fluid aos" alt="bannerimage">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="section-search">
    <div class="container">
        <div class="search-box-banner">
            <form action="#">
                <ul class="align-items-center">
                    <li class="column-group-main">
                        <div class="form-group">
                            <label>Pickup Location</label>
                            <div class="group-img">
                                <input type="text" class="form-control" placeholder="Enter City, Airport, or Address">
                                <span><i class="feather-map-pin"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="column-group-main">
                        <div class="form-group">
                            <label>Pickup Date</label>
                        </div>
                        <div class="form-group-wrapp">
                            <div class="form-group date-widget">
                                <div class="group-img">
                                    <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                                    <span><i class="feather-calendar"></i></span>
                                </div>
                            </div>
                            <div class="form-group time-widge">
                                <div class="group-img">
                                    <input type="text" class="form-control timepicker" placeholder="11:00 AM">
                                    <span><i class="feather-clock"></i></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="column-group-main">
                        <div class="form-group">
                            <label>Return Date</label>
                        </div>
                        <div class="form-group-wrapp">
                            <div class="form-group date-widge">
                                <div class="group-img">
                                    <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                                    <span><i class="feather-calendar"></i></span>
                                </div>
                            </div>
                            <div class="form-group time-widge">
                                <div class="group-img">
                                    <input type="text" class="form-control timepicker" placeholder="11:00 AM">
                                    <span><i class="feather-clock"></i></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="column-group-last">
                        <div class="form-group">
                            <div class="search-btn">
                                <button class="btn search-button" type="submit"> <i class="fa fa-search" aria-hidden="true"></i>Search</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>

<section class="section why-choose popular-explore">
    <div class="choose-left">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/choose-left.png" class="img-fluid" alt="Why Choose Us">
    </div>
    <div class="container">

        <div class="section-heading" data-aos="fade-down">
            <h2>Why Choose Us</h2>
            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>

        <div class="why-choose-group">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="choose-img choose-black">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/bx-user-check.svg" alt>
                            </div>
                            <div class="choose-content">
                                <h4>Easy & Fast Booking</h4>
                                <p>Completely carinate e business testing process whereas fully researched customer service. Globally extensive content with quality.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="choose-img choose-secondary">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/bx-user-check.svg" alt>
                            </div>
                            <div class="choose-content">
                                <h4>Many Pickup Location</h4>
                                <p>Enthusiastically magnetic initiatives with cross-platform sources. Dynamically target testing procedures through effective.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="choose-img choose-primary">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/bx-user-check.svg" alt>
                            </div>
                            <div class="choose-content">
                                <h4>Customer Satisfaction</h4>
                                <p>Globally user centric method interactive. Seamlessly revolutionize unique portals corporate collaboration.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="section popular-services">
    <div class="container">

        <div class="section-heading" data-aos="fade-down">
            <h2>Recommended Car Rental deals</h2>
            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>

        <div class="row">
            <div class="popular-slider-group">
                <div class="owl-carousel rental-deal-slider owl-theme">

                    <div class="rental-car-item">
                        <div class="listing-item mb-0">
                            <div class="listing-img">
                                <a href="listing-details.html">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/car-01.jpg" class="img-fluid" alt="Toyota">
                                </a>
                            </div>
                            <div class="listing-content">
                                <div class="listing-features">
                                    <div class="fav-item-rental">
                                        <span class="featured-text">$400/day</span>
                                    </div>
                                    <div class="list-rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span>(5.0)</span>
                                    </div>
                                    <h3 class="listing-title">
                                        <a href="listing-details.html">Toyota Camry SE 350</a>
                                    </h3>
                                    <h6>Listed By : <span>Venis Darren</span></h6>
                                </div>
                                <div class="listing-details-group">
                                    <ul>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-01.svg" alt="Auto"></span>
                                            <p>Auto</p>
                                        </li>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-02.svg" alt="10 KM"></span>
                                            <p>10 KM</p>
                                        </li>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-03.svg" alt="Petrol"></span>
                                            <p>Petrol</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-04.svg" alt="Power"></span>
                                            <p>Power</p>
                                        </li>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg" alt="2018"></span>
                                            <p>2018</p>
                                        </li>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-06.svg" alt="Persons"></span>
                                            <p>5 Persons</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="listing-button">
                                    <a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="rental-car-item">
                        <div class="listing-item mb-0">
                            <div class="listing-img">
                                <a href="listing-details.html">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/car-02.jpg" class="img-fluid" alt="Toyota">
                                </a>
                            </div>
                            <div class="listing-content">
                                <div class="listing-features">
                                    <div class="fav-item-rental">
                                        <span class="featured-text">$400/day</span>
                                    </div>
                                    <div class="list-rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span>(5.0)</span>
                                    </div>
                                    <h3 class="listing-title">
                                        <a href="listing-details.html">Toyota Camry SE 350</a>
                                    </h3>
                                    <h6>Listed By : <span>Venis Darren</span></h6>
                                </div>
                                <div class="listing-details-group">
                                    <ul>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-01.svg" alt="Auto"></span>
                                            <p>Auto</p>
                                        </li>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-02.svg" alt="10 KM"></span>
                                            <p>10 KM</p>
                                        </li>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-03.svg" alt="Petrol"></span>
                                            <p>Petrol</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-04.svg" alt="Power"></span>
                                            <p>Power</p>
                                        </li>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg" alt="2018"></span>
                                            <p>2018</p>
                                        </li>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-06.svg" alt="Persons"></span>
                                            <p>5 Persons</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="listing-button">
                                    <a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="rental-car-item">
                        <div class="listing-item mb-0">
                            <div class="listing-img">
                                <a href="listing-details.html">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/car-03.jpg" class="img-fluid" alt="Toyota">
                                </a>
                            </div>
                            <div class="listing-content">
                                <div class="listing-features">
                                    <div class="fav-item-rental">
                                        <span class="featured-text">$400/day</span>
                                    </div>
                                    <div class="list-rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span>(5.0)</span>
                                    </div>
                                    <h3 class="listing-title">
                                        <a href="listing-details.html">Toyota Camry SE 350</a>
                                    </h3>
                                    <h6>Listed By : <span>Venis Darren</span></h6>
                                </div>
                                <div class="listing-details-group">
                                    <ul>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-01.svg" alt="Auto"></span>
                                            <p>Auto</p>
                                        </li>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-02.svg" alt="10 KM"></span>
                                            <p>10 KM</p>
                                        </li>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-03.svg" alt="Petrol"></span>
                                            <p>Petrol</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-04.svg" alt="Power"></span>
                                            <p>Power</p>
                                        </li>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-05.svg" alt="2018"></span>
                                            <p>2018</p>
                                        </li>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/car-parts-06.svg" alt="Persons"></span>
                                            <p>5 Persons</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="listing-button">
                                    <a href="listing-details.html" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="view-all text-center" data-aos="fade-down">
            <a href="listing-grid.html" class="btn btn-view d-inline-flex align-items-center">Go to all Cars <span><i class="feather-arrow-right ms-2"></i></span></a>
        </div>

    </div>
</section>



<section class="section facts-number">
    <div class="facts-left">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/facts-left.png" class="img-fluid" alt="facts left">
    </div>
    <div class="facts-right">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/facts-right.png" class="img-fluid" alt="facts right">
    </div>
    <div class="container">

        <div class="section-heading" data-aos="fade-down">
            <h2 class="title text-white">Facts By The Numbers</h2>
            <p class="description text-white">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>

        <div class="counter-group">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="count-group flex-fill">
                        <div class="customer-count d-flex align-items-center">
                            <div class="count-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/bx-heart.svg" alt>
                            </div>
                            <div class="count-content">
                                <h4><span class="counterUp">16</span>K+</h4>
                                <p>Happy Customers</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="count-group flex-fill">
                        <div class="customer-count d-flex align-items-center">
                            <div class="count-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/bx-car.svg" alt>
                            </div>
                            <div class="count-content">
                                <h4><span class="counterUp">2547</span>+</h4>
                                <p>Count of Cars</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="count-group flex-fill">
                        <div class="customer-count d-flex align-items-center">
                            <div class="count-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/bx-headphone.svg" alt>
                            </div>
                            <div class="count-content">
                                <h4><span class="counterUp">625</span>K+</h4>
                                <p>Car Center Solutions</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="count-group flex-fill">
                        <div class="customer-count d-flex align-items-center">
                            <div class="count-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/bx-history.svg" alt>
                            </div>
                            <div class="count-content">
                                <h4><span class="counterUp">200</span>K+</h4>
                                <p>Total Kilometer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="section services">
    <div class="service-right">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/service-right.svg" class="img-fluid" alt="services right">
    </div>
    <div class="container">

        <div class="section-heading" data-aos="fade-down">
            <h2>How It Works</h2>
            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>

        <div class="services-work">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                    <div class="services-group">
                        <div class="services-icon border-secondary">
                            <img class="icon-img bg-secondary" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/services-icon-01.svg" alt="Choose Locations">
                        </div>
                        <div class="services-content">
                            <h3>1. Choose Locations</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                    <div class="services-group">
                        <div class="services-icon border-warning">
                            <img class="icon-img bg-warning" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/services-icon-01.svg" alt="Choose Locations">
                        </div>
                        <div class="services-content">
                            <h3>2. Pick-Up Locations</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                    <div class="services-group">
                        <div class="services-icon border-dark">
                            <img class="icon-img bg-dark" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/services-icon-01.svg" alt="Choose Locations">
                        </div>
                        <div class="services-content">
                            <h3>3. Book your Car</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="section about-testimonial testimonials-section">
    <div class="container">

        <div class="section-heading" data-aos="fade-down">
            <h2 class="title text-white">What People say about us? </h2>
            <p class="description text-white">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>

        <div class="owl-carousel about-testimonials testimonial-group mb-0 owl-theme">

            <div class="testimonial-item d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="quotes-head"></div>
                        <div class="review-box">
                            <div class="review-profile">
                                <div class="review-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/avatar-02.jpg" class="img-fluid" alt="img">
                                </div>
                            </div>
                            <div class="review-details">
                                <h6>Rabien Ustoc</h6>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>


            <div class="testimonial-item d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="quotes-head"></div>
                        <div class="review-box">
                            <div class="review-profile">
                                <div class="review-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/avatar-03.jpg" class="img-fluid" alt="img">
                                </div>
                            </div>
                            <div class="review-details">
                                <h6>Valerie L. Ellis</h6>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>


            <div class="testimonial-item d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="quotes-head"></div>
                        <div class="review-box">
                            <div class="review-profile">
                                <div class="review-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/avatar-04.jpg" class="img-fluid" alt="img">
                                </div>
                            </div>
                            <div class="review-details">
                                <h6>Laverne Marier</h6>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>


            <div class="testimonial-item d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="quotes-head"></div>
                        <div class="review-box">
                            <div class="review-profile">
                                <div class="review-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/avatar-06.jpg" class="img-fluid" alt="img">
                                </div>
                            </div>
                            <div class="review-details">
                                <h6>Sydney Salmons</h6>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>


            <div class="testimonial-item d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="quotes-head"></div>
                        <div class="review-box">
                            <div class="review-profile">
                                <div class="review-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/avatar-07.jpg" class="img-fluid" alt="img">
                                </div>
                            </div>
                            <div class="review-details">
                                <h6>Lucas Moquin</h6>
                                <div class="list-rating">
                                    <div class="list-rating-star">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                    <p><span>(5.0)</span></p>
                                </div>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="section popular-car-type">
    <div class="container">

        <div class="section-heading" data-aos="fade-down">
            <h2>Most Popular Cartypes</h2>
            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>

        <div class="row">
            <div class="popular-slider-group">
                <div class="owl-carousel popular-cartype-slider owl-theme">

                    <div class="listing-owl-item">
                        <div class="listing-owl-group">
                            <div class="listing-owl-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/mp-vehicle-01.png" class="img-fluid" alt="Popular Cartypes">
                            </div>
                            <h6>Crossover</h6>
                            <p>35 Cars</p>
                        </div>
                    </div>


                    <div class="listing-owl-item">
                        <div class="listing-owl-group">
                            <div class="listing-owl-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/mp-vehicle-02.png" class="img-fluid" alt="Popular Cartypes">
                            </div>
                            <h6>Sports Coupe</h6>
                            <p>45 Cars</p>
                        </div>
                    </div>


                    <div class="listing-owl-item">
                        <div class="listing-owl-group">
                            <div class="listing-owl-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/mp-vehicle-03.png" class="img-fluid" alt="Popular Cartypes">
                            </div>
                            <h6>Sedan</h6>
                            <p>15 Cars</p>
                        </div>
                    </div>


                    <div class="listing-owl-item">
                        <div class="listing-owl-group">
                            <div class="listing-owl-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/mp-vehicle-04.png" class="img-fluid" alt="Popular Cartypes">
                            </div>
                            <h6>Pickup</h6>
                            <p>17 Cars</p>
                        </div>
                    </div>


                    <div class="listing-owl-item">
                        <div class="listing-owl-group">
                            <div class="listing-owl-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cars/mp-vehicle-05.png" class="img-fluid" alt="Popular Cartypes">
                            </div>
                            <h6>Family MPV</h6>
                            <p>24 Cars</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="view-all text-center" data-aos="fade-down">
            <a href="listing-grid.html" class="btn btn-view d-inline-flex align-items-center">View all Cars <span><i class="feather-arrow-right ms-2"></i></span></a>
        </div>

    </div>
</section>


<?php
get_footer();
?>