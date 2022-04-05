@extends("default")

@section("title")
    dieren
@endsection

@section("content")
    @include("header")
    <nav class="nav">
        <ul class="nav__ul u-list-style-none">
            <li class="nav__li">
                <a class="nav__a" href="/mijndieren"><button class="nav__button" >Mijn dieren</button></a>
            </li>
        </ul>
    </nav>
    <section class="filter-section">
        <section class="filter-section__wrapper">
            <label class="filter-section__label" for="Geit">Geit</label>
            <input class="filter-section__input" id="Geit" type="checkbox" name="Geit">
        </section>
        <section class="filter-section__wrapper">
            <label class="filter-section__label" for="Hond">Hond</label>
            <input class="filter-section__input" id="Hond" type="checkbox" name="Hond">
        </section>
        <section class="filter-section__wrapper">
            <label class="filter-section__label" for="Kat">Kat</label>
            <input class="filter-section__input" id="Kat" type="checkbox" name="Kat">
        </section>
        <section class="filter-section__wrapper">
            <label class="filter-section__label" for="Konijn">Konijn</label>
            <input class="filter-section__input" id="Konijn" type="checkbox" name="Konijn">
        </section>
        <section class="filter-section__wrapper">
            <label class="filter-section__label" for="Schildpad">Schildpad</label>
            <input class="filter-section__input" id="Schildpad" type="checkbox" name="Schildpad">
        </section>
    </section>

    <ul class="u-grid-3 u-grid-gap-4">
        @foreach($dieren as $dier)
            @include("dieren.components.dierCard--index")
        @endforeach
    </ul>
@endsection
