@extends('layout')

@section('page_title')
    Login
@endsection

@section('header')
    <h1>Ameldung</h1>
@endsection

@section('main_content')
    <main class="wrap85 margin_bottom">
        <div class="margin_top_3em width30">
            <form action="#" method="POST" id="login-form">
                <fieldset>
                    <legend>Login</legend>
                    <div>

                        <label for="email" class="inline-block">Email</label>
                        <input type="email" class="width65" name="email" id="email" required>
                    </div>

                    <div>

                        <label for="password" class="inline-block">Passwort</label>
                        <input type="password" class="width65" name="password" id="password" required>
                    </div>

                    <div>
                        <button type="submit" class="submit_button block">Login</button>
                    </div>
                </fieldset>
            </form>
            <div class="text_center">
                Du hast noch keinen Account? Dann registriere dich <a href="/register">hier</a>.
            </div>
        </div>

    </main>
@endsection
