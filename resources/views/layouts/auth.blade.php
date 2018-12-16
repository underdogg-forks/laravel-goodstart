<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link href="/vendor/coreui/css/coreui-icons.min.css" rel="stylesheet">
    <link href="/vendor/flags/css/flag-icon.min.css" rel="stylesheet">
    <link href="/vendor/font-awesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script>
        window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        'user' => Auth::user()
      ]) !!};
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- Main styles for this application-->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="app flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                @yield('auth')
            </div>
        </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/vendor/coreui/js/coreui.min.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>
