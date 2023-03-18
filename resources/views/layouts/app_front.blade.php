<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Prebrand</title>
    <link rel="shortcut icon" href="{{url('frontend/assets/images/logo/favicon.png" type="images/x-icon')}}" />
    <link rel="stylesheet" href="{{url('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/odometer.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/preloader.css')}}">
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
                                            <a href="{{ route('home') }}">{{ trans('message.home') }}</a>
                                        </li>

                                        <li>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" id="dropdownMenuButton"
                                                    data-mdb-toggle="dropdown" ria-expanded="false">
                                                    {{ trans('message.products') }}
                                                </a>
                                                <ul class="dropdown-menu dropdwon" aria-labelledby="dropdownMenuButton">
                                                    @foreach ($subproducts as $product)
                                                        <li>
                                                            <a class="dropdown-item" href="{{ route('show',[$product->slug]) }}">
                                                                {{ $product->title }} 
                                                                &raquo;
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-submenu">
                                                                @if($product->subproducts->count())
                                                                    @foreach($product->subproducts as $subproduct)
                                                                    <li>
                                                                        <a 
                                                                            class="dropdown-item" 
                                                                            href="{{ route('show',[$subproduct->slug]) }}">
                                                                            {{ $subproduct->title }}
                                                                        </a>
                                                                    </li>
                                                                    @endforeach
                                                                @endif
                                                            </ul>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>

                                        <li><a href="{{ route('service') }}">{{ trans('message.service') }}</a></li>
                                        <li><a href="{{ route('project') }}">{{ trans('message.project') }}</a></li>
                                        <li><a href="{{ route('about') }}">{{ trans('message.about') }}</a></li>
                                        <li><a href="{{ route('contact') }}">{{ trans('message.contact') }}</a></li>
                                        <li><a href="{{ route('faq') }}">{{ trans('message.faq') }}</a></li>
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
                                <select onchange="window.location.href = this.value;">
                                    @foreach(config('app.locales') as $lang)
                                        <option value="{{ str_replace('/'.app()->getLocale(), '/'.$lang, url()->current()) }}" @if(app()->getLocale() == $lang) selected @endif>{{ $lang }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

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
                        <h4 class="widget-title">{{ __('message.menu_link') }}</h4>
                        <ul>
                            <li><a href="{{ route('home') }}"><i class="fa fa-angle-right"></i> {{ trans('message.home') }}</a></li>
                            <li><a href="{{ route('service') }}"><i class="fa fa-angle-right"></i> {{ trans('message.service') }}</a></li>
                            <li><a href="{{ route('project') }}"><i class="fa fa-angle-right"></i> {{ trans('message.project') }}</a></li>
                            <li><a href="{{ route('about') }}"><i class="fa fa-angle-right"></i> {{ trans('message.about') }}</a></li>
                            <li><a href="{{ route('contact') }}"><i class="fa fa-angle-right"></i> {{ trans('message.contact') }}</a></li>
                            <li><a href="{{ route('faq') }}"><i class="fa fa-angle-right"></i> {{ trans('message.faq') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-5 mt-50 pl-70 pr-0">
                    <div class="footer-widget">
                        <h4 class="widget-title">{{ trans('message.contact_us') }}</h4>
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
                                <p>
                                    {{ trans('message.copyright') }} &copy; 2023
                                </p>
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
    <script src="{{url('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/jquery.meanmenu.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/counterup.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/lightcase.js')}}"></script>
    <script src="{{url('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/tilt.jquery.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/scrollwatch.js')}}"></script>
    <script src="{{url('frontend/assets/js/sticky-header.js')}}"></script>
    <script src="{{url('frontend/assets/js/waypoint.js')}}"></script>
    <script src="{{url('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/jquery.appear.js')}}"></script>
    <script src="{{url('frontend/assets/js/odometer.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/wow.min.js')}}"></script>
    <script src="{{url('frontend/assets/js/ajax-form.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{url('frontend/assets/js/main.js')}}"></script>
</body>

</html>
