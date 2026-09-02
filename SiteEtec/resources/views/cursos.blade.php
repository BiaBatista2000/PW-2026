<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos - ETEC Zona Leste</title>

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

            <a href="{{ route('home') }}">
                <i class="fa-solid fa-house"></i>
                <span>Home</span>
            </a>

            <a class="active" href="{{ route('cursos') }}">
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
                <input type="text" id="pesquisa" placeholder="Pesquisar cursos..." onkeyup="pesquisarCursos()">
            </div>

            <div class="usuario">
                <span>{{ Auth::user()->name }}</span>
            </div>

        </header>

        <section class="banner">

            <div class="banner-texto">

                <i class="fa-solid fa-book-open banner-icon"></i>

                <h1>Cursos Técnicos</h1>

                <p>Conheça os cursos disponíveis na ETEC Zona Leste e escolha o seu futuro profissional.</p>

                <a href="#lista" class="btn-banner">Ver Cursos</a>

            </div>

        </section>

        <section class="cards" id="lista">

            <div class="card">
                <i class="fa-solid fa-briefcase"></i>
                <h3>Administração</h3>
                <p>Gestão de empresas, finanças e processos administrativos.</p>
            </div>

            <div class="card">
                <i class="fa-solid fa-truck"></i>
                <h3>Logística</h3>
                <p>Planejamento, transporte e controle de estoques.</p>
            </div>

            <div class="card">
                <i class="fa-solid fa-users"></i>
                <h3>Recursos Humanos</h3>
                <p>Gestão de pessoas, recrutamento e desenvolvimento.</p>
            </div>

            <div class="card">
                <i class="fa-solid fa-scale-balanced"></i>
                <h3>Serviços Jurídicos</h3>
                <p>Rotinas jurídicas, documentos e apoio legal.</p>
            </div>

            <div class="card">
                <i class="fa-solid fa-code"></i>
                <h3>Desenvolvimento de Sistemas</h3>
                <p>Programação, banco de dados e criação de sistemas.</p>
            </div>

        </section>

    </main>

</div>

<script>
function pesquisarCursos() {
    let input = document.getElementById("pesquisa").value.toLowerCase();
    let cards = document.querySelectorAll(".card");

    cards.forEach(card => {
        card.style.display = card.innerText.toLowerCase().includes(input)
            ? "block"
            : "none";
    });
}
</script>

</body>
</html>