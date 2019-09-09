<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Examin - Education and LMS Template">

    <title>@yield('titulo') - {{ $configuracion->titulo }}</title>

    @if ($configuracion->favicon)
        <link href="{{ $configuracion->favicon }}" rel="icon">
    @endif

    @include('front.include.css')

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    @include('front.layouts.header')

    @yield('content')

    @include('front.layouts.footer')

    @include('front.include.js')
</body>
</html>
