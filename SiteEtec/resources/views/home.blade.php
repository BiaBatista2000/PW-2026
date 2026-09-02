<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETEC Zona Leste</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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

            <a class="active" href="{{ route('home') }}">
                <i class="fa-solid fa-house"></i>
                <span>Home</span>
            </a>

            <a href="{{ route('cursos') }}">
                <i class="fa-solid fa-book"></i>
                <span>Cursos</span>
            </a>

            <a href="{{ route('noticias') }}">
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
                <input type="text" id="pesquisa" placeholder="Pesquisar..." onkeyup="pesquisar()">
            </div>

            <div class="usuario">
                <span>{{ Auth::user()->name }}</span>
            </div>

        </header>

        <section class="banner">

            <div class="banner-texto">

                <i class="fa-solid fa-graduation-cap banner-icon"></i>

                <h1>Bem-vindo à ETEC Zona Leste</h1>

                <p>Portal de informações da escola com cursos, eventos e novidades.</p>

                <a href="{{ route('home') }}" class="btn-banner">Explorar</a>

            </div>

        </section>

        <section class="cards">

            <div class="card">
                <i class="fa-solid fa-graduation-cap"></i>
                <h3>Cursos</h3>
                <p>Conheça os cursos disponíveis.</p>
            </div>

            <div class="card">
                <i class="fa-solid fa-calendar-days"></i>
                <h3>Calendário</h3>
                <p>Eventos e datas importantes.</p>
            </div>

            <div class="card">
                <i class="fa-solid fa-file-lines"></i>
                <h3>Editais</h3>
                <p>Documentos e informações oficiais.</p>
            </div>

        </section>

                <section class="noticias">

            <div class="titulo">
                <h2>Últimas Notícias</h2>
            </div>

            <div class="lista">

                <article class="noticia">
                    <i class="fa-solid fa-laptop-code"></i>
                    <div>
                        <h3>Feira Tecnológica</h3>
                        <p>Projetos dos alunos serão apresentados.</p>
                    </div>
                </article>

                <article class="noticia">
                    <i class="fa-solid fa-book-open"></i>
                    <div>
                        <h3>Vestibulinho</h3>
                        <p>Inscrições abertas para novos alunos.</p>
                    </div>
                </article>

                <article class="noticia">
                    <i class="fa-solid fa-calendar"></i>
                    <div>
                        <h3>Semana Cultural</h3>
                        <p>Programação de eventos da escola.</p>
                    </div>
                </article>

            </div>

        </section>

    </main>

</div>

<script>
function pesquisar() {
    let input = document.getElementById("pesquisa").value.toLowerCase();

    let cards = document.querySelectorAll(".card");
    let noticias = document.querySelectorAll(".noticia");

    cards.forEach(card => {
        card.style.display = card.innerText.toLowerCase().includes(input) ? "block" : "none";
    });

    noticias.forEach(noticia => {
        noticia.style.display = noticia.innerText.toLowerCase().includes(input) ? "flex" : "none";
    });
}
</script>

</body>
</html>