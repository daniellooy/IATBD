@extends("default")

@section("title")
    niew dier
@endsection

@section("content")
    <article class="create-form">
        <form class="create-form__form" action="/dieren" method="POST">
            @csrf
            <h1 class="create-form__header">Meld nieuw huisdier aan</h1>
            <section class="create-form__section">
                <label for="name">Naam</label>
                <input class="create-form__input" name="name" id="name" type="text">
            </section>

            <section class="create-form__section">
                <label for="kind">Soort dier</label>
                <select class="create-form__input" name="kind" id="kind">
                    @foreach($animal as $animal)
                        <option value="{{$animal->kind}}">{{$animal->kind}}</option>
                    @endforeach
                </select>
            </section>

            <section class="create-form__section">
                <label for="description">Beschrijving</label>
                <textarea class="create-form__input create-form__input--big" name="description" id="description" rows="4"></textarea>
            </section>

            <section class="create-form__section">
                <label for="image">Afbeelding</label>
                <input class="create-form__input" name="image" id="image" type="text">
            </section>

            <section class="create-form__section">
                <button class="create-form__button" type="submit">Submit</button>
            </section>
        </form>
    </article>



@endsection