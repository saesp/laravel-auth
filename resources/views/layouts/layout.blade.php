<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Vite --}}
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="content">
        <header>
            @include('components.header')
        </header>
    
        <main pl-4>
            @yield('content')
        </main>
    
        <footer>
            @include('components.footer')
        </footer>
    </div>
</body>
</html>