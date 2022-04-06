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
    <section class="title-wrapper">
        <h2>Wil jij graag wat bijverdienen door op andermans dieren te passen of heb je een huisdier maar wil je even lekker een weekendje weg? Meld je dan snel aan!</h1>
    </section>

    <ul class="u-grid-3 u-grid-gap-4">
        @foreach($dieren as $dier)
        <li class="u-list-style-none" data-kind-of-dier={{$dier->kind}}>
    
            <article class="dierCard">
                <section class="dierCard__text dierCard__title">
                    <p>{{$dier->name}} de {{$dier->kind}}</p>
                </section>
                <figure class="dierCard__figure">
                    <img class="dierCard__image" src="{{$dier->image}}" alt="Dier">
                </figure>
                <section class="dierCard__text">
                    <p>Vanaf {{$dier->vanafdag}} om {{$dier->vanaftijd}}</p>
                </section>
                <section class="dierCard__text">
                    <p>Maak account om dier te reserveren</p>
                </section>
            </article>
        </li>
        @endforeach
    </ul>
@endsection
