@extends("default")

@section("title")
    {{$dier->name}}
@endsection

@section("content")
    @include("header")
    @include("dieren.components.dierCard--show")
@endsection