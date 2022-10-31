<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan SMKN 10 Jakarta Timur</title>
    <link rel="stylesheet" href={{ asset('assets/css/main/app.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/main/app-dark.css') }}>
    <link rel="stylesheet" href={{ asset('assets/extensions/choices.js/public/assets/styles/choices.css') }}>
    <link rel="stylesheet" href={{ asset('assets/extensions/simple-datatables/style.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/pages/simple-datatables.css') }}>
    <link rel="shortcut icon" href={{ asset('assets/images/logo/favicon.svg') }} type="image/x-icon">
    <link rel="shortcut icon" href={{ asset('assets/images/logo/favicon.png') }} type="image/png">
    <link rel="stylesheet" href={{ asset('assets/css/shared/iconly.css') }}>
</head>

<body
    style="background-image: url('{{ asset('assets/images/bg/slide4.jpg') }}');height: 100%;background-position: fixed;background-repeat: no-repeat;background-size: cover;">

    <div id="app" style="margin-top: 8%">

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="assets/js/pages/simple-datatables.js"></script>
    <script src="assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
    <script src="assets/js/pages/form-element-select.js"></script>
    @stack('script')

</body>

</html>
