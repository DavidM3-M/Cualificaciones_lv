<!-- filepath: resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Mi Aplicación</h1>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>© 2025 Mi Aplicación</p>
    </footer>
</body>
</html>