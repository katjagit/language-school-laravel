<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("style.css") }}">
    <title>@yield('page_title')</title>
</head>
<body>
<div class="hero">
    <div class="top_nav">
        <a class="logo" href="#"><img src="#" alt="Logo"></a>
        <nav class="main_menu">
            <a href="#open" class="open" id="open"><img src="#" alt="Menü" style="width: 70px"></a>
            <a href="#" class="close" id="close"><img src="#" alt="schließen" style="width: 50px"></a>
            <ul>
                <li><a href="/"
                       class="">Home</a></li>
                <li><a href="/courses"
                       class="">Kurse</a></li>
                <li><a href="/contact"
                       class="">Kontakt</a></li>
                <li><a href="/register"
                       class="">Registrieren</a></li>
                <li><a href="/login">Anmelden</a></li>
            </ul>
        </nav>
    </div>
</div>
<header>
    <div class="hero_text">
        @yield('header')
    </div>
</header>

@yield('main_content')

<footer>
    <div class="bottom_footer flex">
        <div>
            <a class="logo" href=""><img src="" alt="Logo"></a>
        </div>
        <div>
            <nav>
                <ul>
                    <li><a href="#">Impressum</a></li>
                    <li><a href="#">Datenschutz</a></li>
                    <li><a href="#">Kontankt</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <p>Wir in sozialien Netzwerken</p>
            <p>
                <a href="#"><img class="social-icon" src="#" alt="facebook-icon"></a>
                <a href="#"><img class="social-icon" src="#" alt="instagram-icon"></a>
                <a href="#"><img class="social-icon" src="#" alt="youtube-icon"></a>
            </p>
        </div>
    </div>
</footer>

</body>
</html>
