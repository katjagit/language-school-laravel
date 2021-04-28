@extends('layout')

@section('page_title')
    Kontakt
@endsection

@section('header')
    <h1>Wir bleiben im Kontakt</h1>
@endsection

@section('main_content')
    <main class="wrap85 margin_bottom">
        <div class="width45" id="div-contact">
            <h2>Kontakt zu uns</h2>
            <p>Haben Sie Fragen oder brauchen Sie Hilfe? Kontanktieren Sie uns über dieses Kontaktformular, wir helfen Ihnen umgehen weiter.</p>
            <form action="/contact/check" method="POST" id="contact">
                @csrf
                <fieldset>
                    <legend>Ihre Angaben</legend>
                    <!-- schow errors -->
                    @if($errors->any())
                        <div class="error_form">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- FIRSTNAME -->
                    <div>
                        <label for="first_name" class="req inline-block">Vorname:</label>
                        <input type="text" class="width75 inline-block" id="first_name" name="first_name" placeholder="Max" value="">
                    </div>

                    <!-- LASTNAME -->

                    <div>
                        <label for="last_name" class="req inline-block">Nachname:</label>
                        <input type="text" class="width75 inline-block" id="last_name" name="last_name" placeholder="Mustermann" value="">
                    </div>

                    <!-- EMAIL -->

                    <div>
                        <label for="email" class="req inline-block">Email:</label>
                        <input type="email" class="width75 inline-block" id="email" name="email" placeholder="name@site.de" value="">
                    </div>

                    <!-- RADIO BUTTONS -->

                    <div>
                        <input type="radio" name="status" id="user" value="user">
                        <label for="user" class="radio">Ich bin Schüler</label>
                        <input type="radio" name="status" id="teacher" value="teacher">
                        <label for="teacher" class="radio">Ich bin Lehrer</label>
                    </div>

                    <!-- OPTIONS -->

                    <div>
                        <label for="subject" id="label_subject" class="req">Wählen Sie den Grund:</label>
                        <select name="subject" id="subject">
                            <option value="" disabled selected>-- Bitte auswählen --</option>
                            <option
                                value="kursberatung">Beratung zu den Kursen</option>

                            <option
                                value="lehrerberatung">Beratung für Lehrer</option>

                            <option
                                value="support">Technische Hilfe</option>
                            <option
                                value="payquestion">Fragen zur Bezahlung</option>
                        </select>
                    </div>

                    <!-- TEXT AREA -->
                    <div>
                        <label for="message" id="text_area" class="req">Beschreiben Sie Ihr Anliegen:</label><br>
                        <textarea name="message" id="message"></textarea>
                    </div>

                    <!-- CHECKBOX -->
                    <div>
                        <span class="req"></span>
                        <input class="checkbox" type="checkbox" name="agb" value="yes">
                        <label for="agb" class="label-checkbox">Ich akzeptiere die <a href="" >Datenschtzrichtlinien</a>.</label>
                    </div>
                    <!-- SUBMIT -->
                    <button type="submit" class="submit_button block">absenden</button>
                </fieldset>
            </form>

        </div>
        <div class="feedback" id="feedback">
        </div>
        </div>
    </main>
@endsection
