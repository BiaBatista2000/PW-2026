<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itens</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite(['public/css/Itens.blade.css'])
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

                <form method="GET" action="{{ route('itens') }}">
                    <div class="search-box">
                        <i class="bi bi-search"></i>
                        <input type="text" name="search"
                               placeholder="Buscar item..."
                               value="{{ request('search') }}">
                    </div>
                </form>

                <button class="btn-novo" onclick="abrirModalItem()">
                    <i class="bi bi-plus-lg"></i>
                    Novo Item
                </button>

            </div>
        </div>

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
                                <span class="status verde">Em estoque</span>
                            @else
                                <span class="status amarelo">Baixo estoque</span>
                            @endif
                        </td>

                        <td>R$ {{ number_format($item->preco,2,',','.') }}</td>

                        <td>

                            <button type="button"
                                    class="editar"
                                    onclick="abrirModalEditarItem(@js($item))">
                                <i class="bi bi-pencil-square"></i>
                            </button>

                            <form action="{{ route('itens.destroy',$item->id) }}"
                                  method="POST"
                                  style="display:inline;"
                                  onsubmit="return confirm('Deseja excluir este item?')">

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

    </main>
</div>

<div id="modalItem" class="modal">
    <div class="modal-content">

        <h2>Novo Item</h2>

        <form action="{{ route('itens.store') }}" method="POST">
            @csrf

            <input type="text" name="codigo" placeholder="Código" required>
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="text" name="categoria" placeholder="Categoria" required>
            <input type="text" name="marca" placeholder="Marca" required>
            <input type="number" name="estoque" placeholder="Estoque" required>
            <input type="number" step="0.01" name="preco" placeholder="Preço" required>

            <div class="modal-buttons">
                <button type="button" class="btn-cancelar" onclick="fecharModalItem()">Cancelar</button>
                <button type="submit" class="btn-salvar">Salvar</button>
            </div>

        </form>

    </div>
</div>

<div id="modalEditarItem" class="modal">
    <div class="modal-content">

        <h2>Editar Item</h2>

        <form id="formEditarItem" method="POST">
            @csrf
            @method('PUT')

            <input type="text" id="edit_codigo" name="codigo">
            <input type="text" id="edit_nome" name="nome">
            <input type="text" id="edit_categoria" name="categoria">
            <input type="text" id="edit_marca" name="marca">
            <input type="number" id="edit_estoque" name="estoque">
            <input type="number" step="0.01" id="edit_preco" name="preco">

            <div class="modal-buttons">
                <button type="button" class="btn-cancelar" onclick="fecharModalEditarItem()">Cancelar</button>
                <button type="submit" class="btn-salvar">Atualizar</button>
            </div>

        </form>

    </div>
</div>

<script>
function abrirModalItem() {
    document.getElementById('modalItem').classList.add('ativo');
}

function fecharModalItem() {
    document.getElementById('modalItem').classList.remove('ativo');
}

function abrirModalEditarItem(item) {

    document.getElementById('modalEditarItem').classList.add('ativo');

    document.getElementById('edit_codigo').value = item.codigo;
    document.getElementById('edit_nome').value = item.nome;
    document.getElementById('edit_categoria').value = item.categoria;
    document.getElementById('edit_marca').value = item.marca;
    document.getElementById('edit_estoque').value = item.estoque;
    document.getElementById('edit_preco').value = item.preco;

    document.getElementById('formEditarItem').action = `/itens/${item.id}`;
}

function fecharModalEditarItem() {
    document.getElementById('modalEditarItem').classList.remove('ativo');
}

window.onclick = function(event) {
    if (event.target.id === 'modalItem') fecharModalItem();
    if (event.target.id === 'modalEditarItem') fecharModalEditarItem();
}
</script>

</body>
</html>