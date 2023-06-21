<!DOCTYPE html>
<html lang="en">
 <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<!-- Mirrored from slimhamdi.net/amira/demos/index-slideshow.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Aug 2021 19:01:03 GMT -->
<head>
   
    <meta charset="utf-8" />
    <title>Korea Bangla</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('public/front/img/favicon.png')}}">

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/front/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/front/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/front/css/magnific-popup.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/front/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/front/css/skins/orange.css')}}" />

    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/front/js/plugins/revolution/css/settings.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('public/front/js/plugins/revolution/css/layers.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('public/front/js/plugins/revolution/css/navigation.css')}}" />

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{asset('public/front/css/skins/blue.css')}}" />

    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="{{asset('public/front/css/skins/blueviolet.css')}}" />

    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="{{asset('public/front/css/skins/goldenrod.css')}}" />

    <link rel="alternate stylesheet" type="text/css" title="green" href="{{asset('public/front/css/skins/green.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="{{asset('public/front/css/skins/magenta.css')}}" />

    <link rel="alternate stylesheet" type="text/css" title="orange" href="{{asset('public/front/css/skins/orange.css')}}" />

    <link rel="alternate stylesheet" type="text/css" title="purple" href="{{asset('public/front/css/skins/purple.css')}}" />

    <link rel="alternate stylesheet" type="text/css" title="red" href="{{asset('public/front/css/skins/red.css')}}" />

    <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{asset('public/front/css/skins/yellow.css')}}" />

    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="{{asset('public/front/css/skins/yellowgreen.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('public/front/css/styleswitcher.css')}}" />

    <!-- Template JS Files -->
    <script src="{{asset('public/front/js/modernizr.js')}}"></script>

