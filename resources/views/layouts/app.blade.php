<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <meta http-equiv = "X-UA-Compatible" content = "IE-Edge">
        
    <title>{{ config('app.name') }} - Make a difference, be the difference!</title>

    <meta name = "description" content = "Inspired to raise is a non-profit organisation committing and dedicating to make a difference by being the difference.">
        <meta name = "keywords" content= "inspiredtoraise, inspired to raise, inspired, to raise, inspire raise, make a difference, be the difference, inspiration, motivation, motivational quotes, leadership, entrepreneurship, success, moral values, technology, society, religion, christianity, influence">
        <meta name = "robots" content = "No-Index, No-Follow">
        <meta name = "author" content = "alphawonders">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147366647-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-147366647-1');
        </script>

        <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-C8PSD74L7E"></script><script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-C8PSD74L7E');
        </script>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" href="assets/icons/logo.png">
        <!-- <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"> -->
        <link rel = "stylesheet" href="assets/css/main.css">
        <link rel = "stylesheet" href="assets/css/responsive.css">
        <link href="assets/css/animate.css" rel="stylesheet">
        <link href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/fontawesome/fontawesome-5.1.0/css/all.css">
        <link rel="stylesheet" href="assets/fontawesome-4.7.0/css/font-awesome.min.css">
        <!-- web-fonts -->  
        <link href="https://fonts.googleapis.com/css?family=Poppins|Roboto&display=swap" rel="stylesheet"> 
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo'/'; ?>">
                    <img src="assets/icons/logo.png" width="100px" height="65px" alt="inspiredtoraise">
                </a>
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Inspired to Raise') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">                                              
                        <!-- <li class="nav-item">
                            <a class="nav-link" href=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""></a>
                        </li> -->
                           
                        <!-- Navbar links -->
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo '/'; ?>"> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo '#inspiration'; ?>"> Inspiration</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo '#leadership'; ?>"> Leadership</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo '#entrepreneurship'; ?>"> Entrepreneurship</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo '#success'; ?>"> Success</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo '#moral'; ?>"> Moral</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo '#technology'; ?>"> Technology</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo '#society'; ?>"> Society</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo '#religion'; ?>"> Religion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo '#quotes'; ?>"> Quotes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo 'blog'; ?>"> Blog</a> 
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo 'about-us'; ?>"> About Us</a>
                                </li>
                            </ul>
                            <!-- Invite us to your church, school, group, meeting, youth forum -->
                            <!-- <a class="btn btn-secondary" href="#">Invite</a>  -->
                        </div>
                               
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 insprd_wrapper">
            @yield('content')
        </main>
        <footer class="insprd-ft text-center">  
        <section class="insprd-ft-1">
            <div class="container-fluid" id="">
                <div class="row" id="ft-rw-1">
                    <div class="col-lg-4">
                        <h3>About us</h3>
                        <p>Inspired to raise is an organization that provides a platform for a new generation of different people who have decided to make a difference in their lives and society and who desires to also teach others to be different, to embrace being different and to make positive impact in the society</p>
                    </div>
                    <div class="col-lg-4">
                        <h3>Links</h3>
                        <ul>
                            <li><a href="">About</a></li>
                            <li><a href="">Contact us</a></li>
                            <li><a href="">Privacy policy</a></li>
                            <li><a href="">Content Attribution</a></li>
                          <!--   <li><a href="">Inspire Africa</a></li>
                          <li><a href="">Inspire the World</a></li> -->
                        </ul> 
                    </div>
                    <div class="col-lg-4">
                        <h3>Resources</h3>
                        <ul>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Newsletter</a></li>
                            <li><a href="">Infographics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="insprd-ft-2">
            <div class="container-fluid" id="">
            <div class="row">
                <div class="col-lg-4">
                    <p class="text-left"> Inspired to Raise Organization &copy<?php echo date('Y'); ?> </p>
                </div>
                <div class="col-lg-8">
                    <p class="text-right"> All rights reserved &trade;  </p>
                </div>
            </div>
        </div>
        </section>
    </footer>

    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            
        });
    </script>

    </div>
</body>
</html>
