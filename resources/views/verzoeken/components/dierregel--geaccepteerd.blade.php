<li class="regel__li">
    <section class="regel__wrapper">
        <p class="regel__item">{{$dier->name}}</p>
        <p class="regel__item">{{$dier->oppasser}}</p>
        <p class="regel__item">{{$dier->vanafdag}} om {{$dier->vanaftijd}}</p>
    </section>
    <section class="regel__wrapper">
        <form class="regel__item" action="/huis" method="POST">
            @csrf
            <input name="oppasser" type="text" value="{{$dier->oppasser}}" hidden>
            <button class="regel__item__button" >Bekijk oppasser</button>
        </form>
        <form class="regel__item" action="/review/create" method="POST">
            @csrf
            <input name="dier" type="text" value="{{$dier->name}}" hidden>
            <button class="regel__item__button" type="submit">Verwijderen</button>
        </form>
    </section>
</li>