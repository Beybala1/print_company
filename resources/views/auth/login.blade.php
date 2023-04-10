<!DOCTYPE html>

<html lang="az" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Daxil ol</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="{{url('backend/assets/img/favicon/favicon.ico')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
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
    <div style="margin-top:8%;" class="container-xxl col-4">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-2 text-center">Daxil ol</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form id="main_form" class="mb-3" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}"
                                    placeholder="Emailinizi daxil edin" required/>
                            </div>

                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">Parol</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" required/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" checked name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Məni xatırla') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary d-grid w-100">Daxil ol</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{url('backend/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{url('backend/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{url('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{url('backend/assets/vendor/libs/hammer/hammer.js')}}"></script>
    <script src="{{url('backend/assets/vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{url('backend/assets/vendor/js/menu.js')}}"></script>
</body>
</html>