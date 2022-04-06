@extends("default")

@section("title")
    niew dier
@endsection

@section("content")
    @include("header")
    <article class="create-form">
        <form class="create-form__form" action="/review/store" method="POST">
            @csrf
            <h1 class="create-form__header">Laat hier voor {{$dier->oppasser}} een review achter</h1>

            <section class="create-form__section">
                <label for="review">Review</label>
                <textarea class="create-form__input create-form__input--big" name="review" id="review" rows="4"></textarea>
            </section>
            <input name="dier" type="text" value="{{$dier->name}}" hidden>

            <section class="create-form__section">
                <button class="create-form__button" type="submit">Submit</button>
            </section>
        </form>
    </article>



@endsection