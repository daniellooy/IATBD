@extends("default")

@section("title")
    {{$dier->name}}
@endsection

@section("content")
    @include("dieren.components.dierCard--show")
@endsection