</head>
@php
$setting=DB::table('settings')->first();
@endphp
<body class="big-triangle">
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="logopreloader">
            <img src="{{asset('public/backend/setting/'.$setting->image) }}" height="50px;" width="150px;" alt="logo-black">
        </div>
        <div class="loader" id="loader"></div>
    </div>
    <!-- Preloader Ends -->
    <!-- Live Style Switcher Starts - demo only -->
    
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        <header class="header">
            <div class="header-inner">
                <!-- Navbar Starts -->
                <nav class="navbar">
                    <!-- Logo Starts -->
                    <div class="logo">
                        <a data-toggle="collapse" data-target=".navbar-collapse.show" class="navbar-brand" href="{{url('/')}}">
                            <!-- Logo White Starts -->
                            <img id="logo-light" class="logo-light" src="{{asset('public/backend/setting/'.$setting->image) }}" height="50px;" width="50px;" alt="logo-light" />
                            <!-- Logo White Ends -->
                            <!-- Logo Black Starts -->
                            <img id="logo-dark" class="logo-dark" src="{{asset('public/backend/setting/'.$setting->image) }}" height="50px;" width="50px;" alt="logo-dark" />
                            <!-- Logo Black Ends -->
                        </a>
                    </div>
                    <!-- Logo Ends -->
                    <!-- Toggle Icon for Mobile Starts -->
                    <button class="navbar-toggle navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span id="icon-toggler">
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                        </span>
                    </button>
                    <!-- Toggle Icon for Mobile Ends -->
                    <div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
                        <!-- Main Menu Starts -->
                        <ul class="nav navbar-nav" id="main-navigation">
                            <li class="active"><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="{{url('/about')}}"><i class="fa fa-user"></i> About Us</a></li>
                            <li><a href="{{url('/services')}}"><i class="fa fa-user"></i> Service</a></li>
                            <li>
                                <a href="{{route('company.profile')}}"><i class="fa fa-image"></i> Company Profile</a>
                                
                            </li>
                            <li class="dropdown">
                                <a href="{{route('blog')}}" ><i class="fa fa-edit"></i> Blog</a>
                                
                            </li>
                           
                            <li><a href="{{route('contact.us')}}"><i class="fa fa-envelope"></i> Contact</a></li>
                            <!-- Cart Icon Starts -->
                          
                            <!-- Cart Icon Starts -->
                            <!-- Search Icon Starts -->
                            
                            <!-- Search Icon Ends -->
                        </ul>
                        <!-- Main Menu Ends -->
                    </div>
                    <!-- Search Input Starts -->
                    <div class="site-search hidden-xs">
                        <div class="search-container">
                            <input id="search-input" type="text" placeholder="type your keyword and hit enter ...">
                            <span class="close">×</span>
                        </div>
                    </div>
                    <!-- Search Input Ends -->
                    <!-- Navigation Menu Ends -->
                </nav>
                <!-- Navbar Ends -->
            </div>
        </header>
        @yield('content')
        <footer class="footer top-logos">
            <!-- Footer Top Area Starts -->
            <div class="container top-footer">
                <div class="row">
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <h4>KBTC</h4>
                        <div class="menu">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/about')}}">About</a></li>
                                
                                <li><a href="{{route('company.profile')}}">Company Profile</a></li>
                                <li><a href="{{route('blog')}}">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <h4>Support</h4>
                        <div class="menu">
                            <ul>
                                <li><a href="{{route('contact.us')}}">Contact</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="terms-of-services.html">Terms of Services</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <h4>Contact US</h4>
                        <div class="menu">
                            <ul>
                                   <p style="color:white">
                                    <span><i class="fa fa-envelope-open"></i> {{$setting->email}}</span>
                                    </p>
                                     <p style="color:white">
                                    <span><i class="fa fa-envelope-open"></i> kbtcbd@hotmail.com</span>
                                    </p>
                                <li><span><i class="fa fa-phone"></i> {{$setting->phone}}</span></li>
                                <li><span><i class="fa fa-map-marker"></i> {{$setting->address}}</span></li>
                                <li><span><i class="fa fa-clock-o"></i> Sun-Thurs 10am &#x21FE; 05pm</span></li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-12 col-md-4">
                        <!-- Facts Starts -->
                        <div class="facts-footer">
                            <div>
                                <h5>77</h5>
                                <span>projects</span>
                            </div>
                            
                         
                           
                            <div>
                                <h5>77</h5>
                                <span>clients</span>
                            </div>
                        </div>
                        <!-- Facts Ends -->
                        <hr>
                        <!-- Social Media Links Starts -->
                        <div class="social-icons">
                            <ul class="social">
                                <li>
                                    <a class="twitter" href="{{$setting->twitter}}" target="_blank" title="twitter"></a>
                                </li>
                                <li>
                                    <a class="facebook" href="{{$setting->facebook}}" target="_blank" title="facebook"></a>
                                </li>
                                
                              
                              
                            </ul>
                        </div>
                        <!-- Social Media Links Ends -->
                    </div>
                    <!-- Footer Widget Ends -->
                </div>
                <!-- Footer Bottom Area Starts -->
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Copyright Text Starts -->
                            <p class="text-center">Copyright © 2021 KBTC All Rights Reserved | Created By  <a href="https://www.softkittechnology.com/" target="_blank">Softkittechnology</a></p>
                            <!-- Copyright Text Ends -->
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom Area Ends -->
            </div>
            <!-- Footer Top Area Ends -->

        </footer>
        <!-- Footer Section Ends -->
        <!-- Back To Top Starts -->
        <div id="back-top-wrapper">
            <p id="back-top">
                <a href="#top"><span></span></a>
            </p>
        </div>
        <!-- Back To Top Ends -->
    </div>
    <!-- Wrapper Ends -->

    <!-- Template JS Files -->
    <script src="{{asset('public/front/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('public/front/js/plugins/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('public/front/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/front/js/plugins/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('public/front/js/plugins/jquery.filterizr.js')}}"></script>
    <script src="{{asset('public/front/js/plugins/jquery.magnific-popup.min.js')}}"></script>

    <!-- Revolution Slider Main JS Files -->
    <script src="{{asset('public/front/js/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('public/front/js/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- Revolution Slider Extensions -->

    <script src="{{asset('public/front/js/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>

    <script src="{{asset('public/front/js/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>

    <script src="{{asset('public/front/js/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>

    <script src="{{asset('public/front/js/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>

    <script src="{{asset('public/front/js/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>

    <script src="{{asset('public/front/js/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>

    <script src="{{asset('public/front/js/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>

    <script src="{{asset('public/front/js/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>

    <script src="{{asset('public/front/js/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

    <!-- Live Style Switcher JS File - only demo -->
    <script src="{{asset('public/front/js/styleswitcher.js')}}"></script>

    <!-- Main JS Initialization File -->
    <script src="{{asset('public/front/js/custom.js')}}"></script>
    
</body>
</html>