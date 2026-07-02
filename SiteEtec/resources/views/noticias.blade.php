<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias - ETEC Zona Leste</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/noticias.css') }}">
    @vite('resources/js/app.js')
</head>

<body>

<div class="container">

    <aside class="sidebar">

        <div class="logo">
            <i class="fa-solid fa-school"></i>
            <h2>ETEC Zona Leste</h2>
        </div>

        <nav>

            <a href="{{ route('home') }}">
                <i class="fa-solid fa-house"></i>
                <span>Home</span>
            </a>

            <a href="{{ route('cursos') }}">
                <i class="fa-solid fa-book"></i>
                <span>Cursos</span>
            </a>

            <a class="active" href="{{ route('noticias') }}">
                <i class="fa-solid fa-newspaper"></i>
                <span>Notícias</span>
            </a>

            <a href="{{ route('perfil') }}">
                <i class="fa-solid fa-user"></i>
                <span>Perfil</span>
            </a>

        </nav>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                Sair
            </button>
        </form>

    </aside>

    <main>

        <header>

            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" id="pesquisa" placeholder="Pesquisar notícias..." onkeyup="pesquisarNoticias()">
            </div>

            <div class="usuario">
                <span>{{ Auth::user()->name }}</span>
            </div>

        </header>

        <section class="banner">

            <div class="banner-texto">

                <i class="fa-solid fa-newspaper"></i>

                <h1>Notícias da ETEC</h1>

                <p>Fique por dentro de eventos, avisos e novidades da escola.</p>

                <a href="#lista" class="btn-banner">Ver Notícias</a>

            </div>

        </section>

        <section class="noticias-grid" id="lista">

            <div class="noticia-card">
                <i class="fa-solid fa-laptop-code"></i>
                <h3>Feira Tecnológica</h3>
                <p>Os alunos apresentarão projetos desenvolvidos durante o semestre.</p>
            </div>

            <div class="noticia-card">
                <i class="fa-solid fa-book-open"></i>
                <h3>Vestibulinho Aberto</h3>
                <p>Inscrições abertas para novos alunos da ETEC Zona Leste.</p>
            </div>

            <div class="noticia-card">
                <i class="fa-solid fa-calendar"></i>
                <h3>Semana Cultural</h3>
                <p>Programação especial com apresentações e atividades culturais.</p>
            </div>

            <div class="noticia-card">
                <i class="fa-solid fa-chalkboard-user"></i>
                <h3>Palestra Profissional</h3>
                <p>Profissionais do mercado irão falar sobre carreira e futuro.</p>
            </div>

        </section>

    </main>

</div>

<script>
function pesquisarNoticias() {
    let input = document.getElementById("pesquisa").value.toLowerCase();
    let cards = document.querySelectorAll(".noticia-card");

    cards.forEach(card => {
        card.style.display = card.innerText.toLowerCase().includes(input)
            ? "block"
            : "none";
    });
}
</script>

</body>
</html>