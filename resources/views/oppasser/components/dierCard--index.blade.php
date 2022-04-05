<li class="u-list-style-none" data-kind-of-dier={{$dier->kind}}>
    
        <article class="dierCard">
            <figure class="dierCard__figure">
                <img class="dierCard__image" src="{{$dier->image}}" alt="Dier">
            </figure>
            <section class="dierCard__text">
                <p>{{$dier->description}}</p>
            </section>
            <p>
                @if ($dier->verzoek == 1)
                    Aangevraagd
                @elseif ($dier->verzoek == 2)
                    Geaccepteerd
                @endif
            </p>
            <section class="dierCard__buttonsection">
            <a href="/mijndieren/{{$dier->id}}"><button class="dierCard__button">Details</button></a>
            </section>
        </article>
</li>