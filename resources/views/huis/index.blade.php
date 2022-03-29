@extends("default")

@section("title")
    huizen
@endsection

@section("content")
    <ul class="u-grid-3 u-grid-gap-4">
        @foreach($huis as $huis)
            @include("huis.components.huisCard")
        @endforeach
    </ul>
@endsection