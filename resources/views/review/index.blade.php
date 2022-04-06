@extends("default")

@section("title")
    Reviews
@endsection

@section("content")
    @include("header")

    <ul class="u-grid-3 u-grid-gap-4">
        @foreach($reviews as $review)
        <li class="u-list-style-none" >
            <article class="dierCard">
                <section class="dierCard__text">
                    <p>Review van {{$review->eigenaar}}</p>
                </section>
                <section class="dierCard__text">
                    <p>{{$review->content}}</p>
                </section>
            </article>
        </li>
        @endforeach
    </ul>
@endsection