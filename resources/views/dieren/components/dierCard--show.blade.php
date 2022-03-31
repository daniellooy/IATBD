

<article class="dierCard">
    <figure class="dierCard__figure">
        <img class="dierCard__image" src="{{$dier->image}}" alt="Dier">
    </figure>
    <section class="dierCard__text">
        <p>{{$dier->description}}</p>
    </section>
    <section class="dierCard__buttonsection">
        <form action="/verzoek/create/{{$dier->id}}" method="POST">
            <button class="dierCard__button">Reserveer dier</button>
        </form>
    </section>
</article>