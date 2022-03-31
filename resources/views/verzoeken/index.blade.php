@extends("default")

@section("title")
    verzoeken
@endsection

@section("content")
<section>
    <p>{{$verzoek->dier}}</p>
    <p>{{$verzoek->email}}</p>
    <form action="/verzoeken/{{$verzoek->id}}">
        <button>Bekijk oppasser</button>
    </form>
</section>
@endsection