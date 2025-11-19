<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Cooperative')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Roboto Font Import -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <!-- AOS CSS -->
    
    <!-- Page-specific CSS -->
    @yield('styles')
</head>
<body>
    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        // Initialise AOS – you can tweak options here
        AOS.init({
            duration: 900,      // animation duration
            easing: 'ease-out-cubic', // smooth easing
            once: true,         // animate only once
            offset: 100         // trigger a little earlier
        });
    </script>

    <!-- Page-specific scripts -->
    @yield('scripts')
    
</body>
</html>