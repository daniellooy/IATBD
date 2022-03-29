<li class="u-list-style-none" data-kind-of-dier={{$dier->kind}}>
    
        <article class="dierCard">
            <figure class="dierCard__figure">
                <img class="dierCard__image" src="{{$dier->image}}" alt="Dier">
            </figure>
            <section class="dierCard__text">
                <p>{{$dier->description}}</p>
            </section>
            <section class="dierCard__buttonsection">
            <a href="/dieren/{{$dier->id}}"><button class="dierCard__button">Details</button></a>
            </section>
        </article>
</li>