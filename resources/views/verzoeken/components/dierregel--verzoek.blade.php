<li class="regel__li">
    <p class="regel__item">{{$dier->name}}</p>
    <p class="regel__item">{{$dier->oppasser}}</p>
    <form class="regel__item" action="/huis" method="POST">
        @csrf
        <input name="oppasser" type="text" value="{{$dier->oppasser}}" hidden>
        <button class="regel__item__button" >Bekijk oppasser</button>
    </form>
    <form class="regel__item" action="/accepteren" method="POST">
        @csrf
        <input name="dier" type="text" value="{{$dier->name}}" hidden>
        <button class="regel__item__button" type="submit">Accepteren</button>
    </form>
    <form class="regel__item" action="/afwijzen" method="POST">
        @csrf
        <input name="dier" type="text" value="{{$dier->name}}" hidden>
        <button class="regel__item__button" type="submit">Afwijzen</button>
    </form>
</li>