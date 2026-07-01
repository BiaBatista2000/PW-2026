<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios - Distribuidora Solar</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('css/Relatorios.blade.css') }}">
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
                <li><a href="{{ route('categorias') }}"><i class="bi bi-grid"></i> Categorias</a></li>
                <li><a href="{{ route('itens') }}"><i class="bi bi-box"></i> Itens</a></li>
                <li class="active"><a href="{{ route('relatorios') }}"><i class="bi bi-bar-chart"></i> Relatórios</a></li>
                <li><a href="{{ route('movimentacoes') }}"><i class="bi bi-arrow-left-right"></i> Movimentações</a></li>
                <li><a href="{{ route('clientes') }}"><i class="bi bi-people"></i> Clientes</a></li>
                <li><a href="{{ route('configuracoes') }}"><i class="bi bi-gear"></i> Configurações</a></li>
            </ul>
        </div>

        <div class="sidebar-footer">
            <p>Energia que transforma o futuro.</p>
        </div>

    </aside>

    {{-- CONTEÚDO --}}
    <main class="content">

        {{-- HEADER --}}
        <header class="topbar">

            <div class="titulo">
                <h1>Relatórios</h1>
                <p>Acompanhe os indicadores do seu negócio.</p>
            </div>

            <div class="top-actions">

                <form method="GET" action="{{ route('relatorios') }}" class="filtro">
                    <label>Filtro de Período</label>

                    <select name="periodo" onchange="this.form.submit()">
                        <option value="mes" {{ $periodo=='mes' ? 'selected' : '' }}>Este mês</option>
                        <option value="trimestre" {{ $periodo=='trimestre' ? 'selected' : '' }}>Últimos 3 meses</option>
                        <option value="semestre" {{ $periodo=='semestre' ? 'selected' : '' }}>Últimos 6 meses</option>
                    </select>
                </form>

                <a href="{{ route('relatorios.pdf', ['periodo' => $periodo]) }}" class="btn-relatorio">
                    <i class="bi bi-download"></i>
                    Gerar Relatório
                </a>

            </div>

        </header>

        {{-- RESUMO --}}
        <section class="resumo">

            <h3>Resumo do Período</h3>

            <div class="cards">

                <div class="card">
                    <div>
                        <span>Total de Itens</span>
                        <h2>{{ $itens->count() }}</h2>
                    </div>
                    <div class="icone azul">
                        <i class="bi bi-box"></i>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <span>Estoque Total</span>
                        <h2>{{ $itens->sum('estoque') }}</h2>
                    </div>
                    <div class="icone verde">
                        <i class="bi bi-clipboard-check"></i>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <span>Valor Total</span>
                        <h2>R$ {{ number_format($itens->sum('preco'),2,',','.') }}</h2>
                    </div>
                    <div class="icone roxo">
                        <i class="bi bi-cash-stack"></i>
                    </div>
                </div>

            </div>

        </section>

    </main>

</div>

</body>
</html>