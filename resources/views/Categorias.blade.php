<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias - Distribuidora Solar</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite('public/css/Categorias.blade.css')
</head>

<body>

<div class="container">

    <aside class="sidebar">

        <div>

            <div class="logo">
                <div class="logo-icon">
                    <i class="bi bi-sun"></i>
                </div>

                <div class="logo-text">
                    <h2>DISTRIBUIDORA</h2>
                    <span>SOLAR</span>
                </div>
            </div>

            <ul class="menu">

                <li><a href="{{ route('inicial') }}"><i class="bi bi-house-door"></i> Dashboard</a></li>
                <li class="active"><a href="{{ route('categorias') }}"><i class="bi bi-grid"></i> Categorias</a></li>
                <li><a href="{{ route('itens') }}"><i class="bi bi-box"></i> Itens</a></li>
                <li><a href="{{ route('relatorios') }}"><i class="bi bi-bar-chart"></i> Relatórios</a></li>
                <li><a href="{{ route('movimentacoes') }}"><i class="bi bi-arrow-left-right"></i> Movimentações</a></li>
                <li><a href="{{ route('clientes') }}"><i class="bi bi-people"></i> Clientes</a></li>
                <li><a href="{{ route('configuracoes') }}"><i class="bi bi-gear"></i> Configurações</a></li>

            </ul>

        </div>

        <div class="sidebar-footer">
            Energia que transforma o futuro.
        </div>

    </aside>

    <main class="content">

        <header class="topbar">

            <div class="top-actions">

        <a href="{{ route('notificacoes') }}" class="notificacao">
    <i class="bi bi-bell-fill"></i>

    <span class="badge"></span>
</a>

                <div class="perfil">
                    <img src="https://randomuser.me/api/portraits/women/19.jpg">

                    <div>
                        <h4>Beatriz Batista</h4>
                        <span>Administradora</span>
                    </div>
                </div>

            </div>

        </header>

        <section class="categorias-header">

            <div>
                <h1>Categorias</h1>
                <p>Gerencie as categorias de produtos do sistema</p>
            </div>

            <button class="btn-nova">
                <i class="bi bi-plus-lg"></i>
                Nova Categoria
            </button>

        </section>

        <section class="card">

            <table class="table">

                <thead>
                    <tr>
                        <th>Categoria</th>
                        <th>Descrição</th>
                        <th>Itens</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($categorias as $categoria)

                    <tr>
                        <td class="categoria-nome">
                            <i class="bi bi-grid-fill"></i>
                            {{ $categoria->nome }}
                        </td>

                        <td>{{ $categoria->descricao }}</td>
                        <td>{{ $categoria->quantidade_itens }}</td>

                        <td class="actions">
                            <i class="bi bi-pencil-square"></i>
                            <i class="bi bi-trash"></i>
                        </td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="4">Nenhuma categoria cadastrada</td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </section>

    </main>

</div>

</body>
</html>