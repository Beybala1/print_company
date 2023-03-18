<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Prebrand</title>
    <link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
</head>
<style>
    .dropdown-menu li {
        position: relative;
    }

    .dropdown-menu .dropdown-submenu {
        display: none;
        position: absolute;
        left: 100%;
        top: -7px;
    }

    .dropdown-menu .dropdown-submenu-left {
        right: 100%;
        left: auto;
    }

    .dropdown-menu>li:hover>.dropdown-submenu {
        display: block;
    }

    .dropdown-hover:hover>.dropdown-menu {
        display: inline-block;
    }

    .dropdown-hover>.dropdown-toggle:active {
        /*Without this, clicking will make it sticky*/
        pointer-events: none;
    }

</style>

<body id="header">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="P" class="letters-loading">
                        P
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="B" class="letters-loading">
                        B
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
    <header class="header">
        <div class="header__bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9 col-lg-12">
                        <div class="navarea">
                            <a href="{{ route('home') }}" class="site-logo">
                                <img src="{{url('frontend/assets/images/logo/logo.png')}}" alt="LOGO">
                            </a>
                            <div class="mainmenu">
                                <nav id="mobile-menu">
                                    
                                    <ul>
                                      
                                        <li class="menu_has_children">
                                            <a href="{{ route('home') }}">{{ __('home') }}</a>
                                        </li>

                                      
                                                <li>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" id="dropdownMenuButton"
                                                           data-mdb-toggle="dropdown" aria-expanded="false">
                                                            Mehsullar
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    Submenu &raquo;
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-submenu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">Submenu item 1</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">Submenu item 2</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                        
                                                <script>
                                                  var dropdownToggle = document.querySelector('.dropdown-toggle');
                                                  var dropdownMenu = document.querySelector('.dropdown-menu');
                                          
                                                  dropdownToggle.addEventListener('click', function() {
                                                      dropdownMenu.classList.toggle('show');
                                                  });
                                              </script>
                                        </body>
                                        </html>
                                        


                                        <li><a href="{{ route('service') }}">{{ __('service') }}</a></li>
                                        <li><a href="{{ route('project') }}">{{ __('project') }}</a></li>
                                        <li><a href="{{ route('about') }}">{{ __('about') }}</a></li>
                                        <li><a href="{{ route('contact') }}">{{ __('contact') }}</a></li>
                                        <li><a href="{{ route('faq') }}">{{ __('faq') }}</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 my-auto">
                        <div class="lang-quote">
                            <div class="language">
                                <i class="far fa-globe"></i>
                                <select>
                                    <option>AZ</option>
                                    <option>EN</option>
                                    <option>RU</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')
    <!-- hero end -->

    <!-- footer start -->
    <footer class="footer pt-120">
        <div class="container">
            <div class="row mt-none-50 justify-content-center">
                <div class="col-xl-2 col-lg-3 mt-50">
                    <a href="index.html" class="footer__logo">
                        <img src="{{url('frontend/assets/images/logo/logo-white.png')}}" alt="">
                    </a>
                </div>
                <div class="col-xl-2 col-lg-4 mt-50 pl-45 pr-0">
                    <div class="footer-widget">
                        <h4 class="widget-title">{{ __('our_service') }}</h4>
                        <ul>
                            <li><a href="service.html"><i class="fa fa-angle-right"></i> Business Card</a></li>
                            <li><a href="service.html"><i class="fa fa-angle-right"></i> Flyer Printing</a></li>
                            <li><a href="service.html"><i class="fa fa-angle-right"></i> Banner Printing</a></li>
                            <li><a href="service.html"><i class="fa fa-angle-right"></i> Mug Printing</a></li>
                            <li><a href="service.html"><i class="fa fa-angle-right"></i> Sticker Printing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-5 mt-50 pl-70 pr-0">
                    <div class="footer-widget">
                        <h4 class="widget-title">Recent News</h4>
                        <div class="recent-news mt-none-20">
                            <div class="recent-news__content mt-20">
                                <p class="recent-news__title">
                                    {{ __('email') }}:<a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                                    {{ __('phone') }}:<p> {{ $contact->phone_1 }}, {{ $contact->phone_2 }}</p>
                                    {{ __('place') }}:{{ $contact->place_1 }}<br>{{ $contact->place_2 }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1 col-lg-6 mt-50">
                    <div class="footer-widget">
                        <div class="newslater">
                            <h4 class="newslater__title">Subscribe to our
                                Newsletter</h4>
                            <div class="newslater__form">
                                <form action="https://wphix.com/template/pixen/pixen/index.html">
                                    <input type="email" name="email" id="email" placeholder="Enter Email">
                                    <button type="submit"><i class="far fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom mt-115">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 my-auto">
                        <div class="copyright-text">
                            <p>Copyright &copy; <a href="https://themeforest.net/user/theme_pure">Theme Pure.</a> All
                                Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="social__links">
                            <a href="#0"><i class="fab fa-facebook-f"></i></a>
                            <a href="#0"><i class="fab fa-twitter"></i></a>
                            <a href="#0"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <!--========= JS Here =========-->
    <script src="{{url('frontend/assets/js/jquery-2.2.4.min.js')}}"></script>

   
    <script src="{{url('frontend/assets/js/main.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

</body>

</html>
