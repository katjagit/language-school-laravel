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

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <fieldset>
                    <legend>{{ __('Schnelle Registierung') }}</legend>
                    <div>

                        <label for="name" class="inline-block">{{ __('Vorname:') }}</label>
                        <input type="text" class="width65 inline-block @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="name" placeholder="Max" required>
                        @error('name')
                            <div class="error_form">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>

                        <label for="lastname" class="inline-block">{{ __('Nachname:') }}</label>
                        <input type="text" class="width65 inline-block @error('last_name') is-invalid @enderror" id="lastname" name="lastname" value="{{ old('lastname') }}" placeholder="Mustermann" required>
                        @error('last_name')
                        <div class="error_form">{{ $message }}</div>
                        @enderror
                    </div>


                    <div>

                        <label for="email" class="inline-block">{{ __('Email:') }}</label>
                        <input type="email" class="width65 inline-block @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="email@test.de" required>
                        @error('email')
                        <div class="error_form">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>

                        <label for="password" class="inline-block">{{ __('Passwort:') }}</label>
                        <input type="password" class="width65 inline-block" name="password" id="password" required>
                        @error('password')
                        <div class="error_form">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>

                        <label for="password_confirmation" class="inline-block">{{ __('Passwort bestätigen:') }}</label>
                        <input type="password" class="width65" name="password_confirmation" id="password_confirmation" required>
                        @error('password_confirmation')
                        <div class="error_form">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>

                        <input type="radio" name="status" value="user" id="user" required>
                        <label for="user">{{ __('Ich bin Schüler:') }}</label>
                        <input type="radio" name="status" value="teacher" id="teacher" required>
                        <label for="teacher">{{ __('Ich bin Lehrer:') }}</label>
                        @error('required')
                        <div class="error_form">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="submit_button block">{{ __('registrieren') }}</button>
                    </div>
                </fieldset>
            </form>

            <div>
                Hast du schin einen Account? Dann kannst du dich <a href="/login">hier anmelden</a>.
            </div>
        </div>
    </main>
@endsection
