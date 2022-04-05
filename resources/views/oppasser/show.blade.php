@extends("default")

@section("title")
    {{$dier->name}}
@endsection

@section("content")
    @include("header")
    @include("oppasser.components.dierCard--show")
@endsection