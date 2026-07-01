<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações - Distribuidora Solar</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('css/Configuracoes.blade.css') }}">
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
                <li><a href="{{ route('relatorios') }}"><i class="bi bi-bar-chart"></i> Relatórios</a></li>
                <li><a href="{{ route('movimentacoes') }}"><i class="bi bi-arrow-left-right"></i> Movimentações</a></li>
                <li><a href="{{ route('clientes') }}"><i class="bi bi-people"></i> Clientes</a></li>
                <li class="active">
                    <a href="{{ route('configuracoes') }}">
                        <i class="bi bi-gear"></i> Configurações
                    </a>
                </li>
            </ul>

        </div>

        <div class="sidebar-footer">
            <p>Energia que transforma o futuro.</p>
        </div>

    </aside>

    <main class="content">

        <div class="config-header">
            <h1>Configurações</h1>
            <p>Gerencie as configurações do sistema.</p>
        </div>

        <div class="config-grid">

            <div class="card">

                <h3><i class="bi bi-building"></i> Dados da Empresa</h3>

                <div class="campo">
                    <label>Nome da Empresa</label>
                    <input type="text" value="Distribuidora Solar">
                </div>

                <div class="campo">
                    <label>E-mail</label>
                    <input type="email" value="contato@solar.com">
                </div>

                <div class="campo">
                    <label>Telefone</label>
                    <input type="text" value="(11) 99999-9999">
                </div>

            </div>

            <div class="card">

                <h3><i class="bi bi-person-circle"></i> Perfil do Usuário</h3>

                <div class="campo">
                    <label>Nome</label>
                    <input type="text" value="Beatriz Batista">
                </div>

                <div class="campo">
                    <label>E-mail</label>
                    <input type="email" value="beatriz@email.com">
                </div>

                <div class="campo">
                    <label>Nova Senha</label>
                    <input type="password" placeholder="********">
                </div>

            </div>

            <div class="card">

                <h3><i class="bi bi-bell"></i> Notificações</h3>

                <div class="opcao">
                    <span>Receber notificações por e-mail</span>
                    <input type="checkbox" checked>
                </div>

                <div class="opcao">
                    <span>Alerta de estoque baixo</span>
                    <input type="checkbox" checked>
                </div>

                <div class="opcao">
                    <span>Notificações do sistema</span>
                    <input type="checkbox">
                </div>

            </div>

            <div class="card">

                <h3><i class="bi bi-palette"></i> Aparência</h3>

                <div class="campo">
                    <label>Tema</label>

                    <select>
                        <option>Claro</option>
                        <option>Escuro</option>
                    </select>
                </div>

                <div class="campo">
                    <label>Idioma</label>

                    <select>
                        <option>Português</option>
                        <option>English</option>
                    </select>
                </div>

            </div>

        </div>

        <div class="acoes">
            <button class="btn-salvar">
                <i class="bi bi-check-circle"></i>
                Salvar Alterações
            </button>
        </div>

    </main>

</div>

</body>
</html>