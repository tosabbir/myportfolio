@extends('master')
@section('content')
    <main class="main-page-wrapper">

        <!-- Start Slider Area -->
        <div id="home" class="rn-slider-area">
            <div class="slide slider-style-1">
                <div class="container">
                    <div class="row row--30 align-items-center">
                        <div class="order-2 order-lg-1 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                            <div class="content">
                                <div class="inner">
                                    <span class="subtitle">Welcome to my world</span>
                                    <h1 class="title">Hi, I’m <span>Sabbir Ahmed</span><br>
                                        <span class="header-caption" id="page-top">
                                            <!-- type headline start-->
                                            <span class="cd-headline clip is-full-width">
                                                <span>a </span>
                                        <!-- ROTATING TEXT -->
                                        <span class="cd-words-wrapper">
                                                    <b class="is-visible">Web Designer.</b>
                                                    <b class="is-hidden">Web Developer.</b>
                                                    <b class="is-hidden">Programmer.</b>
                                                </span>
                                        </span>
                                        <!-- type headline end -->
                                        </span>
                                    </h1>

                                    <div>
                                        <p class="description">Student of computer science and engineering. Highly self-motivated and interested in learning something new. I started my journey by Full-Stack Web Development. I want to make myself as a software engineer</p>
                                    </div>

                                    <a class="rn-btn mt-5" href="{{route('download.cv')}}"><span>Download CV</span></a>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12">
                                        <div class="social-share-inner-left">
                                            <span class="title">find with me</span>
                                            <ul class="social-share d-flex liststyle">
                                                <li class="facebook"><a href="https://github.com/tosabbir" target="_blank"><i data-feather="github"></i></a>
                                                </li>
                                                <li class="instagram"><a href="https://www.facebook.com/touhidobaid.sabbir" target="_blank"><i data-feather="facebook" target="_blank"></i></a>
                                                </li>
                                                <li class="linkedin"><a href="https://www.linkedin.com/in/tauhid-obaid-sabbir-3967a9200" target="_blank"><i data-feather="linkedin"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
                                        <div class="skill-share-inner">
                                            <span class="title">Contact Now</span>
                                            <ul class="skill-share d-flex liststyle">
                                                <li><a href="tel:+1234567890" class="contact_link"><i class="fas fa-phone fs-2"></i></a></li>
                                                <li><a href="https://wa.me/1234567890" class="contact_link"><i class="fab fa-whatsapp fs-2"></i></a></li>
                                                <li> <a href="mailto:your.email@example.com" class="contact_link"><i class="fas fa-envelope fs-2"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order-1 order-lg-2 col-lg-5">
                            <div class="thumbnail">
                                <div class="inner">
                                    <img src="{{asset('uploads/about.png')}}" alt="Personal Portfolio Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->

        <!-- Start Service Area -->
        <div class="rn-service-area rn-section-gap section-separator" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-left" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true">
                            <span class="subtitle">Features</span>
                            <h2 class="title">What I Do</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt_md--10 mt_sm--10">

                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="globe"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">Web Design</a></h4>
                                    <p class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                    <a class="read-more-button" href="#"><i class="fa-solid fa-angles-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->

                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="settings"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">Web Developent</a></h4>
                                    <p class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                    <a class="read-more-button" href="#"><i class="fa-solid fa-angles-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->

                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="code"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">Programming</a></h4>
                                    <p class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                    <a class="read-more-button" href="#"><i class="fa-solid fa-angles-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->

                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="database"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">Backend Development</a></h4>
                                    <p class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout
                                    </p>
                                    <a class="read-more-button" href="#"><i class="fa-solid fa-angles-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->

                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="monitor"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">Frontend Development</a></h4>
                                    <p class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                    <a class="read-more-button" href="#"><i class="fa-solid fa-angles-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->

                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="settings"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">API Development</a></h4>
                                    <p class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                    <a class="read-more-button" href="#"><i class="fa-solid fa-angles-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->

                </div>
            </div>
        </div>
        <!-- End Service Area  -->

        <!-- Start Portfolio Area -->
        <div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Visit my portfolio and keep your feedback</span>
                            <h2 class="title">My Portfolio</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--10 mt_md--10 mt_sm--10">

                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('frontend')}}/assets/images/portfolio-01.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Development</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="fa-regular fa-heart"></i></a>
                                        600</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">The services provide for design <i class="fa-solid fa-location-arrow"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('frontend')}}/assets/images/portfolio-02.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Application</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="fa-regular fa-heart"></i></a>
                                        750</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">Mobile app landing design & app
                                            maintin <i class="fa-solid fa-location-arrow"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('frontend')}}/assets/images/portfolio-03.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Photoshop</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="fa-regular fa-heart"></i></a>
                                        630</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">Logo design creativity & Application
                                         <i class="fa-solid fa-location-arrow"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('frontend')}}/assets/images/portfolio-04.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Figma</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="fa-regular fa-heart"></i></a>
                                        360</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">Mobile app landing design &
                                            Servies <i class="fa-solid fa-location-arrow"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('frontend')}}/assets/images/portfolio-05.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Web Design</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="fa-regular fa-heart"></i></a>
                                        280</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">Design for tecnology & services <i class="fa-solid fa-location-arrow"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->

                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('frontend')}}/assets/images/portfolio-06.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Web Design</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="fa-regular fa-heart"></i></a>
                                        690</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">App for tecnology & services tecnology  <i class="fa-solid fa-location-arrow"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->
                </div>
            </div>
        </div>
        <!-- End portfolio Area -->


        <!-- Start Resume Area -->
        <div class="rn-resume-area rn-section-gap section-separator" id="resume">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">2+ Years of Experience</span>
                            <h2 class="title">My Resume</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--45">
                    <div class="col-lg-12">
                        <ul class="rn-nav-list nav nav-tabs" id="myTabs" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" id="education-tab" data-bs-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="true">education</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="professional-tab" data-bs-toggle="tab" href="#professional" role="tab" aria-controls="professional" aria-selected="false">professional
                                    Skills</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="experience-tab" data-bs-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">experience</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="interview-tab" data-bs-toggle="tab" href="#interview" role="tab" aria-controls="interview" aria-selected="false">interview</a>
                            </li>
                        </ul>

                        <!-- Start Tab Content Wrapper  -->
                        <div class="rn-nav-content tab-content" id="myTabContents">

                            <!-- Start Single Tab  -->
                            <div class="tab-pane show active fade single-tab-area" id="education" role="tabpanel" aria-labelledby="education-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">

                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2010 - Present</span>
                                                <h4 class="maintitle">Education Quality</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Secondary School Certificate</h4>
                                                                    <span>Horgoj Shaid Smrity High School (2015 - 2017)</span>
                                                                </div>
                                                                <br/>

                                                                <span style="color:pink;">Science </span>
                                                                <div class="date-of-time">
                                                                    <span style="color: yellow">4.50/5</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The education should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Diploma In Computer Science & Engineering</h4>
                                                                    <span>Faridpur Polytechnic Institute (2017 - 2021)</span>
                                                                </div>
                                                                <span style="color:pink;">Computer </span>
                                                                <div class="date-of-time">
                                                                    <span style="color: yellow">3.43/4</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The education should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">20021 - Present</span>
                                                <h4 class="maintitle">Training Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>PencilBox Traingin Institute</h4>
                                                                    <span>Programming In PHP - Laravel (2022 - 2023)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span style="color: yellow">Development</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The training should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Creative It Institute</h4>
                                                                    <span>Web Development In PHP - Laravel (2021 - 2022)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span style="color: yellow">Development</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The training should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade " id="professional" role="tabpanel" aria-labelledby="professional-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row row--40">

                                        <!-- Start Single Progressbar  -->
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <span class="subtitle">Features</span>
                                                    <h4 class="maintitle">Design Skill</h4>
                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">FIGMA</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 60%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">60%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">HTML</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 80%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">70%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">CSS</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">70%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Bootstrap</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 75%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">75%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Tailwind</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 65%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">65%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                        <!-- Start Single Progressbar  -->
                                        <div class="col-lg-6 col-md-6 col-12 mt_sm--60">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <span class="subtitle">Features</span>
                                                    <h4 class="maintitle">Development Skill</h4>
                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Java Script</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 55%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">55%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">PHP</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 60%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">60%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">Laravel</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 50%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">50%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">API</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 30%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">30%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                    <!-- Start Single Progress Charts -->
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6">AJAX</h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 65%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label">65%</span></div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Progress Charts -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2021 - Present</span>
                                                <h4 class="maintitle">Job Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>UY Systems Ltd.</h4>
                                                                    <span>Web Developer (2022 - 2023)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span style="color: yellow">Intern</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The Job should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4> BZM Graphics Ltd.</h4>
                                                                    <span>Junior Web Developer (2021 - 2022)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span style="color: yellow">Developer</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The Job should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">2021 - Present</span>
                                                <h4 class="maintitle">Training Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>PencilBox Traingin Institute</h4>
                                                                    <span>Programming In PHP - Laravel (2022 - 2023)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span style="color: yellow">Development</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The training should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Creative It Institute</h4>
                                                                    <span>Web Development In PHP - Laravel (2021 - 2022)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span style="color: yellow">Development</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The training should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade" id="interview" role="tabpanel" aria-labelledby="interview-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <span class="subtitle">2021 - Present</span>
                                                <h4 class="maintitle">Company Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>Pencil Box Training Institute</h4>
                                                                    <span>Web Development PHP - Laravel</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span style="color:yellow">Pass</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The interview should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>UY Systems Ltd.</h4>
                                                                    <span>Web Developer</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span style="color: yellow">Pass</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The interview should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <span class="subtitle">2022 - Present</span>
                                                <h4 class="maintitle">Job Experience</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4>UY Systems Ltd.</h4>
                                                                    <span>Web Developer (2022 - 2023)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span style="color: yellow">Intern</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The Job should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="700" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4> BZM Graphics Ltd.</h4>
                                                                    <span>Junior Web Developer (2021 - 2022)</span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span style="color: yellow">Developer</span>
                                                                </div>
                                                            </div>
                                                            <p class="description">The Job should be very
                                                                interactual. Ut tincidunt est ac dolor aliquam sodales.
                                                                Phasellus sed mauris hendrerit, laoreet sem in, lobortis
                                                                mauris hendrerit ante.</p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Resume Area -->


        <!-- Start Testimonia Area  -->
        <div class="rn-testimonial-area rn-section-gap section-separator" id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">What Clients Say</span>
                            <h2 class="title">Testimonial</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-activation testimonial-pb mb--30">

                            <!-- Start Single testiminail -->
                            <div class="testimonial mt--50 mt_md--40 mt_sm--40">
                                <div class="inner">
                                    <div class="card-info">
                                        <div class="card-thumbnail">
                                            <img src="{{asset('uploads/testimonial-majid-sir.png')}}" alt="Testimonial-image">
                                        </div>
                                        <div class="card-content">
                                            <span class="subtitle mt--10">Pencil Box Training Institute</span>
                                            <h3 class="title">Majidul Islam Majid</h3>
                                            <span class="designation">Full Stack Developer (Trainer)</span>
                                        </div>
                                    </div>
                                    <div class="card-description">
                                        <div class="title-area">
                                            <div class="title-info">
                                                <h3 class="title">Full Stack Developmet</h3>
                                                <span class="date">via home office - Mar 4, 2021 - Sec 30, 2021</span>
                                            </div>
                                            <div class="rating">
                                                <img src="{{asset('frontend')}}/assets/images/rating.png" alt="rating-image">
                                                <img src="{{asset('frontend')}}/assets/images/rating.png" alt="rating-image">
                                                <img src="{{asset('frontend')}}/assets/images/rating.png" alt="rating-image">
                                                <img src="{{asset('frontend')}}/assets/images/rating.png" alt="rating-image">
                                                <img src="{{asset('frontend')}}/assets/images/rating.png" alt="rating-image">
                                            </div>
                                        </div>
                                        <div class="seperator"></div>
                                        <p class="discription">
                                            Maecenas finibus nec sem ut imperdiet. Ut tincidunt est ac dolor aliquam
                                            sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris
                                            hendrerit ante. Ut tincidunt est ac dolor aliquam sodales phasellus smauris
                                            .
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!--End Single testiminail -->

                            <!-- Start Single testiminail -->
                            <div class="testimonial mt--50 mt_md--40 mt_sm--40">
                                <div class="inner">
                                    <div class="card-info">
                                        <div class="card-thumbnail">
                                            <img src="{{asset('uploads/testimonial-ujjol-sir.png')}}" alt="Testimonial-image">
                                        </div>
                                        <div class="card-content">
                                            <span class="subtitle mt--10">Creative Systems Ltd.</span>
                                            <h3 class="title">Saidul Islam Uzzal</h3>
                                            <span class="designation">CEO (Creative System Ltd.)</span>
                                        </div>
                                    </div>
                                    <div class="card-description">
                                        <div class="title-area">
                                            <div class="title-info">
                                                <h3 class="title">Backend Development With Laravel</h3>
                                                <span class="date">UY Systems Ltd. Office - Mar 1, 2022 - Dec 30, 2022</span>
                                            </div>
                                            <div class="rating">
                                                <img src="{{asset('frontend')}}/assets/images/rating.png" alt="rating-image">
                                                <img src="{{asset('frontend')}}/assets/images/rating.png" alt="rating-image">
                                                <img src="{{asset('frontend')}}/assets/images/rating.png" alt="rating-image">
                                                <img src="{{asset('frontend')}}/assets/images/rating.png" alt="rating-image">
                                                <img src="{{asset('frontend')}}/assets/images/rating.png" alt="rating-image">
                                            </div>
                                        </div>
                                        <div class="seperator"></div>
                                        <p class="discription">
                                            Important fact to nec sem ut imperdiet. Ut tincidunt est ac dolor aliquam
                                            sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris
                                            hendrerit ante. Ut tincidunt est ac dolor aliquam sodales phasellus smauris
                                            .
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single testiminail -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonia Area  -->


        <!-- Start Client Area -->
        <div class="rn-client-area rn-section-gap section-separator" id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <span class="subtitle">Popular Clients</span>
                            <h2 class="title">Awesome Clients</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--50 mt_md--40 mt_sm--40">
                    <div class="col-lg-4">
                        <div class="d-flex flex-wrap align-content-start h-100">
                            <div class="position-sticky clients-wrapper sticky-top rbt-sticky-top-adjust">
                                <ul class="nav tab-navigation-button flex-column nav-pills me-3" id="v-pills-tab" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-home-tab" data-bs-toggle="tab" href="#v-pills-Javascript" role="tab" aria-selected="true">Web Design</a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="tab" href="#v-pills-Design" role="tab" aria-selected="true">Backend Development</a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-wordpress-tab" data-bs-toggle="tab" href="#v-pills-Wordpress" role="tab" aria-selected="true">Frontend Development</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-settings-tabs" data-bs-toggle="tab" href="#v-pills-settings" role="tab" aria-selected="true">Full Stack Web Development</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-laravel-tabs" data-bs-toggle="tab" href="#v-pills-laravel" role="tab" aria-selected="true">API Development</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-python-tabs" data-bs-toggle="tab" href="#v-pills-python" role="tab" aria-selected="true">Programming</a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="tab-area">
                            <div class="d-flex align-items-start">
                                <div class="tab-content" id="v-pills-tabContent">

                                    <div class="tab-pane fade" id="v-pills-Javascript" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smiths Marth</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Add Dev</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Add Dev</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                        </div>
                                    </div>

                                    <div class="tab-pane fade show active" id="v-pills-Design" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smiths Marth</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Add Dev</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client4.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jone Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-Wordpress" role="tabpanel" aria-labelledby="v-pills-wordpress-tab">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smiths Marth</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Add Dev</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client4.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jone Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->


                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tabs">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smiths Marth</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Add Dev</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client4.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jone Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->


                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-laravel" role="tabpanel" aria-labelledby="v-pills-laravel-tabs">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smiths Marth</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Add Dev</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client4.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jone Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->


                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-python" role="tabpanel" aria-labelledby="v-pills-python-tabs">
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">John Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client2.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Smiths Marth</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client3.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Add Dev</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->

                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="{{asset('frontend')}}/assets/images/client4.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#">Jone Due</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End client section -->

        <!-- Pricing Area -->
        <div class="rn-pricing-area rn-section-gap section-separator" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xl-5 mb_md--40 mb_sm--40 small-margin-pricing">
                        <div class="d-block d-lg-flex text-center d-lg-left section-flex flex-wrap align-content-start h-100">
                            <div class="position-sticky sticky-top rbt-sticky-top-adjust">
                                <div class="section-title text-left">
                                    <span class="subtitle text-center text-lg-left">Pricing</span>
                                    <h2 class="title text-center text-lg-left">My Pricing</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-xl-7">
                        <!-- Pricing Area -->
                        <div class="navigation-wrapper">
                            <ul class="nav " id="myTab" role="tablist">
                                <li class="nav-item ">
                                    <a class="nav-style" id="test-tab" data-bs-toggle="tab" href="#test" role="tab" aria-controls="test" aria-selected="false">Static</a>
                                </li>

                                <li class="nav-item  recommended">
                                    <a class="nav-style active" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Standard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-style" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Premium</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade " id="test" role="tabpanel" aria-labelledby="test-tab">
                                    <!-- Pricing Start -->
                                    <div class="rn-pricing">
                                        <div class="pricing-header">
                                            <div class="header-left">
                                                <h2 class="title">Make Your Single Page</h2>
                                                <span>Elementor</span>
                                            </div>
                                            <div class="header-right">
                                                <span>$30.00</span>
                                            </div>
                                        </div>
                                        <div class="pricing-body">
                                            <p class="description">
                                                All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                                chunks as necessary
                                            </p>
                                            <div class="check-wrapper">
                                                <div class="left-area">
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>1 Page with Elementor</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design Customization</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Responsive Design</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Content Upload</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design Customization</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>2 Plugins/Extensions</p>
                                                    </div>
                                                </div>
                                                <div class="right-area">
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>multipage Elementor</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design Figma</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>MAintaine Design</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Content Upload</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design With XD</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>8 Plugins/Extensions</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a href="#" class="rn-btn d-block">
                                                <span>ORDER NOW</span>
                                                <i data-feather="arrow-right"></i>
                                            </a>
                                            <div class="time-line">
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="clock"></i>
                                                    <span>2 Days Delivery</span>
                                                </div>
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="activity"></i>
                                                    <span>Unlimited Revission</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
                                </div>

                                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <!-- Pricing Start -->
                                    <div class="rn-pricing">
                                        <div class="pricing-header">
                                            <div class="header-left">
                                                <h2 class="title">Design Make this Page</h2>
                                                <span>Elementor</span>
                                            </div>
                                            <div class="header-right">
                                                <span>$50.00</span>
                                            </div>
                                        </div>
                                        <div class="pricing-body">
                                            <p class="description">
                                                Making this the first true generator on the Internet. It uses a
                                                dictionary & plugin Development.
                                            </p>
                                            <div class="check-wrapper">
                                                <div class="left-area">
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>1 Page with Elementor</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design Customization</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Responsive Design</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Content Upload</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design Customization</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>2 Plugins/Extensions</p>
                                                    </div>
                                                </div>
                                                <div class="right-area">
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>multipage Elementor</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design Figma</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>MAintaine Design</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Content Upload</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design With XD</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>8 Plugins/Extensions</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a href="#" class="rn-btn d-block">
                                                <span>ORDER NOW</span>
                                                <i data-feather="arrow-right"></i>
                                            </a>
                                            <div class="time-line d-flex">
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="clock"></i>
                                                    <span>2 Days Delivery</span>
                                                </div>
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="activity"></i>
                                                    <span>Unlimited Revission</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
                                </div>

                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <!-- Pricing Start -->
                                    <div class="rn-pricing">
                                        <div class="pricing-header">
                                            <div class="header-left">
                                                <h2 class="title">Customize Your Single Page</h2>
                                                <span>Elementor</span>
                                            </div>
                                            <div class="header-right">
                                                <span>$90.00</span>
                                            </div>
                                        </div>
                                        <div class="pricing-body">
                                            <p class="description">
                                                I will install your desire theme and made like Theme demo and customize
                                                your single page( homepage)
                                            </p>
                                            <div class="check-wrapper">
                                                <div class="left-area">
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>1 Page with Elementor</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design Customization</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Responsive Design</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Content Upload</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design Customization</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>2 Plugins/Extensions</p>
                                                    </div>
                                                </div>
                                                <div class="right-area">
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>multipage Elementor</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design Figma</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>MAintaine Design</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Content Upload</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>Design With XD</p>
                                                    </div>
                                                    <div class="check d-flex">
                                                        <i data-feather="check"></i>
                                                        <p>8 Plugins/Extensions</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <a href="#" class="rn-btn d-block">
                                                <span>ORDER NOW</span>
                                                <i data-feather="arrow-right"></i>
                                            </a>
                                            <div class="time-line d-flex">
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="clock"></i>
                                                    <span>2 Days Delivery</span>
                                                </div>
                                                <div class="single-cmt d-flex">
                                                    <i data-feather="activity"></i>
                                                    <span>Unlimited Revission</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- pricing area -->


        <!-- Start News Area -->
        <div class="rn-blog-area rn-section-gap section-separator" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="section-title text-center">
                            <span class="subtitle">Visit my blog and keep your feedback</span>
                            <h2 class="title">My Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt--30 mt_md--10 mt_sm--10">

                    <!-- Start Single blog -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-bs-toggle="modal" data-bs-target="#exampleModalCenters">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('frontend')}}/assets/images/blog-01.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Canada</a>
                                        </div>
                                        <div class="meta">
                                            <span><i class="fa-regular fa-clock"></i> 2 min read</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">T-shirt design is the part of design
                                            <i class="fa-solid fa-location-arrow"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single blog -->

                    <!-- Start Single blog -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="150" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-bs-toggle="modal" data-bs-target="#exampleModalCenters">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('frontend')}}/assets/images/blog-02.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Development</a>
                                        </div>
                                        <div class="meta">
                                            <span><i class="fa-regular fa-clock"></i> 2 hour read</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">The services provide for design <i class="fa-solid fa-location-arrow"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single blog -->

                    <!-- Start Single blog -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" data-aos-once="true" class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 mt--30">
                        <div class="rn-blog" data-bs-toggle="modal" data-bs-target="#exampleModalCenters">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('frontend')}}/assets/images/blog-03.jpg" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">Application</a>
                                        </div>
                                        <div class="meta">
                                            <span><i class="fa-regular fa-clock"></i> 5 min read</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="javascript:void(0)">Mobile app landing design & app
                                            maintain<i class="fa-solid fa-location-arrow"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single blog -->

                </div>
            </div>
        </div>
        <!-- ENd Mews Area -->


        <!-- Start Contact section -->
        <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Contact</span>
                            <h2 class="title">Contact With Me</h2>
                        </div>
                    </div>
                </div>

                <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                    <div class="col-lg-5">
                        <div class="contact-about-area">
                            <div class="thumbnail">
                                <img src="{{asset('frontend')}}/assets/images/contact1.png" alt="contact-img">
                            </div>
                            <div class="title-area">
                                <h4 class="title">Sabbir Ahmed</h4>
                                <span>Web Developer</span>
                            </div>
                            <div class="description">
                                <p>I am available for freelance work. Connect with me via and call in to my account.
                                </p>
                                <span class="phone">Phone: <a href="">+8801718022214</a></span>
                                <span class="mail">Email: <a href="">tosabbir313@gmail.com</a></span>
                            </div>
                            <div class="social-area">
                                <div class="name">FIND WITH ME</div>
                                <div class="social-icone">
                                    <ul class="social-share d-flex liststyle">
                                        <li class="facebook"><a href="https://github.com/tosabbir" target="_blank"><i data-feather="github"></i></a>
                                        </li>
                                        <li class="instagram"><a href="https://www.facebook.com/touhidobaid.sabbir" target="_blank"><i data-feather="facebook" target="_blank"></i></a>
                                        </li>
                                        <li class="linkedin"><a href="https://www.linkedin.com/in/tauhid-obaid-sabbir-3967a9200" target="_blank"><i data-feather="linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos-delay="600" class="col-lg-7 contact-input">
                        <div class="contact-form-wrapper">



                            <div class="introduce">

                                <form class="rnt-contact-form rwt-dynamic-form row" id="contactFrom"  action="{{route('store.message')}}" method="POST">
                                    @csrf

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Your Name</label>
                                            <input class="form-control form-control-lg" name="name" id="name" type="text" value="{{ old('name') }}">
                                            <span class="text-danger" id="nameError"></span>
                                            @error('name')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input class="form-control" name="phone" id="phone" type="text" value="{{ old('phone') }}">

                                            <span class="text-danger" id="phoneError"></span>
                                            @error('phone')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control form-control-sm" id="email" name="email" type="email" value="{{ old('email') }}">
                                            <span class="text-danger" id="emailError"></span>
                                             @error('email')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">subject</label>
                                            <input class="form-control form-control-sm" id="subject" name="subject" type="text" value="{{ old('subject') }}">

                                            <span class="text-danger" id="subjectError"></span>
                                            @error('subject')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="message">Your Message</label>
                                            <textarea name="message" id="message" cols="30" rows="10">{{old('message')}}</textarea>

                                            <span class="text-danger" id="messageError"></span>
                                            @error('message')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" id="submit" class="rn-btn">
                                            <span>SEND MESSAGE</span>
                                            <i data-feather="arrow-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contuct section -->


        <!-- Modal Portfolio Body area Start -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">


                                        {{-- portfolio slider  --}}
                                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                              <div class="carousel-item active">
                                                <img src="{{asset('frontend')}}/assets/images/portfolio-04.jpg" class="d-block w-100" alt="sabbir portfolio image">
                                              </div>
                                              <div class="carousel-item">
                                                <img src="{{asset('frontend')}}/assets/images/portfolio-04.jpg" class="d-block w-100" alt="sabbir portfolio image">
                                              </div>
                                              <div class="carousel-item">
                                                <img src="{{asset('frontend')}}/assets/images/portfolio-04.jpg" class="d-block w-100" alt="sabbir portfolio image">
                                              </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Next</span>
                                            </button>
                                          </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3>
                                        <span>Featured - Design</span> App Design Development.
                                    </h3>
                                    <p class="mb--30">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate distinctio assumenda explicabo veniam temporibus eligendi.</p>
                                    <p>Consectetur adipisicing elit. Cupiditate distinctio assumenda. dolorum alias suscipit rerum maiores aliquam earum odit, nihil culpa quas iusto hic minus!</p>
                                    <div class="button-group mt--20">
                                        <a href="#" class="rn-btn thumbs-icon">
                                            <span>LIKE THIS</span>
                                            <i data-feather="thumbs-up"></i>
                                        </a>
                                        <a href="#" class="rn-btn">
                                            <span>VIEW PROJECT</span>
                                            <i data-feather="chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- End of .text-content -->
                            </div>
                            <!-- Comment Section Area Start -->
                           <div class="comment-inner">
                               <h3 class="title mb--40 mt--50">Leave a Reply</h3>

                                   @include('includes.comment_form')

                           </div>
                           <!-- Comment Section End -->
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Portfolio area -->


        <!-- Modal Blog Body area Start -->
        <div class="modal fade" id="exampleModalCenters" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-news" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>

                    <!-- End of .modal-header -->

                    <div class="modal-body">
                        <img src="{{asset('frontend')}}/assets/images/blog-big-01.jpg" alt="news modal" class="img-fluid modal-feat-img">
                        <div class="news-details">
                            <span class="date">2 May, 2021</span>
                            <h2 class="title">Digital Marketo to Their New Office.</h2>
                            <p>Nobis eleifend option congue nihil imperdiet doming id quod mazim placerat
                                facer
                                possim assum.
                                Typi non
                                habent claritatem insitam; est usus legentis in iis qui facit eorum
                                claritatem.
                                Investigationes
                                demonstraverunt
                                lectores legere me lius quod ii legunt saepius. Claritas est etiam processus
                                dynamicus, qui
                                sequitur
                                mutationem consuetudium lectorum.</p>
                            <h4>Nobis eleifend option conguenes.</h4>
                            <p>Mauris tempor, orci id pellentesque convallis, massa mi congue eros, sed
                                posuere
                                massa nunc quis
                                dui.
                                Integer ornare varius mi, in vehicula orci scelerisque sed. Fusce a massa
                                nisi.
                                Curabitur sit
                                amet
                                suscipit nisl. Sed eget nisl laoreet, suscipit enim nec, viverra eros. Nunc
                                imperdiet risus
                                leo,
                                in rutrum erat dignissim id.</p>
                            <p>Ut rhoncus vestibulum facilisis. Duis et lorem vitae ligula cursus venenatis.
                                Class aptent
                                taciti sociosqu
                                ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc vitae
                                nisi
                                tortor. Morbi
                                leo
                                nulla, posuere vel lectus a, egestas posuere lacus. Fusce eleifend hendrerit
                                bibendum. Morbi
                                nec
                                efficitur ex.</p>
                            <h4>Mauris tempor, orci id pellentesque.</h4>
                            <p>Nulla non ligula vel nisi blandit egestas vel eget leo. Praesent fringilla
                                dapibus dignissim.
                                Pellentesque
                                quis quam enim. Vestibulum ultrices, leo id suscipit efficitur, odio lorem
                                rhoncus dolor, a
                                facilisis
                                neque mi ut ex. Quisque tempor urna a nisi pretium, a pretium massa
                                tristique.
                                Nullam in
                                aliquam
                                diam. Maecenas at nibh gravida, ornare eros non, commodo ligula. Sed
                                efficitur
                                sollicitudin
                                auctor.
                                Quisque nec imperdiet purus, in ornare odio. Quisque odio felis, vestibulum
                                et.</p>
                        </div>

                        <!-- Comment Section Area Start -->
                        <div class="comment-inner">
                            <h3 class="title mb--40 mt--50">Leave a Reply</h3>

                                @include('includes.comment_form')

                        </div>
                        <!-- Comment Section End -->
                    </div>
                    <!-- End of .modal-body -->
                </div>
            </div>
        </div>
        <!-- End Modal Blog area -->
        <!-- Back to  top Start -->
        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
        <!-- Back to top end -->

    </main>
@endsection

