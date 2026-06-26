<!DOCTYPE html>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itens</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite('public/css/Itens.blade.css')


</head>
<body>

<div class="container">
<aside class="sidebar">

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
        <li class="active"><a href="{{ route('itens') }}"><i class="bi bi-box"></i> Itens</a></li>
        <li><a href="{{ route('relatorios') }}"><i class="bi bi-bar-chart"></i> Relatórios</a></li>
        <li><a href="{{ route('movimentacoes') }}"><i class="bi bi-arrow-left-right"></i> Movimentações</a></li>
        <li><a href="{{ route('clientes') }}"><i class="bi bi-people"></i> Clientes</a></li>
        <li><a href="{{ route('configuracoes') }}"><i class="bi bi-gear"></i> Configurações</a></li>
    </ul>

</aside>

<main class="content">

    <div class="header">

        <div>
            <h1>Itens</h1>
            <p>Veja e gerencie todos os produtos cadastrados.</p>
        </div>

        <div class="acoes">

            <form action="{{ route('itens') }}" method="GET">
                <div class="search-box">
                    <i class="bi bi-search"></i>

                    <input
                        type="text"
                        name="search"
                        placeholder="Buscar item..."
                        value="{{ request('search') }}"
                    >
                </div>
            </form>

            <a href="{{ route('itens.create') }}" class="btn-novo">
                <i class="bi bi-plus-lg"></i>
                Novo Item
            </a>

        </div>

    </div>

    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-container">

        <table>

            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Marca</th>
                    <th>Estoque</th>
                    <th>Status</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>

            @forelse($itens as $item)

                <tr>

                    <td>{{ $item->codigo }}</td>
                    <td>{{ $item->nome }}</td>
                    <td>{{ $item->categoria }}</td>
                    <td>{{ $item->marca }}</td>
                    <td>{{ $item->estoque }}</td>

                    <td>
                        @if($item->estoque > 10)
                            <span class="status verde">
                                Em estoque
                            </span>
                        @else
                            <span class="status amarelo">
                                Baixo estoque
                            </span>
                        @endif
                    </td>

                    <td>
                        R$ {{ number_format($item->preco,2,',','.') }}
                    </td>

                    <td>

                        <a href="{{ route('itens.edit',$item->id) }}">
                            <i class="bi bi-pencil-square editar"></i>
                        </a>

                        <form
                            action="{{ route('itens.destroy',$item->id) }}"
                            method="POST"
                            style="display:inline;"
                            onsubmit="return confirm('Deseja excluir este item?')"
                        >
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn-delete">
                                <i class="bi bi-trash excluir"></i>
                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="8" class="sem-registro">
                        Nenhum item encontrado.
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    <div class="pagination-container">
        {{ $itens->links() }}
    </div>

</main>
</div>

</body>
</html>
