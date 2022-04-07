

<article class="showCard">
    <figure class="showCard__figure">
        <img class="showCard__image" src="{{$dier->image}}" alt="Dier">
    </figure>
    <section class="showCard__text showCard__title">
        <p>{{$dier->name}}</p> 
    </section>

    <section class="showCard__section__wrapper">
        <section class="showCard__section">
            <section class="showCard__text">
                <p> Eigenaar: {{$dier->eigenaar}}</p>
            </section>
            <section class="showCard__text">
                <p> Soort: {{$dier->kind}}</p>
            </section>
        </section>
    
        <section class="showCard__section">
            <section class="showCard__text">
                <p> Van {{$dier->vanafdag}} om {{$dier->vanaftijd}}</p>
            </section>
            <section class="showCard__text">
                <p> Tot {{$dier->totdag}} om {{$dier->tottijd}}</p>
            </section>
        </section>
    </section>

    <section class="showCard__buttonsection">
        <form action="/verzoek" method="POST">
            @csrf
            <input name="dier" type="text" value="{{$dier->name}}" hidden>
            
            
            <button class="showCard__button" type="submit">Reserveer dier</button>
        </form>
    </section>
</article>  