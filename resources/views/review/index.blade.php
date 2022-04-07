@extends("default")

@section("title")
    Reviews
@endsection

@section("content")
    @include("header")

    <ul class="u-grid-3 u-grid-gap-4">
        @foreach($reviews as $review)
        <li class="u-list-style-none" >
            <article class="reviewCard">
                <section class="reviewCard__text reviewCard__title">
                    <p>Review van {{$review->eigenaar}}</p>
                </section>
                <section class="reviewCard__text">
                    <p>{{$review->content}}</p>
                </section>
            </article>
        </li>
        @endforeach
    </ul>
@endsection