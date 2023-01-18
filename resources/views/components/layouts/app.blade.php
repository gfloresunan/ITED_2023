<!doctype html>
<html lang="es">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ URL::asset('assets/images/favicon.ico') }}" >

    <title>EduAdmin - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vendors_css.css') }}" >

    <!-- Style-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}" >
    <link rel="stylesheet" href="{{ URL::asset('assets/css/skin_color.css') }}" >
</head>
<body class="theme-primary">

<x-layouts.social />
<x-layouts.nav />

@if(session('otro'))
    <div class="alert alert-success" role="alert">
        {{ session('otro') }}
    </div>
@endif

{{ $slot }}
<!-- JavaScript Bundle with Popper -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Vendor JS -->
<script type="text/javascript" src="{{ URL::asset('assets/js/vendors.min.js') }}"></script>

<!-- Corenav Master JavaScript -->
<script type="text/javascript" src="{{ URL::asset('assets/corenav-master/coreNavigation-1.1.3.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/nav.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>


<!-- EduAdmin front end -->
<script type="text/javascript" src="{{ URL::asset('assets/js/template.js') }}"></script>

</body>
</html>

