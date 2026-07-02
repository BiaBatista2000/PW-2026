<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
                Home
            </a>

            <a href="#">
                <i class="fa-solid fa-book"></i>
                Cursos
            </a>

            <a href="#">
                <i class="fa-solid fa-newspaper"></i>
                Notícias
            </a>

            <a class="active" href="{{ route('perfil') }}">
                <i class="fa-solid fa-user"></i>
                Perfil
            </a>

        </nav>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                Sair
            </button>
        </form>

    </aside>

    <main>

        <header>

            <div class="usuario">
                <span>Perfil do Aluno</span>
            </div>

        </header>

        <section class="noticias">

            <div class="titulo">
                <h2>Dados do Usuário</h2>
            </div>

            <div class="lista">

                <div class="card">
                    <i class="fa-solid fa-user"></i>
                    <h3>Nome</h3>
                    <p>{{ Auth::user()->name }}</p>
                </div>

                <div class="card">
                    <i class="fa-solid fa-envelope"></i>
                    <h3>Email</h3>
                    <p>{{ Auth::user()->email }}</p>
                </div>

                <div class="card">
                    <i class="fa-solid fa-id-card"></i>
                    <h3>ID</h3>
                    <p>{{ Auth::user()->id }}</p>
                </div>

                <div class="card">
                    <i class="fa-solid fa-calendar"></i>
                    <h3>Conta criada</h3>
                    <p>{{ optional(Auth::user()->created_at)->format('d/m/Y') }}</p>
                </div>

            </div>

        </section>

    </main>

</div>

</body>
</html>