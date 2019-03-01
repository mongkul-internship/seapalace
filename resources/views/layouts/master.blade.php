<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seaplace Hotel</title>

    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/@sn8/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/magnific-popup/dist/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/jquery-nice-select/css/nice-select.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
@include('partials.navabar')

@yield('content')


@include('partials.footer')


<script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('node_modules/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('node_modules/owl.carousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('plugins/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('node_modules/superfish/dist/js/superfish.min.js') }}"></script>
<script src="{{ asset('node_modules/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('node_modules/ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
{{--<script src="vendors/mail-script.js"></script>--}}
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>