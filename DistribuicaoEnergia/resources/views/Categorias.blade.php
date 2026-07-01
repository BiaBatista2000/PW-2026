<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias - Distribuidora Solar</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('css/Categorias.blade.css') }}">
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
            <p>Energia que transforma o futuro.</p>
        </div>

    </aside>

    <main class="content">

        <header class="topbar">

            <div class="titulo">
                <h1>Categorias</h1>
                <p>Gerencie as categorias de produtos.</p>
            </div>

            <div class="top-actions">

                <a href="{{ route('notificacoes') }}" class="notificacao">
                    <i class="bi bi-bell-fill"></i>
                </a>

                <div class="perfil">
                    <img src="https://randomuser.me/api/portraits/women/19.jpg">
                    <div>
                        <h4>Beatriz Batista</h4>
                        <span>Administradora</span>
                    </div>
                </div>

                <button class="btn-nova" onclick="abrirModal()">
                    <i class="bi bi-plus-lg"></i>
                    Nova Categoria
                </button>

            </div>

        </header>

        <section class="tabela-box">

            <table>
                <thead>
                    <tr>
                        <th>Nome da Categoria</th>
                        <th>Descrição</th>
                        <th>Quantidade de Itens</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($categorias as $categoria)

                    <tr>
                        <td>
                            <div class="categoria-info">
                                <i class="bi bi-grid"></i>
                                {{ $categoria->nome }}
                            </div>
                        </td>

                        <td>{{ $categoria->descricao }}</td>
                        <td>{{ $categoria->quantidade_itens }}</td>

                        <td class="acoes">

                            <button type="button"
                                    class="editar"
                                    onclick="abrirModalEditar(
                                        '{{ $categoria->id }}',
                                        '{{ $categoria->nome }}',
                                        `{{ $categoria->descricao }}`,
                                        '{{ $categoria->quantidade_itens }}'
                                    )">
                                <i class="bi bi-pencil"></i>
                            </button>

                            <form action="{{ route('categorias.destroy', $categoria->id) }}"
                                  method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="excluir"
                                        onclick="return confirm('Deseja excluir esta categoria?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>

                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>

        </section>

    </main>

</div>

<div id="modalCategoria" class="modal">

    <div class="modal-content">

        <h2>Nova Categoria</h2>

        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf

            <input type="text" name="nome" placeholder="Nome da categoria" required>

            <textarea name="descricao" placeholder="Descrição" required></textarea>

            <input type="number" name="quantidade_itens" placeholder="Quantidade de itens" min="0" required>

            <div class="modal-buttons">

                <button type="button" class="btn-cancelar" onclick="fecharModal()">
                    Cancelar
                </button>

                <button type="submit" class="btn-salvar">
                    Salvar
                </button>

            </div>

        </form>

    </div>

</div>

<div id="modalEditar" class="modal">

    <div class="modal-content">

        <h2>Editar Categoria</h2>

        <form id="formEditar" method="POST">
            @csrf
            @method('PUT')

            <input type="text" id="edit_nome" name="nome" required>

            <textarea id="edit_descricao" name="descricao" required></textarea>

            <input type="number" id="edit_quantidade" name="quantidade_itens" min="0" required>

            <div class="modal-buttons">

                <button type="button" class="btn-cancelar" onclick="fecharModalEditar()">
                    Cancelar
                </button>

                <button type="submit" class="btn-salvar">
                    Atualizar
                </button>

            </div>

        </form>

    </div>

</div>

<script>

function abrirModal() {
    document.getElementById('modalCategoria').classList.add('ativo');
}

function fecharModal() {
    document.getElementById('modalCategoria').classList.remove('ativo');
}

function abrirModalEditar(id, nome, descricao, quantidade) {

    document.getElementById('modalEditar').classList.add('ativo');

    document.getElementById('edit_nome').value = nome;
    document.getElementById('edit_descricao').value = descricao;
    document.getElementById('edit_quantidade').value = quantidade;

    document.getElementById('formEditar').action = '/categorias/' + id;
}

function fecharModalEditar() {
    document.getElementById('modalEditar').classList.remove('ativo');
}

window.onclick = function(event) {

    let modal1 = document.getElementById('modalCategoria');
    let modal2 = document.getElementById('modalEditar');

    if (event.target === modal1) {
        fecharModal();
    }

    if (event.target === modal2) {
        fecharModalEditar();
    }
}

</script>

</body>
</html>