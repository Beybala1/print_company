<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    @yield('title')
    <meta name="description"
        content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-html-admin-template/">

    <!-- End Google Tag Manager -->
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/logo/serfeli.png')}}" type="images/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('links.datatable')
    {{-- Site package --}}

    <link rel="stylesheet" href="{{ url('backend/assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/fonts/flag-icons.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/css/rtl/theme-default.css/') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <script src="{{ url('backend/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ url('backend/assets/js/config.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <!-- Layout wrapper -->
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <div class="layout-wrapper layout-content-navbar ">
        <div class="layout-container">
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo ">
                    <a href="{{ route('dashboard') }}">
                        <img width="160" height="50"
                           src="{{asset('frontend/assets/images/logo/serfeli-cap.png')}}" alt="LOGO">
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <li class="menu-item {{ request()->routeIs(['dashboard']) ? 'menu active' : ''}}">
                        <a href="{{ route('dashboard') }}" class="menu-link">
                            <i class="bi bi-bar-chart-fill"></i>
                            <div data-i18n="İdarə paneli" class="mx-3">İdarə paneli</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="fa fa-home"></i>
                            <div style="margin-left:7px;" data-i18n="Şirkət məlumatları">Şirkət məlumatları</div>
                        </a>
                        <ul class="menu-sub">
                            <li
                                class="menu-item  {{ request()->routeIs(['about.index','about.create','about.edit']) ? 'menu active' : ''}}">
                                <a href="{{ route('about.index') }}" class="menu-link">
                                    <i class="bi bi-building-fill"></i>
                                    <div data-i18n="Haqqımızda" class="mx-3">Haqqımızda</div>
                                </a>
                            </li>
                            <li
                                class="menu-item {{ request()->routeIs(['contact.index','contact.create','contact.edit']) ? 'menu active' : ''}}">
                                <a href="{{ route('contact.index') }}" class="menu-link">
                                    <i class="bi bi-telephone-fill"></i>
                                    <div class="mx-3">Əlaqə məlumatları</div>
                                </a>
                            </li>
                            <li
                                class="menu-item {{ request()->routeIs(['social.index','social.edit']) ? 'menu active' : ''}}">
                                <a href="{{ route('social.index') }}" class="menu-link">
                                    <i class="bi bi-instagram"></i>
                                    <div class="mx-3">Sosial şəbəkə linkləri</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li
                        class="menu-item {{ request()->routeIs(['slider.index','slider.create','slider.edit']) ? 'menu active' : ''}}">
                        <a href="{{ route('slider.index') }}" class="menu-link">
                            <i class="fa fa-sliders"></i>
                            <div data-i18n="Slayder" class="mx-3">Slayder</div>
                        </a>
                    </li>
                    <li
                        class="menu-item {{ request()->routeIs(['service.index','service.create','service.edit']) ? 'menu active' : ''}}">
                        <a href="{{ route('service.index') }}" class="menu-link">
                            <i class="fa fa-wrench"></i>
                            <div data-i18n="Servis" class="mx-3">Servis</div>
                        </a>
                    </li>
                    <li
                        class="menu-item {{ request()->routeIs(['project.index','project.create','project.edit']) ? 'menu active' : ''}}">
                        <a href="{{ route('project.index') }}" class="menu-link">
                            <i class="bi bi-menu-button-wide-fill"></i>
                            <div data-i18n="Proyekt" class="mx-3">Proyekt</div>
                        </a>
                    </li>
                    <li
                        class="menu-item {{ request()->routeIs(['category.index','category.create','category.edit']) ? 'menu active' : ''}}">
                        <a href="{{ route('category.index') }}" class="menu-link">
                            <i class="fa fa-bars"></i>
                            <div data-i18n="Kategoriyalar" class="mx-3">Kategoriyalar</div>
                        </a>
                    </li>
                    <li
                        class="menu-item {{ request()->routeIs(['product.index','product.create','product.edit']) ? 'menu active' : ''}}">
                        <a href="{{ route('product.index') }}" class="menu-link">
                            <i class="bi bi-bag-fill"></i>
                            <div data-i18n="Məhsullar" class="mx-3">Məhsullar</div>
                        </a>
                    </li>
                  
                    <li
                        class="menu-item {{ request()->routeIs(['message.index','message.create','message.edit']) ? 'menu active' : ''}}">
                        <a href="{{ route('message.index') }}" class="menu-link">
                            <i class="bi bi-envelope-fill"></i>
                            <div data-i18n="Mesajlar" class="mx-3">Mesajlar</div>
                        </a>
                    </li>
                    <li
                        class="menu-item {{ request()->routeIs(['faq.index','faq.create','faq.edit']) ? 'menu active' : ''}}">
                        <a href="{{ route('faq.index') }}" class="menu-link">
                            <i class="fa fa-question-circle"></i>
                            <div data-i18n="FAQ" class="mx-3">FAQ</div>
                        </a>
                    </li>
                    <li
                        class="menu-item {{ request()->routeIs(['news.index','news.create','news.edit']) ? 'menu active' : ''}}">
                        <a href="{{ route('news.index') }}" class="menu-link">
                            <i class="fa fa-file-text"></i>
                            <div class="mx-3">Xəbərlər</div>
                        </a>
                    </li>
                    @role('admin')
                        <li
                            class="menu-item {{ request()->routeIs(['permission.index','permission.create','permission.show','permission.store','permission.storeRole']) ? 'menu active' : ''}}">
                            <a href="{{ route('permission.index') }}" class="menu-link">
                                <i class="fas fa-user-cog"></i>
                                <div class="mx-3">İstifadəçilər və icazələr</div>
                            </a>
                        </li>
                    @endrole
                    <!-- Dashboards -->
                </ul>
            </aside>
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none ">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Style Switcher -->
                            <li class="nav-item me-2 me-xl-0">
                                <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                                    <i class='bx bx-sm'></i>
                                </a>
                            </li>
                            <!--/ Style Switcher -->

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ url(auth()->user()->image) }}" alt="image"
                                            class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ url(auth()->user()->image) }}" alt="image"
                                                            class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('profile.index') }}">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">Profil</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Çıxış</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-search-wrapper search-input-wrapper  d-none">
                        <input type="text" class="form-control search-input container-xxl border-0"
                            placeholder="Search..." aria-label="Search...">
                        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                    </div>
                </nav>
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                        <!-- / Content -->
                        <!-- Footer -->
                        <footer class="content-footer footer bg-footer-theme">
                            <div
                                class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                                <div class="mb-2 mb-md-0">
                                    {{ trans('message.copyright') }} &copy; 2023
                                </div>
                            </div>
                        </footer>
                        <!-- / Footer -->

                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>
            <div class="layout-overlay layout-menu-toggle"></div>
            <div class="drag-target"></div>
        </div>

        <script src="{{url('backend/assets/js/script.js')}}"></script>
        <script src="{{url('backend/assets/vendor/libs/popper/popper.js')}}"></script>
        <script src="{{url('backend/assets/vendor/js/bootstrap.js')}}"></script>
        <script src="{{url('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
        <script src="{{url('backend/assets/vendor/libs/hammer/hammer.js')}}"></script>
        <script src="{{url('backend/assets/vendor/libs/i18n/i18n.js')}}"></script>
        <script src="{{url('backend/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
        <script src="{{url('backend/assets/vendor/js/menu.js')}}"></script>
        <script src="{{url('backend/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
        <script src="{{url('backend/assets/js/main.js')}}"></script>
        <script src="{{url('backend/assets/js/dashboards-analytics.js')}}"></script>
        <script src="{{url('backend/assets/js/pages-account-settings-account.js')}}"></script>
        <script src="{{url('backend/assets/vendor/libs/cleavejs/cleave.js')}}"></script>
        <script src="{{url('backend/assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
        <script src="{{url('backend/assets/vendor/libs/select2/select2.js')}}"></script>
        <script src="{{url('backend/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
        <script src="{{url('backend/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
        <script src="{{url('backend/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
</body>

</html>

<!-- beautif ignore:end -->
