@extends('layout')

@section('page_title')
    Registrieren
@endsection

@section('header')
    <h1>Registierung</h1>
@endsection

@section('main_content')
    <main class="wrap85 margin_bottom">
        <div class="margin_top_3em width30">

            <form action="#" method="post">
                <fieldset>
                    <legend>Schnelle Registierung</legend>
                    <div>

                        <label for="name" class="inline-block">Vorname:</label>
                        <input type="text" class="width65 inline-block" name="name" id="name" placeholder="Max" required>
                    </div>

                    <div>

                        <label for="lastname" class="inline-block">Nachname:</label>
                        <input type="text" class="width65 inline-block" id="lastname" name="lastname" placeholder="Mustermann" required>
                    </div>


                    <div>

                        <label for="email" class="inline-block">Email:</label>
                        <input type="email" class="width65 inline-block" name="email" id="email" placeholder="email@test.de" required>
                    </div>

                    <div>

                        <label for="password" class="inline-block">Passwort</label>
                        <input type="password" class="width65 inline-block" name="password" id="password" required>
                    </div>

                    <div>

                        <label for="password_confirmation" class="inline-block">Passwort bestätigen</label>
                        <input type="password" class="width65" name="password_confirmation" id="password_confirmation" required>
                    </div>

                    <div>

                        <input type="radio" name="status" value="user" id="user" required>
                        <label for="user">Ich bin Schüler</label>
                        <input type="radio" name="status" value="teacher" id="teacher" required>
                        <label for="teacher">Ich bin Lehrer</label>
                    </div>

                    <div>
                        <button type="submit" class="submit_button block">registrieren</button>
                    </div>
                </fieldset>
            </form>

            <div>
                Hast du schin einen Account? Dann kannst du dich <a href="/login">hier anmelden</a>.
            </div>
        </div>
    </main>
@endsection
