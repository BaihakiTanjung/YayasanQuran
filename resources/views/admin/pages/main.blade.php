@extends('layouts.default')

@section('content')
<main id="main">

    {{-- About --}}
    @include('pages.about')

    {{-- <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline services-head text-center">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <!-- Start Left services -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href="#">
                                    <i class="fa fa-code"></i>
                                </a>
                                <h4>Expert Coder</h4>
                                <p>
                                    will have to make sure the prototype looks finished by inserting text or
                                    photo.make sure the prototype looks finished by.
                                </p>
                            </div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href="#">
                                    <i class="fa fa-camera-retro"></i>
                                </a>
                                <h4>Creative Designer</h4>
                                <p>
                                    will have to make sure the prototype looks finished by inserting text or
                                    photo.make sure the prototype looks finished by.
                                </p>
                            </div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- end col-md-4 -->
                    <div class=" about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href="#">
                                    <i class="fa fa-wordpress"></i>
                                </a>
                                <h4>Wordpress Developer</h4>
                                <p>
                                    will have to make sure the prototype looks finished by inserting text or
                                    photo.make sure the prototype looks finished by.
                                </p>
                            </div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- end col-md-4 -->
                    <div class=" about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href="#">
                                    <i class="fa fa-camera-retro"></i>
                                </a>
                                <h4>Social Marketer </h4>
                                <p>
                                    will have to make sure the prototype looks finished by inserting text or
                                    photo.make sure the prototype looks finished by.
                                </p>
                            </div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>
                <!-- End Left services -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- end col-md-4 -->
                    <div class=" about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href="#">
                                    <i class="fa fa-bar-chart"></i>
                                </a>
                                <h4>Seo Expart</h4>
                                <p>
                                    will have to make sure the prototype looks finished by inserting text or
                                    photo.make sure the prototype looks finished by.
                                </p>
                            </div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>
                <!-- End Left services -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- end col-md-4 -->
                    <div class=" about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href="#">
                                    <i class="fa fa-ticket"></i>
                                </a>
                                <h4>24/7 Support</h4>
                                <p>
                                    will have to make sure the prototype looks finished by inserting text or
                                    photo.make sure the prototype looks finished by.
                                </p>
                            </div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Services Section -->

    <!-- ======= Skills Section ======= -->
    <div class="our-skill-area fix hidden-sm">
        <div class="test-overly"></div>
        <div class="skill-bg area-padding-2">
            <div class="container">
                <!-- section-heading end -->
                <div class="row">
                    <!-- single-skill start -->
                    <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                        <div class="single-skill">
                            <div class="progress-circular">
                                <input type="text" class="knob" value="0" data-rel="95" data-linecap="round"
                                    data-width="175" data-bgcolor="#fff" data-fgcolor="#2ecc71" data-thickness=".20"
                                    data-readonly="true" disabled>
                                <h3 class="progress-h4">Web Design</h3>
                            </div>
                        </div>
                    </div>
                    <!-- single-skill end -->
                    <!-- single-skill start -->
                    <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                        <div class="single-skill">
                            <div class="progress-circular">
                                <input type="text" class="knob" value="0" data-rel="85" data-linecap="round"
                                    data-width="175" data-bgcolor="#fff" data-fgcolor="#2ecc71" data-thickness=".20"
                                    data-readonly="true" disabled>
                                <h3 class="progress-h4">Graphics Design</h3>
                            </div>
                        </div>
                    </div>
                    <!-- single-skill end -->
                    <!-- single-skill start -->
                    <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                        <div class="single-skill">
                            <div class="progress-circular">
                                <input type="text" class="knob" value="0" data-rel="75" data-linecap="round"
                                    data-width="175" data-bgcolor="#fff" data-fgcolor="#2ecc71" data-thickness=".20"
                                    data-readonly="true" disabled>
                                <h3 class="progress-h4">Php Developer</h3>
                            </div>
                        </div>
                    </div>
                    <!-- single-skill end -->
                    <!-- single-skill start -->
                    <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                        <div class="single-skill">
                            <div class="progress-circular">
                                <input type="text" class="knob" value="0" data-rel="65" data-linecap="round"
                                    data-width="175" data-bgcolor="#fff" data-fgcolor="#2ecc71" data-thickness=".20"
                                    data-readonly="true" disabled>
                                <h3 class="progress-h4">Java Script</h3>
                            </div>
                        </div>
                    </div>
                    <!-- single-skill end -->
                </div>
            </div>
        </div>
    </div><!-- End Skills Section -->

    <!-- ======= Team Section ======= -->
    <div id="team" class="our-team-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Our special Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single-team-member">
                        <div class="team-img">
                            <a href="#">
                                <img src="assets/img/team/1.jpg" alt="">
                            </a>
                            <div class="team-social-icon text-center">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>Jhon Mickel</h4>
                            <p>Seo</p>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single-team-member">
                        <div class="team-img">
                            <a href="#">
                                <img src="assets/img/team/2.jpg" alt="">
                            </a>
                            <div class="team-social-icon text-center">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>Andrew Arnold</h4>
                            <p>Web Developer</p>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single-team-member">
                        <div class="team-img">
                            <a href="#">
                                <img src="assets/img/team/3.jpg" alt="">
                            </a>
                            <div class="team-social-icon text-center">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>Lellien Linda</h4>
                            <p>Web Design</p>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single-team-member">
                        <div class="team-img">
                            <a href="#">
                                <img src="assets/img/team/4.jpg" alt="">
                            </a>
                            <div class="team-social-icon text-center">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>Jhon Powel</h4>
                            <p>Seo Expert</p>
                        </div>
                    </div>
                </div>
                <!-- End column -->
            </div>
        </div>
    </div><!-- End Team Section -->

    <!-- ======= Rviews Section ======= -->
    <div class="reviews-area hidden-xs">
        <div class="work-us">
            <div class="work-left-text">
                <a href="#">
                    <img src="assets/img/about/2.jpg" alt="">
                </a>
            </div>
            <div class="work-right-text text-center">
                <h2>working with us</h2>
                <h5>Web Design, Ready Home, Construction and Co-operate Outstanding Buildings.</h5>
                <a href="#contact" class="ready-btn scrollto">Contact us</a>
            </div>
        </div>
    </div><!-- End Rviews Section -->

    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="portfolio-area area-padding fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Our Portfolio</h2>
                    </div>
                </div>
            </div>
            <div class="row wesome-project-1 fix">
                <!-- Start Portfolio -page -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="awesome-menu ">
                        <ul class="project-menu">
                            <li>
                                <a href="#" class="active" data-filter="*">All</a>
                            </li>
                            <li>
                                <a href="#" data-filter=".development">Development</a>
                            </li>
                            <li>
                                <a href="#" data-filter=".design">Design</a>
                            </li>
                            <li>
                                <a href="#" data-filter=".photo">Photoshop</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row awesome-project-content">
                <!-- single-awesome-project start -->
                <div class="col-md-4 col-sm-4 col-xs-12 design development">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a href="#"><img src="assets/img/portfolio/1.jpg" alt="" /></a>
                            <div class="add-actions text-center">
                                <div class="project-dec">
                                    <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/1.jpg">
                                        <h4>Business City</h4>
                                        <span>Web Development</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="col-md-4 col-sm-4 col-xs-12 photo">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a href="#"><img src="assets/img/portfolio/2.jpg" alt="" /></a>
                            <div class="add-actions text-center">
                                <div class="project-dec">
                                    <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/2.jpg">
                                        <h4>Blue Sea</h4>
                                        <span>Photosho</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="col-md-4 col-sm-4 col-xs-12 design">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a href="#"><img src="assets/img/portfolio/3.jpg" alt="" /></a>
                            <div class="add-actions text-center">
                                <div class="project-dec">
                                    <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/3.jpg">
                                        <h4>Beautiful Nature</h4>
                                        <span>Web Design</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="col-md-4 col-sm-4 col-xs-12 photo development">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a href="#"><img src="assets/img/portfolio/4.jpg" alt="" /></a>
                            <div class="add-actions text-center">
                                <div class="project-dec">
                                    <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/4.jpg">
                                        <h4>Creative Team</h4>
                                        <span>Web design</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="col-md-4 col-sm-4 col-xs-12 development">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a href="#"><img src="assets/img/portfolio/5.jpg" alt="" /></a>
                            <div class="add-actions text-center text-center">
                                <div class="project-dec">
                                    <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/5.jpg">
                                        <h4>Beautiful Flower</h4>
                                        <span>Web Development</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="col-md-4 col-sm-4 col-xs-12 design photo">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a href="#"><img src="assets/img/portfolio/6.jpg" alt="" /></a>
                            <div class="add-actions text-center">
                                <div class="project-dec">
                                    <a class="venobox" data-gall="myGallery" href="assets/img/portfolio/6.jpg">
                                        <h4>Night Hill</h4>
                                        <span>Photoshop</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
            </div>
        </div>
    </div><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <div id="pricing" class="pricing-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Pricing Table</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="pri_table_list">
                        <h3>basic <br /> <span>$80 / month</span></h3>
                        <ol>
                            <li class="check">Online system</li>
                            <li class="check cross">Full access</li>
                            <li class="check">Free apps</li>
                            <li class="check">Multiple slider</li>
                            <li class="check cross">Free domin</li>
                            <li class="check cross">Support unlimited</li>
                            <li class="check">Payment online</li>
                            <li class="check cross">Cash back</li>
                        </ol>
                        <button>sign up now</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="pri_table_list active">
                        <span class="saleon">top sale</span>
                        <h3>standard <br /> <span>$110 / month</span></h3>
                        <ol>
                            <li class="check">Online system</li>
                            <li class="check">Full access</li>
                            <li class="check">Free apps</li>
                            <li class="check">Multiple slider</li>
                            <li class="check cross">Free domin</li>
                            <li class="check">Support unlimited</li>
                            <li class="check">Payment online</li>
                            <li class="check cross">Cash back</li>
                        </ol>
                        <button>sign up now</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="pri_table_list">
                        <h3>premium <br /> <span>$150 / month</span></h3>
                        <ol>
                            <li class="check">Online system</li>
                            <li class="check">Full access</li>
                            <li class="check">Free apps</li>
                            <li class="check">Multiple slider</li>
                            <li class="check">Free domin</li>
                            <li class="check">Support unlimited</li>
                            <li class="check">Payment online</li>
                            <li class="check">Cash back</li>
                        </ol>
                        <button>sign up now</button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Pricing Section --> --}}

    {{-- Qoutes --}}
    @include('pages.qoutes')

    {{-- Blog --}}
    @include('pages.blog')

    {{-- <!-- ======= Suscribe Section ======= -->
    <div class="suscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                    <div class="suscribe-text text-center">
                        <h3>Welcome to our eBusiness company</h3>
                        <a class="sus-btn" href="#">Get A quate</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Suscribe Section --> --}}

    {{-- Contanct --}}
    @include('pages.contact')

</main><!-- End #main -->
@endsection
