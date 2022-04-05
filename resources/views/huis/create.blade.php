@extends("default")

@section("title")
    huis aanmaken
@endsection

@section("content")
@include ("header")
<article class="create-form">
        <form class="create-form__form" action="/huizen" method="POST">
            @csrf
            <h1 class="create-form__header">Informatie over uw huis voor de eigenaar</h1>
            <section class="create-form__section">
                <label for="name">Straatnaam</label>
                <input class="create-form__input" name="name" id="name" type="text">
            </section>

            <section class="create-form__section">
                <label for="postcode">Postcode</label>
                <input class="create-form__input" name="postcode" id="postcode" type="text">
            </section>

            <section class="create-form__section">
                <label for="huisnummer">Huisnummer</label>
                <input class="create-form__input" name="huisnummer" id="huisnummer" type="text">
            </section>

            <section class="create-form__section">
                <label for="plaatsnaam">Plaatsnaam</label>
                <input class="create-form__input" name="plaatsnaam" id="plaatsnaam" type="text">
            </section>

            <section class="create-form__section">
                <label for="image1">Afbeelding url</label>
                <input class="create-form__input" name="image1" id="image1" type="text">
            </section>

            <section class="create-form__section">
                <label for="image2">Afbeelding url</label>
                <input class="create-form__input" name="image2" id="image2" type="text">
            </section>

            <section class="create-form__section">
                <label for="image3">Afbeelding url</label>
                <input class="create-form__input" name="image3" id="image3" type="text">
            </section>

            <section class="create-form__section">
                <label for="image4">Afbeelding url</label>
                <input class="create-form__input" name="image4" id="image4" type="text">
            </section>

            <section class="create-form__section">
                <button class="create-form__button" type="submit">Submit</button>
            </section>
        </form>
    </article>
@endsection