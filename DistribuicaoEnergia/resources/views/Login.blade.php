<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distribuição de Energia Fotovoltaica</title>
    @vite('public/css/login.blade.css')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

    <div class="container">

        <div class="login-box">

            <div class="logo">
                <i class="fa-solid fa-solar-panel"></i>
            </div>

            <h1>Distribuição de Energia Fotovoltaica</h1>

            <p>Acesse sua conta para gerenciar o sistema</p>
<form method="POST" action="/">
    @csrf

    <div class="input-group">
        <i class="fa-solid fa-user"></i>
        <input type="text" name="usuario" placeholder="Usuário">
    </div>

    <div class="input-group">
        <i class="fa-solid fa-lock"></i>
        <input type="password" name="senha" placeholder="Senha">
    </div>

    <button type="submit">
        ENTRAR
    </button>

</form>
        </div>

    </div>

</body>
</html>