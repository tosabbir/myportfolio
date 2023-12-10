
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sabbir Ahmed</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend')}}/assets/images.ico">
    <!-- CSS
    ============================================ -->
    <!-- font Awesome icon cdn  -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/all.css">

    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/slick.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/slick-theme.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/aos.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/feature.css">

    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/style.css">

    {{-- sweet alert cdn  --}}
    {{-- <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="sweetalert2.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




</head>

<body class="template-color-1 spybody relative" data-spy="scroll" data-target=".navbar-example2" data-offset="70">

    <!-- Start Header -->
    <header class="rn-header haeder-default black-logo-version header--fixed header--sticky">
        <div class="header-wrapper rn-popup-mobile-menu m--0 row align-items-center">
            <!-- Start Header Left -->
            <div class="col-lg-2 col-6">
                <div class="header-left">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{asset('uploads/mylogo-crop.png')}}" alt="logo" style="max-width: 50px; border-radius:50%">
                        </a>
                        <span class="subtitle">SABBIR</span>
                    </div>
                </div>
            </div>
            <!-- End Header Left -->
            <!-- Start Header Center -->
            <div class="col-lg-10 col-6">
                <div class="header-center">
                    <nav id="sideNav" class="mainmenu-nav navbar-example2 d-none d-xl-block onepagenav">
                        <!-- Start Mainmanu Nav -->
                        <ul class="primary-menu nav nav-pills">
                            <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                            <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link" href="#resume">Resume</a></li>
                            <li class="nav-item current"><a class="nav-link" href="#clients">Clients</a></li>
                            <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                            <li class="nav-item"><a class="nav-link" href="#blog">blog</a></li>
                        </ul>
                        <!-- End Mainmanu Nav -->
                    </nav>
                    <!-- Start Header Right  -->
                    <div class="header-right">
                        <a class="rn-btn nav-link" href="#contacts"><span>HIRE NOW</span></a>
                        <div class="hamberger-menu d-block d-xl-none">
                            <i id="menuBtn" class="feather-menu humberger-menu"></i>
                        </div>
                        <div class="close-menu d-block">
                            <span class="closeTrigger">
                            <i data-feather="x"></i>
                        </span>
                        </div>
                    </div>
                    <!-- End Header Right  -->

                </div>
            </div>
            <!-- End Header Center -->
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Popup Mobile Menu  -->
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="menu-top">
                <div class="menu-header">
                    <a class="logo" href="index.html">
                        <img src="{{asset('uploads/mylogo-crop.png')}}" alt="Personal Portfolio">
                    </a>
                    <div class="close-button">
                        <button class="close-menu-activation close"><i data-feather="x"></i></button>
                    </div>
                </div>
                <p class="discription">Inbio is a personal portfolio template. You can customize all.</p>
            </div>
            <div class="content">
                <ul class="primary-menu nav nav-pills onepagenav">
                    <li class="nav-item current"><a class="nav-link smoth-animation active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#resume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#clients">Clients</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#blog">blog</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#contacts">Contact</a></li>
                </ul>
                <!-- social sharea area -->
                <div class="social-share-style-1 mt--40">
                    <span class="title">find with me</span>
                    <ul class="social-share d-flex liststyle">
                        <li class="facebook"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg></a>
                        </li>
                        <li class="instagram"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg></a>
                        </li>
                        <li class="linkedin"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg></a>
                        </li>
                    </ul>
                </div>
                <!-- end -->
            </div>
        </div>
    </div>
    <!-- End Popup Mobile Menu  -->

    @yield('content')

    <!-- Start Footer Area -->
    <div class="rn-footer-area rn-section-gap section-separator">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-area text-center">

                        <div class="logo">
                            <a href="index.html">
                                <img src="{{asset('uploads/mylogo-crop.png')}}" alt="logo" style="max-width: 50px; border-radius:50%">
                            </a>
                        </div>

                        <p class="description mt--30">© 2022. All rights reserved by <a target="_blank" href="">Sabbir Ahmde</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- End Footer Area -->
    <!-- JS ============================================ -->
    <script src="{{asset('frontend')}}/assets/js/jquery.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/modernizer.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/feather.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/slick.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/text-type.js"></script>
    <script src="{{asset('frontend')}}/assets/js/wow.js"></script>
    <script src="{{asset('frontend')}}/assets/js/aos.js"></script>
    <script src="{{asset('frontend')}}/assets/js/jquery.goTop.js"></script>
    <script src="{{asset('frontend')}}/assets/js/jquery-one-page-nav.js"></script>
    <!-- main JS -->
    <script src="{{asset('frontend')}}/assets/js/main.js"></script>



    {{-- my cusotme js here  --}}

    <script>

        function clicks(){
            alert('sdfa');
        }

        document.addEventListener('DOMContentLoaded', function(){
            // sweet alert here
            @if (session('success'))

                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 2500
                });

            @endif

            // find contact from here
            document.getElementById('contactFrom').addEventListener('submit', function (event) {
                // prevent submit here
                if(!contactFromValidation()){
                    event.preventDefault();
                }
             })

            // find comment from here
            document.getElementById('commentFrom').addEventListener('submit', function (event) {
                // prevent submit here
                if(!commentFromValidation()){
                    event.preventDefault();
                }
             })
        })

        //contact from validation here
        function contactFromValidation(){

            let name = document.getElementById('name').value;
            let phone = document.getElementById('phone').value;
            let email = document.getElementById('email').value;
            let subject = document.getElementById('subject').value;
            let message = document.getElementById('message').value;
            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            let phoneRegex = /^\+?\d*$/;
            let numericRegex = /^[0-9]+$/;

        //   name
           if(name == ""){
            document.getElementById('name').focus();
            document.getElementById('nameError').textContent = 'Please Enter Your Name';
            return false

           }else if(numericRegex.test(name)){
            document.getElementById('name').focus();
            document.getElementById('nameError').textContent = 'Please Enter Valid Name';
            return false
          }else{
            document.getElementById('nameError').textContent = '';
          }

        //    phone
           if(phone == ""){
            document.getElementById('phone').focus();
            document.getElementById('phoneError').textContent = 'Please Enter Your Phone';
            return false;

           }else if (!phoneRegex.test(phone)) {
            document.getElementById('phone').focus();
            document.getElementById('phoneError').textContent = 'Please Enter Valid phone';
            return false;

           }else{
            document.getElementById('phoneError').textContent = '';
           }

        //    email
           if(email == ""){
            document.getElementById('email').focus();
            document.getElementById('emailError').textContent = 'Please Enter Your Email';
            return false;

           }else if (!emailRegex.test(email)) {
            document.getElementById('email').focus();
            document.getElementById('emailError').textContent = 'Please Enter Valid Email';
            return false;

           }else{
            document.getElementById('emailError').textContent = '';
           }

        //    subject
           if(subject == ""){
            document.getElementById('subject').focus();
            document.getElementById('subjectError').textContent = 'Please Enter Your subject';
            return false;

           }else if (numericRegex.test(subject)) {
            document.getElementById('subject').focus();
            document.getElementById('subjectError').textContent = 'Please Enter Valid subject';
            return false;

           }else{
            document.getElementById('subjectError').textContent = '';
           }

        //    message
           if(message == ""){
            document.getElementById('message').focus();
            document.getElementById('messageError').textContent = 'Please Enter Your message';
            return false;

           }else if (numericRegex.test(message)) {
            document.getElementById('message').focus();
            document.getElementById('messageError').textContent = 'Please Enter Valid message';
            return false;

           }else{
            document.getElementById('messageError').textContent = '';
           }

           return true;
        }

        //comment from validation here
        function commentFromValidation(){

            let name = document.getElementById('comment_name').value;
            let phone = document.getElementById('comment_phone').value;
            let email = document.getElementById('comment_email').value;
            let message = document.getElementById('comment_message').value;
            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            let phoneRegex = /^\+?\d*$/;
            let numericRegex = /^[0-9]+$/;

        //   name
           if(name == ""){
            document.getElementById('comment_name').focus();
            document.getElementById('comment_nameError').textContent = 'Please Enter Your Name';
            return false

           }else if(numericRegex.test(name)){
            document.getElementById('comment_name').focus();
            document.getElementById('comment_nameError').textContent = 'Please Enter Valid Name';
            return false
          }else{
            document.getElementById('comment_nameError').textContent = '';
          }

        //    phone
           if(phone == ""){
            document.getElementById('comment_phone').focus();
            document.getElementById('comment_phoneError').textContent = 'Please Enter Your Phone';
            return false;

           }else if (!phoneRegex.test(phone)) {
            document.getElementById('comment_phone').focus();
            document.getElementById('comment_phoneError').textContent = 'Please Enter Valid phone';
            return false;

           }else{
            document.getElementById('comment_phoneError').textContent = '';
           }

        //    email
           if(email == ""){
            document.getElementById('comment_email').focus();
            document.getElementById('comment_emailError').textContent = 'Please Enter Your Email';
            return false;

           }else if (!emailRegex.test(email)) {
            document.getElementById('comment_email').focus();
            document.getElementById('comment_emailError').textContent = 'Please Enter Valid Email';
            return false;

           }else{
            document.getElementById('comment_emailError').textContent = '';
           }

        //    message
           if(message == ""){
            document.getElementById('comment_message').focus();
            document.getElementById('comment_messageError').textContent = 'Please Enter Your message';
            return false;

           }else if (numericRegex.test(message)) {
            document.getElementById('comment_message').focus();
            document.getElementById('comment_messageError').textContent = 'Please Enter Valid message';
            return false;

           }else{
            document.getElementById('comment_messageError').textContent = '';
           }

           return true;
        }

        document.querySelectorAll('.contact_link').forEach(link => {
            link.addEventListener('click', function(event) {
            event.preventDefault();
            console.log('jhgjg');
            window.open(this.href, '_blank');
            });
        });

    </script>


</body>

</html>
