@extends("default")

@section("title")
    dieren
@endsection

@section("content")
    <header class="home">
        <a class="home__a" href="/"><button class="home__button">Jaap's Uitlaat Service</button></a>
        <form action="/login" class="home__form">
            @csrf
            <button class="home__logout" type="submit">Inloggen</button>
        </form>
    </header>

    <h1>Hier komt een leuke zin om mensen te trekken een account aan te maken!</h1>

    <ul class="u-grid-3 u-grid-gap-4">
        @foreach($dieren as $dier)
            @include("dieren.components.dierCard--index")
        @endforeach
    </ul>
@endsection
