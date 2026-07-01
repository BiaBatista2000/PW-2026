<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimentações - Distribuidora Solar</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('css/Movimentacoes.blade.css') }}">
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

                <li>
                    <a href="{{ route('inicial') }}">
                        <i class="bi bi-house-door"></i>
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="{{ route('categorias') }}">
                        <i class="bi bi-grid"></i>
                        Categorias
                    </a>
                </li>

                <li>
                    <a href="{{ route('itens') }}">
                        <i class="bi bi-box"></i>
                        Itens
                    </a>
                </li>

                <li>
                    <a href="{{ route('relatorios') }}">
                        <i class="bi bi-bar-chart"></i>
                        Relatórios
                    </a>
                </li>

                <li class="active">
                    <a href="{{ route('movimentacoes') }}">
                        <i class="bi bi-arrow-left-right"></i>
                        Movimentações
                    </a>
                </li>

                <li>
                    <a href="{{ route('clientes') }}">
                        <i class="bi bi-people"></i>
                        Clientes
                    </a>
                </li>

                <li>
                    <a href="{{ route('configuracoes') }}">
                        <i class="bi bi-gear"></i>
                        Configurações
                    </a>
                </li>

            </ul>

        </div>

        <div class="sidebar-footer">
            <p>Energia que transforma o futuro.</p>
        </div>

    </aside>

    <main class="content">

        <header class="topo">

            <div>
                <h1>Movimentações</h1>
                <p>Consulte entradas e saídas do estoque.</p>
            </div>

        </header>

        <section class="filtros-box">

            <form action="{{ route('movimentacoes') }}" method="GET" class="filtros">

                <div class="campo">

                    <label>Tipo</label>

                    <select name="tipo">

                        <option value="">Todos</option>

                        <option value="Entrada"
                            {{ request('tipo')=='Entrada' ? 'selected' : '' }}>
                            Entrada
                        </option>

                        <option value="Saída"
                            {{ request('tipo')=='Saída' ? 'selected' : '' }}>
                            Saída
                        </option>

                    </select>

                </div>

                <div class="campo">

                    <label>Data Inicial</label>

                    <input
                        type="date"
                        name="inicio"
                        value="{{ request('inicio') }}"
                    >

                </div>

                <div class="campo">

                    <label>Data Final</label>

                    <input
                        type="date"
                        name="fim"
                        value="{{ request('fim') }}"
                    >

                </div>

                <div class="botoes-filtro">

                    <button type="submit" class="btn-filtro">
                        <i class="bi bi-funnel-fill"></i>
                        Filtrar
                    </button>

                    <a href="{{ route('movimentacoes') }}" class="btn-limpar">
                        <i class="bi bi-arrow-clockwise"></i>
                        Limpar
                    </a>

                </div>

            </form>

        </section>


        <section class="tabela-box">

            <table>

                <thead>

                    <tr>

                        <th>Data</th>
                        <th>Tipo</th>
                        <th>Produto</th>
                        <th>Qtd.</th>
                        <th>Descrição</th>
                        <th>Usuário</th>

                    </tr>

                </thead>

                <tbody>

                @forelse($movimentacoes as $movimentacao)

                    <tr>

                        <td>
                            {{ \Carbon\Carbon::parse($movimentacao->data)->format('d/m/Y') }}
                        </td>

                        <td>

                            @if($movimentacao->tipo=="Entrada")

                                <span class="entrada">
                                    Entrada
                                </span>

                            @else

                                <span class="saida">
                                    Saída
                                </span>

                            @endif

                        </td>

                        <td>{{ $movimentacao->produto }}</td>

                        <td>{{ $movimentacao->quantidade }}</td>

                        <td>{{ $movimentacao->descricao }}</td>

                        <td>{{ $movimentacao->usuario }}</td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="6" style="text-align:center;padding:30px;">

                            Nenhuma movimentação encontrada.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>


            <div class="paginacao">

                {{ $movimentacoes->withQueryString()->links() }}

            </div>

        </section>

    </main>

</div>

</body>
</html>