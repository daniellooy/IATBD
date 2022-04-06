@extends("default")

@section("title")
    niew dier
@endsection

@section("content")
    @include("header")
    <article class="create-form">
        <form class="create-form__form" action="/dieren" method="POST">
            @csrf
            <h1 class="create-form__header">Meld nieuw huisdier aan</h1>
            <section class="create-form__section">
                <label for="name">Naam van dier</label>
                <input class="create-form__input" name="name" id="name" type="text" maxlength="25"> 
            </section>

            <section class="create-form__split">
                <section class="create-form__section left">
                    <label for="kind">Soort dier</label>
                    <select class="create-form__input-split" name="kind" id="kind">
                        @foreach($animal as $animal)
                            <option value="{{$animal->kind}}">{{$animal->kind}}</option>
                        @endforeach
                    </select>
                </section>
    
                <section class="create-form__section">
                    <label for="prijs">Prijs</label>
                    <input class="create-form__input-split" name="prijs" id="prijs" type="number">
                </section>
            </section>

            <section class="create-form__split">
                <section class="create-form__section left">
                    <label for="vanaf">Vanaf</label>
                    <input class="create-form__input-split" name="vanafdag" id="vanaf" type="date">
                    <input class="create-form__input-split" name="vanaftijd" id="vanaf" type="time">
                </section>
    
                <section class="create-form__section">
                    <label for="tot">Tot</label>
                    <input class="create-form__input-split" name="totdag" id="tot" type="date">
                    <input class="create-form__input-split" name="tottijd" id="tot" type="time">
                </section>
            </section>


            <section class="create-form__section">
                <label for="image">Afbeelding url</label>
                <input class="create-form__input" name="image" id="image" type="text">
            </section>

            <section class="create-form__section">
                <button class="create-form__button" type="submit">Submit</button>
            </section>
        </form>
    </article>



@endsection