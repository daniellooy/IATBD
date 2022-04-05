@extends("default")

@section("title")
    verzoeken
@endsection

@section("content")
<section>
    @include("header")
    <ul class="regel">
        @foreach($aanvragen as $dier)
            @include("verzoeken.components.dierregel--verzoek")
        @endforeach
    </ul>
    <ul class="regel">
        @foreach($geaccepteerd as $dier)
            @include("verzoeken.components.dierregel--geaccepteerd")
        @endforeach
    </ul>
</section>
@endsection