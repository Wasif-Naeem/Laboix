<!DOCTYPE html>
<!-- language -->
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="layerdrops">
    <meta name="description" content="Laboix is beautifully designed laboratory & research HTML template. Which fits for laboratory test, science research, biology, medical research, science technology, chemistry, pharmaceuticals, pharmacy and all other type of science & technology research websites and businesses.">

    <!-- ======== Page title ============ -->
    <title>LABOIX || Laboratory & Research</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicons/apple-touch-icon.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/images/favicons/site.webmanifest')}}">

    <!-- fonts -->
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin>
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,900&display=swap')}}" rel="stylesheet">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/css/bootstrap.min.css')}}">
    <!--  bootstrap-select css plugins -->
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-select/bootstrap-select.min.css')}}">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="{{asset('assets/vendors/animate/animate.min.css')}}">
    <!--  fontawesome css plugins -->
    <link rel="stylesheet" href="{{asset('assets/vendors/fontawesome/css/all.min.css')}}">
    <!--  jquery-ui css plugins -->
    <link rel="stylesheet" href="{{asset('assets/vendors/jquery-ui/jquery-ui.css')}}">
    <!--  jarallax css plugins -->
    <link rel="stylesheet" href="{{asset('assets/vendors/jarallax/jarallax.css')}}">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="{{asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}">
    <!--  nouislider css plugins -->
    <link rel="stylesheet" href="{{asset('assets/vendors/nouislider/nouislider.min.css')}}">
    <!--  nouislider css plugins -->
    <link rel="stylesheet" href="{{asset('assets/vendors/nouislider/nouislider.pips.css')}}">
    <!--  nouislider css plugins -->
    <link rel="stylesheet" href="{{asset('assets/vendors/laboix-icons/style.css')}}">
    <!--  slider css plugins -->
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/css/owl.theme.default.min.css')}}">

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets/css/laboix.css')}}">
</head>

