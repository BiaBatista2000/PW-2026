<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ETEC Zona Leste - Login</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #7a1210, #1e1e2f);
    }

    .card {
        display: flex;
        width: 900px;
        max-width: 95%;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0,0,0,0.4);
    }

    .left {
        width: 40%;
        background: #941611;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 40px;
        text-align: center;
    }

    .left h1 {
        font-size: 22px;
        margin-bottom: 10px;
    }

    .left p {
        font-size: 14px;
        opacity: 0.9;
    }

    .right {
        width: 60%;
        background: #fff;
        padding: 50px;
    }

    .right h2 {
        margin-bottom: 25px;
        color: #333;
    }

    .input-box {
        margin-bottom: 15px;
    }

    .input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 10px;
        outline: none;
        transition: 0.3s;
    }

    .input:focus {
        border-color: #941611;
        box-shadow: 0 0 8px rgba(148,22,17,0.3);
    }

    .remember {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 20px;
        font-size: 14px;
    }

    .btn {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 10px;
        background: #941611;
        color: white;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn:hover {
        background: #7a1210;
        transform: scale(1.02);
    }

    .error {
        color: red;
        font-size: 12px;
        margin-top: 5px;
    }

    .btn-register {
    width: 100%;
    padding: 12px;
    border: 2px solid #941611;
    border-radius: 10px;
    background: transparent;
    color: #941611;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
    text-decoration: none;
    display: block;
    text-align: center;
    margin-top: 12px;
}

.btn-register:hover {
    background: #941611;
    color: white;
    transform: scale(1.02);
}

</style>

</head>

<body>

<div class="card">

    <div class="left">
        <h1>ETEC ZONA LESTE</h1>
        <p>Sistema Acadêmico</p>
    </div>

    <div class="right">

        <h2>Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input-box">
                <input class="input" type="email" name="email" placeholder="E-mail institucional" required>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="input-box">
                <input class="input" type="password" name="password" placeholder="Senha" required>
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="remember">
                <input type="checkbox" name="remember">
                <label>Lembrar acesso</label>
            </div>

            <button class="btn" type="submit">Entrar</button>
            <a href="{{ route('register') }}" class="btn-register">
            Criar uma conta
            </a>

        </form>

    </div>

</div>

</body>
</html>