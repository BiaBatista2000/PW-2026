<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distribuidora Solar</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite('public/css/Inicial.blade.css')
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

                <li class="active"><a href="{{ route('inicial') }}"><i class="bi bi-house-door"></i> Dashboard</a></li>
                <li><a href="{{ route('categorias') }}"><i class="bi bi-grid"></i> Categorias</a></li>
                <li><a href="{{ route('itens') }}"><i class="bi bi-box"></i> Itens</a></li>
                <li><a href="{{ route('relatorios') }}"><i class="bi bi-bar-chart"></i> Relatórios</a></li>
                <li><a href="{{ route('movimentacoes') }}"><i class="bi bi-arrow-left-right"></i> Movimentações</a></li>
                <li><a href="{{ route('clientes') }}"><i class="bi bi-people"></i> Clientes</a></li>
                <li><a href="{{ route('configuracoes') }}"><i class="bi bi-gear"></i> Configurações</a></li>

            </ul>

        </div>

        <div class="sidebar-footer">
            <p>Energia que transforma o futuro.</p>
        </div>

    </aside>

    <main class="content">

        <header class="topbar">

            <div class="top-actions">

                <a href="{{ route('notificacoes') }}" class="notificacao">
                    <i class="bi bi-bell-fill"></i>
                </a>

                <div class="perfil">
                    <img src="https://randomuser.me/api/portraits/women/19.jpg" alt="Perfil">

                    <div>
                        <h4>Beatriz Batista</h4>
                        <span>Administradora</span>
                    </div>
                </div>

            </div>

        </header>

        <section class="banner">

            <div class="banner-text">
                <h3>Bem-vindo ao</h3>
                <h1>Painel Solar</h1>

                <p>Gestão completa de produtos e operações para um futuro sustentável.</p>
            </div>

        </section>

        <section class="cards">

            <div class="card">
                <div class="card-icon verde">
                    <i class="bi bi-box-seam-fill"></i>
                </div>

                <div class="card-info">
                    <h4>Total de Itens</h4>
                    <h2>256</h2>
                    <span>Produtos cadastrados</span>
                </div>
            </div>

            <div class="card">
                <div class="card-icon amarelo">
                    <i class="bi bi-folder-fill"></i>
                </div>

                <div class="card-info">
                    <h4>Categorias</h4>
                    <h2>12</h2>
                    <span>Grupos de produtos</span>
                </div>
            </div>

            <div class="card">
                <div class="card-icon verde">
                    <i class="bi bi-check-circle-fill"></i>
                </div>

                <div class="card-info">
                    <h4>Em Estoque</h4>
                    <h2>1.248</h2>
                    <span>Unidades disponíveis</span>
                </div>
            </div>

            <div class="card">
                <div class="card-icon laranja">
                    <i class="bi bi-clock-fill"></i>
                </div>

                <div class="card-info">
                    <h4>Pedidos Pendentes</h4>
                    <h2>28</h2>
                    <span>Aguardando envio</span>
                </div>
            </div>

        </section>

        <section class="dashboard">

            <div class="grafico">

                <h3>Itens por Categoria</h3>

                <div class="pizza"></div>

                <ul>
                    <li>Módulos Solares</li>
                    <li>Inversores</li>
                    <li>Estruturas</li>
                    <li>Cabos e Conectores</li>
                    <li>Acessórios</li>
                </ul>

            </div>

                <div class="estoque">

    <h3>Status do Estoque</h3>

    <div class="linha">
        <span>Disponível</span>

        <div class="barra">
            <div class="barra-verde"></div>
        </div>
    </div>

    <div class="linha">
        <span>Baixo Estoque</span>

        <div class="barra">
            <div class="barra-amarela"></div>
        </div>
    </div>

    <div class="linha">
        <span>Esgotado</span>

        <div class="barra">
            <div class="barra-vermelha"></div>

                <ul class="grafico-two">
                    <li class="grafico-li">Maior volume: Painéis Solares</li>
                    <li class="grafico-li">Alta demanda: Inversores</li>
                    <li class="grafico-li">Estoque crítico: Baterias</li>
                    <li class="grafico-li">Reposição programada</li>
                    <li class="grafico-li">Produtos em promoção</li>
                </ul>
 
        </div>
    </div>

</div>
                    

            </div>

        </section>

    </main>

</div>

</body>
</html>