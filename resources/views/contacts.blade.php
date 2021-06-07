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
            <h2>Contacts</h2>
            <h4>Here's how you can reach me:</h4>
            <ul>
                <li><a href="#">Email</a></li>
                <li><a href="#">Linkedin</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </main>

    </body>
</html>
