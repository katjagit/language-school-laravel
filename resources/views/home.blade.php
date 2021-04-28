@extends('layout')

@section('page_title')
    Sprachschule Linguafan
@endsection

@section('header')
    <h1>Lerne Englisch Online!</h1>
    <h2>Einfach, spannend, jederzeit</h2>
    <button type="button" onclick="window.location.href='/courses'">Jetzt starten</button>
@endsection

@section('main_content')
    <main>
        <div class="icon_block flex wrap85">
            <div>
                <img src="{{ asset("images/home/icon1.png") }}" alt="icon">
                <h3>Einfach gemacht</h3>
                <p>Unsere Web-App ist leicht zu bedienen. Einfach anmelden, einen Kurs auswählen und loslegen.</p>
            </div>
            <div>
                <img src="{{ asset("images/home/icon2.png") }}" alt="icon">
                <h3>Schnelle Kundenbetreuung</h3>
                <p>Wir beantworten Fragen und helfen rund um die Uhr.</p>
            </div>
            <div>
                <img src="{{ asset("images/home/icon3.png") }}" alt="icon">
                <h3>Viele Kurse</h3>
                <p>Wir haben eine große Auswahl an Kurse. Egal, wo du gerade bist, du kannst von überall lernen.</p>
            </div>
        </div>

        <div class="description">
            <h2 class="wrap85">Was kann man bei uns lernen?</h2>
            <p class="wrap85">Wir haben viele Kurse zu verschiedenen Thematiken und fürs unterschiedliche Niveau vorbereitet. Du kannst an deinem Wortschatz arbeiten, Grammatik verbessern und vieles mehr.</p>
            <div class="flex wrap85 margin_top">
                <div>
                    <img src="{{ asset("images/home/description1.jpg") }}" alt="Wortschatz lernen">
                    <h3>Wortschatz</h3>
                    <p>Lerne Wortschatz mit einem Wortschatzkurs. Schaue dir Lektionen dazu an, mache Übungen und prüfe deine Fertigkeiten mit einem Test an.</p>
                </div>
                <div>
                    <img src="{{ asset("images/home/description2.jpg") }}" alt="Grammatik lernen">
                    <h3>Grammatik</h3>
                    <p>Wir haben auch Kurse, um deine Grammatik zu verbessern. Einfach ein Video ansehen und in den Übungen gleich anwenden. Es macht Spaß.</p>
                </div>
                <div>
                    <img src="{{ asset("images/home/description3.jpg") }}" alt="Schreiben üben">
                    <h3>Schreiben</h3>
                    <p>In jedem Kurs gibt es Schreibaufgaben. Unsere Lehrer korrigieren deinen Text und geben dir ein persönliches Feedback. </p>
                </div>
            </div>
        </div>

        <div class="counter"> <!-- Counter -->
            <div class="wrap85 flex">
                <div>
                    <p class="count">14203</p>
                    <p class="title">registrierte Benutzer</p>
                </div>
                <div>
                    <p class="count">584</p>
                    <p class="title">Lektionen insgesamt</p>
                </div>
                <div>
                    <p class="count">24</p>
                    <p class="title">Trainer</p>
                </div>
                <div>
                    <p class="count">29</p>
                    <p class="title">Kurse für alle Niveaus</p>
                </div>
            </div>
        </div>

        <div class="flex news wrap85">
            <div>
                <h3>Alktuelle Veranstaltungen</h3>
                <p>Aktuell finden wegen Corona-Situation keine Präsenzveranstaltungen statt, da unser Standort geschlossen ist. Wir bereiten neue Veranstaltungen im Online-Format, die bald herauskommen.</p>
            </div>
            <div class="newsletter" id="newsletter">
                <h3>Unser Newsletter</h3>
                <p>Möchtest du über neue Kurse und aktuelle Veranstaltungen Bescheid wissen? Dann abboniere unser Newsletter!</p>
                <form action="#" id="newsletter-form">
                    <!-- <label for="email">Deine Email</label> -->
                    <input type="email" id="email" placeholder="email@site.com" required><br>
                    <input type="submit" id="news_button" value="abbonieren">
                </form>
            </div>
        </div>
    </main>
@endsection
