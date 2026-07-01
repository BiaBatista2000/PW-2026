<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('css/Clientes.blade.css') }}">
</head>
<body>

<div class="container">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div>
            <div class="logo">
                <div class="logo-icon"><i class="bi bi-sun"></i></div>
                <div class="logo-text">
                    <h2>DISTRIBUIDORA</h2>
                    <span>SOLAR</span>
                </div>
            </div>

            <ul class="menu">
                <li class="active">
                    <a href="{{ route('clientes') }}">
                        <i class="bi bi-people"></i> Clientes
                    </a>
                </li>
            </ul>
        </div>

        <div class="sidebar-footer">
            Energia que transforma o futuro.
        </div>

    </aside>

    <!-- CONTEÚDO -->
    <main class="content">

        <div class="header">
            <div>
                <h1>Clientes</h1>
                <p>Gerencie seus clientes</p>
            </div>

            <button class="btn-novo" onclick="openCreateModal()">
                <i class="bi bi-plus-circle"></i> Novo Cliente
            </button>
        </div>

        <!-- PESQUISA -->
        <form method="GET" action="{{ route('clientes') }}">
            <div class="search">
                <i class="bi bi-search"></i>
                <input type="text" name="search"
                       placeholder="Pesquisar cliente..."
                       value="{{ request('search') }}">
            </div>
        </form>

        <!-- TABELA -->
        <div class="table-box">

            <table>
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Cidade</th>
                    <th>Ações</th>
                </tr>
                </thead>

                <tbody>

                @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    <td>{{ $cliente->cidade }}</td>

                    <td class="actions">

                        <button class="btn edit"
                                onclick="openEditModal(
                                    {{ $cliente->id }},
                                    `{{ $cliente->nome }}`,
                                    `{{ $cliente->email }}`,
                                    `{{ $cliente->telefone }}`,
                                    `{{ $cliente->cidade }}`
                                )">
                            <i class="bi bi-pencil"></i>
                        </button>

                        <button class="btn delete"
                                onclick="openDeleteModal({{ $cliente->id }})">
                            <i class="bi bi-trash"></i>
                        </button>

                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>

        </div>

    </main>

</div>

<!-- ================= MODAIS ================= -->

<!-- CREATE -->
<div id="createModal" class="modal">
    <div class="modal-content">
        <h2>Novo Cliente</h2>

        <form method="POST" action="{{ route('clientes.store') }}">
            @csrf

            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="telefone" placeholder="Telefone">
            <input type="text" name="cidade" placeholder="Cidade">

            <button type="submit">Salvar</button>
            <button type="button" onclick="closeCreateModal()">Cancelar</button>
        </form>
    </div>
</div>

<!-- EDIT -->
<div id="editModal" class="modal">
    <div class="modal-content">
        <h2>Editar Cliente</h2>

        <form method="POST" id="editForm">
            @csrf
            @method('PUT')

            <input type="text" id="edit_nome" name="nome">
            <input type="text" id="edit_email" name="email">
            <input type="text" id="edit_telefone" name="telefone">
            <input type="text" id="edit_cidade" name="cidade">

            <button type="submit">Atualizar</button>
            <button type="button" onclick="closeEditModal()">Cancelar</button>
        </form>
    </div>
</div>

<!-- DELETE -->
<div id="deleteModal" class="modal">
    <div class="modal-content">
        <h2>Deseja excluir este cliente?</h2>

        <form method="POST" id="deleteForm">
            @csrf
            @method('DELETE')

            <button type="submit">Sim</button>
            <button type="button" onclick="closeDeleteModal()">Não</button>
        </form>
    </div>
</div>

<!-- ================= SCRIPT ================= -->
<script>
function openCreateModal(){
    document.getElementById('createModal').style.display = 'flex';
}
function closeCreateModal(){
    document.getElementById('createModal').style.display = 'none';
}

function openEditModal(id, nome, email, telefone, cidade){
    document.getElementById('editModal').style.display = 'flex';

    document.getElementById('edit_nome').value = nome;
    document.getElementById('edit_email').value = email;
    document.getElementById('edit_telefone').value = telefone;
    document.getElementById('edit_cidade').value = cidade;

    document.getElementById('editForm').action = '/clientes/' + id;
}

function closeEditModal(){
    document.getElementById('editModal').style.display = 'none';
}

function openDeleteModal(id){
    document.getElementById('deleteModal').style.display = 'flex';
    document.getElementById('deleteForm').action = '/clientes/' + id;
}

function closeDeleteModal(){
    document.getElementById('deleteModal').style.display = 'none';
}
</script>

</body>
</html>