<li class="u-list-style-none" data-kind-of-dier={{$dier->kind}}>
    
        <article class="dierCard__mijndier">
            <figure class="dierCard__figure">
                <img class="dierCard__image" src="{{$dier->image}}" alt="Dier">
            </figure>
            <section class="dierCard__text dierCard__title">
                <p>{{$dier->name}} de {{$dier->kind}}</p>
            </section>

            <section class="showCard__section__wrapper">
                <section class="showCard__section__mijndier">
                    <section class="showCard__text">
                        <p> Eigenaar: {{$dier->eigenaar}}</p>
                    </section>
                    <section class="showCard__text">
                        <p> @if ($dier->verzoek == 1)
                                Status: aangevraagd
                            @elseif ($dier->verzoek == 2)
                                Status: geaccepteerd
                            @endif</p>
                    </section>
                </section>
            
                <section class="showCard__section__mijndier">
                    <section class="showCard__text">
                        <p> Van {{$dier->vanafdag}} om {{$dier->vanaftijd}}</p>
                    </section>
                    <section class="showCard__text">
                        <p> Tot {{$dier->totdag}} om {{$dier->tottijd}}</p>
                    </section>
                </section>
            </section>
        </article>
</li>