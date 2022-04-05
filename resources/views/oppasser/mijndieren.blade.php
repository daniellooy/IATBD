@extends("default")

@section("title")
    mijndieren
@endsection

@section("content")
    @include("header")
    <ul class="u-grid-3 u-grid-gap-4">
        @foreach($dieren as $dier)
            @include("oppasser.components.dierCard--index")
        @endforeach
    </ul>
@endsection