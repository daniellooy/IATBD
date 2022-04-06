<li class="u-list-style-none" data-kind-of-dier={{$dier->kind}}>
    
        <article class="dierCard">
            <section class="dierCard__text dierCard__title">
                <p>{{$dier->name}} de {{$dier->kind}}</p>
            </section>
            <figure class="dierCard__figure">
                <img class="dierCard__image" src="{{$dier->image}}" alt="Dier">
            </figure>
            <section class="dierCard__text">
                <p>Vanaf {{$dier->vanafdag}} om {{$dier->vanaftijd}}</p>
            </section>
            <section class="dierCard__buttonsection">
            <a href="/dieren/{{$dier->id}}"><button class="dierCard__button">Details</button></a>
            </section>
        </article>
</li>