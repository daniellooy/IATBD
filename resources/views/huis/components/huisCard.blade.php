<li class="u-list-style-none">
    
        <article class="huisCard">
            <section class="huisCard__text-wrapper">
                <p class="huisCard__Text">{{$huis->name}}</p>
                <p class="huisCard__Text">{{$huis->postcode}}</p>
                <p class="huisCard__Text">{{$huis->huisnummer}}</p>    
                <p class="huisCard__Text">{{$huis->plaatsnaam}}</p>
            </section>
            <section class="huisCard__section">
                <figure class="huisCard__figure">
                    <img class="huisCard__image" src="{{$huis->image1}}" alt="huis">
                </figure>
                <figure class="huisCard__figure">
                    <img class="huisCard__image" src="{{$huis->image2}}" alt="huis">
                </figure>
            </section>
            <section class="huisCard__section">
                <figure class="huisCard__figure">
                    <img class="huisCard__image" src="{{$huis->image3}}" alt="huis">
                </figure>
                <figure class="huisCard__figure">
                    <img class="huisCard__image" src="{{$huis->image4}}" alt="huis">
                </figure>
            </section>
        </article>
</li>