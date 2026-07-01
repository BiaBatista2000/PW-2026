<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificações</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite(['public/css/Notificacoes.blade.css'])
</head>
<body>

<div class="container">

    <div class="header">
        <div class="title">
            <i class="bi bi-bell-fill"></i>
            <h1>Notificações</h1>
        </div>

        <a href="{{ route('inicial') }}" class="btn-voltar">
            <i class="bi bi-arrow-left"></i>
            Voltar
        </a>
    </div>

    <div id="lista-notificacoes">

        <div class="notificacao nova" onclick="marcarComoLida(this)">
            <div class="icone">
                <i class="bi bi-box-seam-fill"></i>
            </div>

            <div class="conteudo">
                <h3>Novo produto cadastrado</h3>
                <p>Módulo Solar 550W foi adicionado ao estoque.</p>
                <span>Há 5 minutos</span>
            </div>

            <div class="badge">novo</div>
        </div>

        <div class="notificacao alerta" onclick="marcarComoLida(this)">
            <div class="icone">
                <i class="bi bi-exclamation-triangle-fill"></i>
            </div>

            <div class="conteudo">
                <h3>Estoque baixo</h3>
                <p>Inversor Solar X200 com poucas unidades.</p>
                <span>Há 20 minutos</span>
            </div>

            <div class="badge alerta">alerta</div>
        </div>

        <div class="notificacao pedido" onclick="marcarComoLida(this)">
            <div class="icone">
                <i class="bi bi-cart-fill"></i>
            </div>

            <div class="conteudo">
                <h3>Novo pedido recebido</h3>
                <p>Pedido #258 aguardando separação.</p>
                <span>Hoje às 09:30</span>
            </div>

            <div class="badge pedido">pedido</div>
        </div>

    </div>

    <div id="semNotificacoes" class="sem-notificacoes" style="display:none;">
        <i class="bi bi-bell-slash-fill"></i>
        <h2>Nenhuma notificação</h2>
        <p>Todas as notificações foram visualizadas.</p>
    </div>

</div>

<script>
function marcarComoLida(elemento) {
    elemento.style.opacity = "0";
    elemento.style.transform = "scale(0.95)";

    setTimeout(() => {
        elemento.remove();

        const restantes = document.querySelectorAll('.notificacao');

        if (restantes.length === 0) {
            document.getElementById('semNotificacoes').style.display = 'block';
        }
    }, 200);
}
</script>

</body>
</html>