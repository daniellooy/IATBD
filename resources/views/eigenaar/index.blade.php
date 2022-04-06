@extends("default")

@section("title")
    Home
@endsection

@section("content")
    @include("header")
    @include("eigenaar.components.nav")

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
                <section class="dierCard__buttonsection">
                    <form action="/dieren/delete" method="POST">
                        @csrf
                        <input name="dier" type="text" value="{{$dier->name}}" hidden>
                        <button class="dierCard__button" type="submit">Verwijderen</button>
                    </form>
                </section>
            </article>
        </li>
        @endforeach
    </ul>
@endsection