@extends("default")

@section("title")
    Home
@endsection

@section("content")
    @include("header")
    <nav class="nav">
        <ul class="nav__ul u-list-style-none">
            <li class="nav__li">
                <a class="nav__a" href="/admin/users"><button class="nav__button" >Users</button></a>
            </li>
            <li class="nav__li">
                <a class="nav__a" href="/admin/verzoeken"><button class="nav__button" >Verzoeken</button></a>
            </li>
        </ul>
    </nav>



@endsection