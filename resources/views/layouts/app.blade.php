<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Minha Aplicação')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100" >
    <header>
        @include('partials.navbar')
    </header>
    <main  class="flex-fill">
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>