<body class="custom-cursor">

    <!-- Custom Cursor -->
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- Preloader Start-->
    <div class="preloader">
        <div class="preloader__image" style="background-image: url({{asset('assets/images/loader.png')}});"></div>
    </div>
    <!-- Preloader End-->

    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="container-fluid">
                <div class="topbar-one__inner">
                    <ul class="list-unstyled topbar-one__info">
                        <li class="topbar-one__info__item">
                            <i class="icon-pin topbar-one__info__icon"></i>
                            <span class="topbar-one__info__item__location">30 Commercial road fratton, australia</span>
                        </li>
                        <li class="topbar-one__info__item">
                            <i class="icon-email topbar-one__info__icon"></i>
                            <a class="topbar-one__info__item__email" href="mailto:needhelp@company.com">needhelp@company.com</a>
                        </li>
                    </ul><!-- /.list-unstyled topbar-one__info -->
                    <div class="topbar-one__right">
                        <p class="topbar-one__text">
                            <i class="icon-clock1 topbar-one__right__icon"></i>
                            <span>Mon - Mon 8:00 to 6:00 Thu - Closed</span>
                        </p><!-- /.topbar-one__text -->
                        <div class="topbar-one__social">
                            <a href="https://twitter.com"> <i class="fab fa-twitter" aria-hidden="true"></i> <span class="sr-only">Twitter</span> </a>
                            <a href="https://facebook.com"> <i class="fab fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">Facebook</span> </a>
                            <a href="https://pinterest.com"> <i class="fab fa-pinterest-p" aria-hidden="true"></i> <span class="sr-only">Pinterest</span></a>
                            <a href="https://instagram.com"> <i class="fab fa-instagram" aria-hidden="true"></i> <span class="sr-only">Instagram</span></a>
                        </div><!-- /.topbar-one__social -->
                    </div><!-- /.topbar-one__right -->
                </div><!-- /.topbar-one__inner -->
            </div><!-- /.container-fluid -->
        </div><!-- /.topbar-one -->

        <header class="main-header sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo logo-laboix">
                        <a href="index.html">
                            <img src="{{asset('assets/images/logo-dark.png')}}" alt="Laboix HTML" width="133">
                        </a>
                    </div><!-- /.main-header__logo -->

                    <nav class="main-header__nav main-menu d-print-none">
                        <ul class="main-menu__list">

                            <li class="dropdown megamenu">
                                <a href="/">Home</a>
                                
                            </li>



                            <li>
                                <a href="about.html">About</a>
                            </li>

                            
                           @if (Auth::id())
                               
                           
                            <li >
                                <a href="/childreports/{{Auth::user()->id}}">Reports</a>
                                </li>
                           @endif 
                            <li >
                                <a href="/appoinmenthos">Appoinment</a>
                                </li>
                                <li class="dropdown">
                                
                                 @if (Auth::id())
                        <a  class="text-success">Welcome,{{Auth::user()->name}}</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="">
                        <form action="{{route('logout')}}" method="POST"
    >
                            @csrf
                            <button class="laboix-btn main-header__btn">Logout</button>
                        </form>
                        </a>
                        </li>
                        </ul>
                        </li>


                        <li>
                   @else
                   
                   <a href="{{ route('register') }}">Login</a>
                   @endif
                   </li>

                   
                                
                            
                        </ul>
                    </nav><!-- /.main-header__nav -->
                    <div class="main-header__right d-print-none">
                        <div class="main-header__link">
                            <a href="/appoinmenthos" class="laboix-btn main-header__btn">Appoinment</a>
                        </div>
                        <div class="main-header__right__info">
                            <a href="index.html#" class="search-toggler main-header__right__info__item"> <i class="icon-search" aria-hidden="true"></i> <span class="sr-only">Search</span> </a>
                            
                        </div>

                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span><span></span><span></span>
                        </div><!-- /.mobile-nav__toggler -->

                        <a href="tel:+92-3800-8060" class="main-header__right__call">
                            <div class="main-header__right__icon">
                                <i class="icon-telephone-call-1"></i>
                            </div>
                            <div class="main-header__right__content">
                                <span class="main-header__right__content__text">Call to Anytime</span>
                                <h6 class="main-header__right__content__number">+92 3800 8060</h6>
                            </div>
                        </a>

                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
        </header><!-- /.main-header -->


        
        @yield('main')





         <footer class="main-footer main-footer--one d-print-none">
            <div class="main-footer__inner">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 col-xl-4">
                            <div class="footer-widget footer-widget--info">
                                <a href="" class="footer-widget__logo">
                                    <img src="{{asset('assets/images/logo-light.png')}}" width="130" alt="footer logo">
                                </a><!-- /.footer-widget__logo -->
                                <p class="footer-widget__text">There are many variations passages of <br> Lorem Ipsum available, but the majority have suffered alteration </p><!-- /.footer-widget__text -->
                                <form action="index.html#" data-url="MAILCHIMP_FORM_URL" class="footer-widget__newsletter mc-form">
                                    <input type="email" name="EMAIL" placeholder="Email">
                                    <button type="submit" class="laboix-btn laboix-btn--submite"><i class="icon-right-arrow"></i></button>
                                </form><!-- /.footer-widget__newsletter mc-form -->
                                <div class="mc-form__response"></div><!-- /.mc-form__response -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6 col-xl-2">
                            <div class="footer-widget footer-widget--link">
                                <h4 class="footer-widget__title">Links</h4>
                                <ul class="list-unstyled footer-widget__links">
                                    <li class="footer-widget__links__item"><a href="about.html">About Us</a></li>
                                    <li class="footer-widget__links__item"><a href="/appoinmenthos">Appoinment</a></li>
                                    <li class="footer-widget__links__item"><a href="blog-list.html">Latest News</a></li>
                                    <li class="footer-widget__links__item"><a href="services.html">Service</a></li>
                                    <li class="footer-widget__links__item"><a href="packages.html">Pricing Plan</a></li>
                                </ul><!-- /.list-unstyled footer-widget__links -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6 col-xl-3">
                            <div class="footer-widget footer-widget--about">
                                <h4 class="footer-widget__title">Contact</h4>
                                <ul class="list-unstyled footer-widget__info">
                                    <li class="footer-widget__info__item"> <span class="footer-widget__info__item__text">6391 Elgin St. Celina, Delaware New York. USA</span></li>
                                    <li class="footer-widget__info__item"> <i class="icon-telephone-call-1" aria-hidden="true"></i> <a href="tel:+8801775-338747">(303) 555-0105</a></li>
                                    <li class="footer-widget__info__item"> <i class="icon-email" aria-hidden="true"></i> <a href="mailto:michael.mitc@example.com">michael.mitc@example.com</a></li>
                                </ul><!-- /.list-unstyled -->
                                <div class="footer-widget__social">
                                    <a href="https://facebook.com"> <i class="fab fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">Facebook</span> </a>
                                    <a href="https://twitter.com"> <i class="fab fa-twitter" aria-hidden="true"></i> <span class="sr-only">Twitter</span> </a>
                                    <a href="https://pinterest.com"> <i class="fab fa-pinterest-p" aria-hidden="true"></i> <span class="sr-only">Pinterest</span></a>
                                    <a href="https://instagram.com"> <i class="fab fa-instagram" aria-hidden="true"></i> <span class="sr-only">Instagram</span></a>
                                </div><!-- /.footer-widget__social -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6 col-xl-3">
                            <div class="footer-widget footer-widget--time">
                                <h4 class="footer-widget__title">Opening hours</h4>
                                <ul class="list-unstyled footer-widget__time">
                                    <li class="footer-widget__time__item">
                                        <p class="footer-widget__day"> <i class="icon-clock1"></i> Saturday</p>
                                        <p>9am - 6pm</p>
                                    </li>
                                    <li class="footer-widget__time__item">
                                        <p class="footer-widget__day"> <i class="icon-clock1"></i> Sunday</p>
                                        <p>9am - 6pm</p>
                                    </li>
                                    <li class="footer-widget__time__item">
                                        <p class="footer-widget__day"> <i class="icon-clock1"></i> Monday</p>
                                        <p>9am - 6pm</p>
                                    </li>
                                    <li class="footer-widget__time__item">
                                        <p class="footer-widget__day"> <i class="icon-clock1"></i> Tuesday</p>
                                        <p>9am - 6pm</p>
                                    </li>
                                </ul><!-- /.list-unstyled footer-widget__links -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__middle -->

            <div class="main-footer__bottom">
                <div class="container">
                    <div class="main-footer__bottom__inner">
                        <p class="main-footer__copyright"> &copy; Copyright <span class="dynamic-year"></span> by laboix HTML template.</p>
                    </div><!-- /.main-footer__inner -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__bottom -->
            <div class="main-footer__shape">
                <img src="{{asset('assets/images/shapes/footer-shape-1-1.png')}}" alt>
            </div>
            <div class="main-footer__shape main-footer__shape--two">
                <img src="{{asset('assets/images/shapes/footer-shape-1-2.png')}}" alt>
            </div>

        </footer><!-- /.main-footer -->

    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{asset('assets/images/logo-light.png')}}" width="155" alt="labiox"></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@laboix.com">needhelp@laboix.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://twitter.com"> <i class="fab fa-twitter" aria-hidden="true"></i> <span class="sr-only">Twitter</span> </a>
                <a href="https://facebook.com"> <i class="fab fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">Facebook</span> </a>
                <a href="https://pinterest.com"> <i class="fab fa-pinterest-p" aria-hidden="true"></i> <span class="sr-only">Pinterest</span></a>
                <a href="https://instagram.com"> <i class="fab fa-instagram" aria-hidden="true"></i> <span class="sr-only">Instagram</span></a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="index.html#">
                <input type="text" id="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="laboix-btn laboix-btn--submite">
                    <span><i class="icon-search"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    


    <!--  ALl JS Plugins =====================
        ====================================== -->
    <!--  jquery-3.7.0 js plugins -->
    <script src="{{asset('assets/vendors/jquery/jquery-3.7.0.min.js')}}"></script>
    <!--  Bootstrap js plugins -->
    <script src="{{asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <!--  jarallax js plugins -->
    <script src="{{asset('assets/vendors/jarallax/jarallax.min.js')}}"></script>
    <!--  jquery-ui js plugins -->
    <script src="{{asset('assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
    <!--  jquery-ajaxchimp js plugins -->
    <script src="{{asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <!--  jquery-appear js plugins -->
    <script src="{{asset('assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <!-- jquery-circle-progress js plugins -->
    <script src="{{asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <!--  magnific-popup js plugins -->
    <script src="{{asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <!--  validate js plugins -->
    <script src="{{asset('assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <!--  nouislider js plugins -->
    <script src="{{asset('assets/vendors/nouislider/nouislider.min.js')}}"></script>
    <!--  wnumb js plugins -->
    <script src="{{asset('assets/vendors/wnumb/wNumb.min.js')}}"></script>
    <!--  owl-carousel js plugins -->
    <script src="{{asset('assets/vendors/owl-carousel/js/owl.carousel.min.js')}}"></script>
    <!--  Bootstrap js plugins -->
    <script src="{{asset('assets/vendors/wow/wow.js')}}"></script>
    <!--  wow js plugins -->
    <script src="{{asset('assets/vendors/imagesloaded/imagesloaded.min.js')}}"></script>
    <!--  isotope js plugins -->
    <script src="{{asset('assets/vendors/isotope/isotope.js')}}"></script>
    <!--  countdown js plugins -->
    <script src="{{asset('assets/vendors/countdown/countdown.min.js')}}"></script>
    <!--  Chart.js js plugins -->
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js')}}"></script>
    <!--  jquery-circleType js plugins -->
    <script src="{{asset('assets/vendors/jquery-circleType/jquery.circleType.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-lettering/jquery.lettering.min.js')}}"></script>
    <!-- template js -->
    <script src="{{asset('assets/js/laboix.js')}}"></script>
</body>

</html>