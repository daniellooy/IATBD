@extends("default")

@section("title")
    Home
@endsection

@section("content")
    @include("header")
    @include("eigenaar.components.nav")

    <ul class="u-grid-3 u-grid-gap-4">
        @foreach($dieren as $dier)
            @include("dieren.components.dierCard--index")
        @endforeach
    </ul>
@endsection