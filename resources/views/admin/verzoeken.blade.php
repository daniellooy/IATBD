@extends("default")

@section("title")
    verzoeken
@endsection

@section("content")
    @include("header")


    <ul class="regel">
        @foreach($verzoeken as $verzoek)
        <li class="regel__li">
            <p class="regel__item">{{$verzoek->name}}</p>
            <p class="regel__item">{{$verzoek->oppasser}}</p>
            <form class="regel__item" action="/verzoeken/delete" method="POST">
                @csrf
                <input name="dier" type="text" value="{{$verzoek->name}}" hidden>
                <button class="regel__item__button" >Verwijder verzoek</button>
            </form>
        </li>
        @endforeach
    </ul>
@endsection