@extends("default")

@section("title")
    users
@endsection

@section("content")
    @include("header")

    <ul class="regel">
        @foreach($users as $user)
        <li class="regel__li">
            <p class="regel__item">{{$user->name}}</p>
            <p class="regel__item">{{$user->email}}</p>
            <form class="regel__item" action="/user/delete" method="POST">
                @csrf
                <input name="user" type="text" value="{{$user->email}}" hidden>
                <button class="regel__item__button" >Verwijder user</button>
            </form>
        </li>
        @endforeach
    </ul>
@endsection