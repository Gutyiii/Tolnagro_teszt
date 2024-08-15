<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Application')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    <header>
        <nav>

        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>

    </footer>
</body>
</html>
