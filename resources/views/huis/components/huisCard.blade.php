<li class="u-list-style-none">
    
        <article class="huisCard">
            <!-- <section class="huisCard__image-columns"> -->
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
            <!-- </section> -->
            <p>{{$huis->name}}</p>
            <p>{{$huis->postcode}}</p>
            <p>{{$huis->huisnummer}}</p>    
            <p>{{$huis->plaatsnaam}}</p>
        </article>
</li>