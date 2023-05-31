<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="backend/assets/" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Daxil ol</title>
    <meta name="csrf-token" value="{{ csrf_token() }}"/>
    <link rel="icon" type="image/x-icon"
        href="{{ asset('frontend\assets\images\logo\serfeli.png' )}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="backend/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="backend/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="backend/assets/vendor/fonts/flag-icons.css" />
    <link rel="stylesheet" href="backend/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="backend/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="backend/assets/css/demo.css" />
    <link rel="stylesheet" href="backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="backend/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="backend/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
    <link rel="stylesheet" href="backend/assets/vendor/css/pages/page-auth.css">
    <script src="backend/assets/vendor/js/helpers.js"></script>
    <script src="backend/assets/vendor/js/template-customizer.js"></script>
    <script src="backend/assets/js/config.js"></script>
</head>
<body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="index-2.html" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    <img style="object-fit: cover;" width="250" src="{{ asset('frontend\assets\images\logo\serfeli-cap.png' )}}" alt="Sərfəli Çap">
                                </span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('login') }}" method="post" 
                            id="formAuthentication" class="mb-3">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="email" name="email-username"
                                    placeholder="Email adresinizi daxil edin" autofocus required>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Parol</label>
                                    {{-- <a href="auth-forgot-password-basic.html">
                                        <small>Forgot Password?</small>
                                    </a> --}}
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" name="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" required/>
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" name="remember" type="checkbox" id="remember-me">
                                    <label class="form-check-label" for="remember-me">
                                        Məni xatırla
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">
                                    Daxil ol
                                </button>
                            </div>
                        </form>

                        {{-- <p class="text-center">
                            <span>New on our platform?</span>
                            <a href="auth-register-basic.html">
                                <span>Create an account</span>
                            </a>
                        </p>

                        <div class="divider my-4">
                            <div class="divider-text">or</div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
                                <i class="tf-icons bx bxl-facebook"></i>
                            </a>

                            <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
                                <i class="tf-icons bx bxl-google-plus"></i>
                            </a>

                            <a href="javascript:;" class="btn btn-icon btn-label-twitter">
                                <i class="tf-icons bx bxl-twitter"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    <!-- / Content -->
    <script src="backend/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="backend/assets/vendor/libs/popper/popper.js"></script>
    <script src="backend/assets/vendor/js/bootstrap.js"></script>
    <script src="backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="backend/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="backend/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="backend/assets/vendor/js/menu.js"></script>
    <script src="backend/assets/js/main.js"></script>
</body>
</html>

