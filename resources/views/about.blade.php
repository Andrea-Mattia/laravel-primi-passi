<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel primi passi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        
        <header>
            <a href="{{ route('home') }}">{{ $title }}</a>

            <nav>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contacts') }}">Contatti</a></li>
            </nav>
        </header>

        <main>
            <h2>About me</h2>
            <div>Hi, I'm Andrea, I'm 26 years old and I'm almost a full stack web developer!</div>
        </main>

    </body>
</html>
