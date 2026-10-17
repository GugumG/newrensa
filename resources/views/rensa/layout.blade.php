<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <title>@yield('title','Rensa')</title>

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
<!-- 
    bootstrap (grid, carosel, accordion, utilities) + ikon -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- css asli -->
    <link href="{{ asset('rensa/style.css') }}?v={{ @filemtime(public_path('rensa/style.css')) }}" rel="stylesheet">
</head>
<body>
    @include('rensa.partials.header')

    <main>
        @yield('content')
    </main> 

    @includeif('rensa.partials.footer')

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('rensa/main.js') }}?v={{ @filemtime(public_path('rensa/main.js')) }}"></script>
    <script src="{{ asset('rensa/coverflow.js') }}?v={{ @filemtime(public_path('rensa/coverflow.js')) }}"></script>

</body>
</html>