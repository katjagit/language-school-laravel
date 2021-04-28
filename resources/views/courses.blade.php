@extends('layout')

@section('page_title')
    Kurse
@endsection

@section('header')
    <h1>Online-Kurse</h1>
    <h2>Übersicht aller aktuellen Kurse</h2>
@endsection

@section('main_content')
    <main class="courses-width">
        <h2 id="h2-courses">Aktuelle Kurse</h2>
        <button id="button-a" class="sort-button">Anfäger</button>
        <button id="button-f" class="sort-button">Fortgeschrittene</button>
        <button id="button-all" class="sort-button">Alle</button>
        <div id="courses" class="courses">

            <div class="container">
                <img src="#" alt="img">
                <section>
                    <h3>Titel</h3>
                    <p>Kurs</p>
                    <form action="#" method="POST">
                        <button type="submit" name="action" value="course-start" class="courses-button">starten</button>
                        <input type="hidden" name="course-id" value="">
                    </form>
                    <p class="hidden level"></p>
                </section>
            </div>
        </div>
    </main>
@endsection
