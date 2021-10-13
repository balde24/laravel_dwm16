<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/@yield('css')">
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/blabla">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
