<header class="home">
    <a class="home__a" href="/home"><button class="home__button">Jaap's Uitlaat Service</button></a>
    <form action="/logout" method="POST" class="home__form">
        @csrf
        <button class="home__logout" type="submit">Uitloggen</button>
    </form>
</header>