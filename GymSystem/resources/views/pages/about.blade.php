@extends('layout')

@section('title') About @endsection

@section('content')
<!--About page , on navbar it called "About",contain blocks: Abous us, Gallery, Our team-->
    <!-- About us: class = container mt-5-->
    <div class="container mt-5 about_us">
        <div class="row">
            <div class="col-lg-6">
                <div class="about_us_image">
                    <img class="w-100" src="img/about_us_image_1.jpg" alt="gym system about us image">
                </div>
                <div class="text-center about_us_title">
                    <h2>About us</h2>
                </div>
                <div class="about_us_description">
                    <p>GymSystem one of the best fitness clubs in Moldova.You will train not only muscle mass but also your spiritual state.</p>
                </div>
            </div><!--/col-lg-6-->
            <div class="col-lg-6">
                <div class="about_us_privileges">
                    <div class="d-flex about_us_privilege_1">
                        <div>
                            <div class="mr-4 about_us_privilege_1_image">
                                <img src="img/privilege_image_1_mobile.png" alt="mobile phone image">
                            </div>
                        </div>
                        <div>
                            <div class="about_us_privilege_1_title">
                                <h4>We are in the mobile application</h4>
                            </div>
                            <div class="about_us_privilege_1_description">
                                <p>Now all the information about the club, the calendar of classes and account management in your mobile.</p>
                            </div>
                        </div>
                    </div><!--/d-flex about_us_privilege_1-->
                    <div class="d-flex about_us_privilege_2">
                        <div>
                            <div class="mr-4 about_us_privilege_2_image">
                                <img src="img/privilege_image_2_individual_approach.png" alt="individual approach">
                            </div>
                        </div>
                        <div>
                            <div class="about_us_privilege_2_title">
                                <h4>Individual approach</h4>
                            </div>
                            <div class="about_us_privilege_2_description">
                                <p>Selection of individual programs for weight loss, fat burning, muscle building. At the same time, the physical fitness of everyone is always taken into account.</p>
                            </div>
                        </div>
                    </div><!--/d-flex about_us_privilege_2-->
                    <div class="d-flex about_us_privilege_3">
                        <div>
                            <div class="mr-4 about_us_privilege_3_image">
                                <img src="img/privilege_image_3_location.png" alt="location image">
                            </div>
                        </div>
                        <div>
                            <div class="about_us_privilege_3_title">
                                <h4>Convenient location</h4>
                            </div>
                            <div class="about_us_privilege_3_description">
                                <p>You don't want to drive to the fitness club across town, do you? The location is in the center of Chisinau, so it is not difficult to reach us.</p>
                            </div>
                        </div>
                    </div><!--/d-flex about_us_privilege_3-->
                    <div class="d-flex about_us_privilege_4">
                        <div>
                            <div class="mr-4 about_us_privilege_4_image">
                                <img src="img/privilege_image_4_services.png" alt="services image">
                            </div>
                        </div>
                        <div>
                            <div class="about_us_privilege_4_title">
                                <h4>Wide range of services</h4>
                            </div>
                            <div class="about_us_privilege_4_description">
                                <p>All it takes for your body to be grateful. Massage services and SPA programs, Sauna, Solarium, Fitness bar.</p>
                            </div>
                        </div>
                    </div><!--/d-flex about_us_privilege_4-->
                </div> <!--/about_us_privileges-->
            </div><!--/col-lg-6-->
        </div><!--/row-->
    </div>
    <!--/About us: class = container mt-5-->
    <!--Gallery: class = container mt-5 gallery-->
    <div class="container mt-5 gallery">
        <div class="card-columns">
            <div class="card d-none d-sm-block"> 
                <img class="card-img-top" src="img/gallery_image_1.jpeg" alt="weight image">
            </div>
            <div class="card d-none d-sm-block"> 
                <img class="card-img-top" src="img/gallery_image_2.jpg" alt="fitness exercises"> 
            </div>
            <div class="card"> 
                <img class="card-img-top" src="img/gallery_image_3.jpg" alt="fitness equipment"> 
            </div>
            <div class="card"> 
                <img class="card-img-top" src="img/gallery_image_4.jpg" alt="group yoga"> 
            </div>
            <div class="card d-none d-sm-block"> 
                <img class="card-img-top" src="img/gallery_image_5.jpg" alt="stationary bike"> 
            </div>
            <div class="card d-none d-sm-block"> 
                <img class="card-img-top" src="img/gallery_image_6.jpg" alt="workout exercises"> 
            </div>
            <div class="card d-none d-sm-block"> 
                <img class="card-img-top" src="img/gallery_image_7.jpg" alt="relaxing massage"> 
            </div>
            <div class="card"> 
                <img class="card-img-top" src="img/gallery_image_8.jpg" alt="personal coach"> 
            </div>
            <div class="card d-none d-sm-block"> 
                <img class="card-img-top" src="img/gallery_image_9.jpg" alt="home gym"> 
            </div>
            <div class="card"> 
                <img class="card-img-top" src="img/gallery_image_10.jpg" alt="treadmills"> 
            </div>
        </div>
    </div>
    <!--/Gallery: class = container mt-5 gallery-->
    <!--Our team: class = container mt-5 our_team-->
    <div class="container mt-5 our_team">
        <h2 class="text-center">Our team</h2>
        <div class="row text-center mt-5">
            <div class="col-lg-4 col-md-4 col-sm-6 col-6 mt-3 trainer_list">
                <div class="trainer_list_info">
                    <div class="trainer_list_img">
                        <img class="img-fluid" src="img/personal_trainer_1.jpg" alt="Nick Mitchell">
                    </div>
                    <div class="mt-3 mb-3 trainer_list_description">
                        <p>Nick Mitchell</p>
                        <span>Personal trainer</span>
                    </div>
                </div>
            </div><!--col-lg-4 col-md-4 col-sm-6 col-6 mt-3 trainer_list-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-6 mt-3 trainer_list">
                <div class="trainer_list_info">
                    <div class="trainer_list_img">
                        <img class="img-fluid" src="img/personal_trainer_1.jpg" alt="Nick Mitchell">
                    </div>
                    <div class="mt-3 mb-3 trainer_list_description">
                        <p>Nick Mitchell</p>
                        <span>Personal trainer</span>
                    </div>
                </div>
            </div><!--col-lg-4 col-md-4 col-sm-6 col-6 mt-3 trainer_list-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-6 mt-3 trainer_list">
                <div class="trainer_list_info">
                    <div class="trainer_list_img">
                        <img class="img-fluid" src="img/personal_trainer_1.jpg" alt="Nick Mitchell">
                    </div>
                    <div class="mt-3 mb-3 trainer_list_description">
                        <p>Nick Mitchell</p>
                        <span>Personal trainer</span>
                    </div>
                </div>
            </div><!--col-lg-4 col-md-4 col-sm-6 col-6 mt-3 trainer_list-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-6 mt-3 trainer_list">
                <div class="trainer_list_info">
                    <div class="trainer_list_img">
                        <img class="img-fluid" src="img/personal_trainer_1.jpg" alt="Nick Mitchell">
                    </div>
                    <div class="mt-3 mb-3 trainer_list_description">
                        <p>Nick Mitchell</p>
                        <span>Personal trainer</span>
                    </div>
                </div>
            </div><!--col-lg-4 col-md-4 col-sm-6 col-6 mt-3 trainer_list-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-6 mt-3 trainer_list">
                <div class="trainer_list_info">
                    <div class="trainer_list_img">
                        <img class="img-fluid" src="img/personal_trainer_1.jpg" alt="Nick Mitchell">
                    </div>
                    <div class="mt-3 mb-3 trainer_list_description">
                        <p>Nick Mitchell</p>
                        <span>Personal trainer</span>
                    </div>
                </div>
            </div><!--col-lg-4 col-md-4 col-sm-6 col-6 mt-3 trainer_list-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-6 mt-3 trainer_list">
                <div class="trainer_list_info">
                    <div class="trainer_list_img">
                        <img class="img-fluid" src="img/personal_trainer_1.jpg" alt="Nick Mitchell">
                    </div>
                    <div class="mt-3 mb-3 trainer_list_description">
                        <p>Nick Mitchell</p>
                        <span>Personal trainer</span>
                    </div>
                </div>
            </div><!--col-lg-4 col-md-4 col-sm-6 col-6 mt-3 trainer_list-->
        </div><!--/row text-center mt5-->
    </div>
    <!--/Our team: class = container mt-5 our_team-->
@endsection