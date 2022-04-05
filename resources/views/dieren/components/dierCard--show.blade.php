

<article class="dierCard">
    <figure class="dierCard__figure">
        <img class="dierCard__image" src="{{$dier->image}}" alt="Dier">
    </figure>
    <section class="dierCard__text">
        <p>{{$dier->description}}</p>
    </section>
    <section class="dierCard__buttonsection">
        <form action="/verzoek" method="POST">
            @csrf
            <button class="dierCard__button" type="submit">Reserveer dier</button>
            <input name="dier" type="text" value="{{$dier->name}}" hidden>
        </form>
    </section>
</article>