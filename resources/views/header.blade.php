<!DOCTYPE html>
<html lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Apps Center || PPNH</title>
    <!-- Meta -->
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">
    <link href="{{url('asset/css')}}" rel="stylesheet" type="text/css">
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{url('asset/bootstrap.min.css')}}">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{url('asset/styles.css')}}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script></head>

<body class="landing-page" data-new-gr-c-s-check-loaded="14.1022.0" data-gr-ext-installed="">

    <div class="page-wrapper">

        <!-- ******Header****** -->
        <header class="header text-center">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <span aria-hidden="true" class=""><img src="{{url('asset/header/nurulhuda_logo.png')}}" width="45" height="45"></span>
                        <span class="text-highlight">Nurul Huda </span><span class="text-bold">Center Apps</span>
                    </h1>
            </div><!--//container-->
        </div></header><!--//header-->

        <section class="cards-section text-center">
            <div class="container">
                <h2 class="title">Jagalah ilmu dengan menulis</h2>
                <div class="intro">
                    <p>“Karakter itu seperti pohon dan reputasi seperti bayangannya. Bayangan adalah apa yang kita pikirkan tentangnya, dan pohon adalah apa yang nyata.” — Abraham Lincoln</p>


                     @yield('navbar')

                     @yield('content')

                </div><!--//cards-->

            </div><!--//container-->
        </section><!--//cards-section-->
    </div><!--//page-wrapper-->

                    @yield('footer')
