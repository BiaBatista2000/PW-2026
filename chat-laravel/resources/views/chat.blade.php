<!DOCTYPE html>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

```
<title>Chat Laravel</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f2f2f2;
        margin: 0;
        padding: 30px;
    }

    .chat-container {
        max-width: 700px;
        margin: 0 auto;
        background: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
    }

    #messages {
        height: 400px;
        overflow-y: auto;
        border: 1px solid #ddd;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 8px;
    }

    .message {
        background: #f0f0f0;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 8px;
    }

    .message strong {
        display: block;
        margin-bottom: 5px;
    }

    .form-group {
        margin-bottom: 10px;
    }

    input {
        width: 100%;
        box-sizing: border-box;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
    }

    button {
        width: 100%;
        padding: 12px;
        background: #2563eb;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background: #1d4ed8;
    }
</style>
```

</head>

<body>

<div class="chat-container">

```
<h1>💬 Chat Laravel</h1>

<div id="messages">

    @foreach ($messages as $message)
        <div class="message">
            <strong>{{ $message->user }}</strong>
            <span>{{ $message->message }}</span>
        </div>
    @endforeach

</div>

<form id="message-form">

    <div class="form-group">
        <input
            type="text"
            id="user"
            placeholder="Seu nome"
            required
        >
    </div>

    <div class="form-group">
        <input
            type="text"
            id="message"
            placeholder="Digite sua mensagem"
            required
        >
    </div>

    <button type="submit">
        Enviar mensagem
    </button>

</form>
```

</div>

<script>
    const form = document.getElementById('message-form');
    const userInput = document.getElementById('user');
    const messageInput = document.getElementById('message');
    const messagesDiv = document.getElementById('messages');

    function adicionarMensagem(user, message) {
        const div = document.createElement('div');

        div.classList.add('message');

        const strong = document.createElement('strong');
        strong.textContent = user;

        const span = document.createElement('span');
        span.textContent = message;

        div.appendChild(strong);
        div.appendChild(span);

        messagesDiv.appendChild(div);

        messagesDiv.scrollTop = messagesDiv.scrollHeight;
    }

    form.addEventListener('submit', async function(event) {
        event.preventDefault();

        const user = userInput.value.trim();
        const message = messageInput.value.trim();

        if (!user || !message) {
            return;
        }

        try {
            const response = await fetch('/messages', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    user: user,
                    message: message
                })
            });

            if (response.ok) {
                messageInput.value = '';
                messageInput.focus();
            } else {
                console.error('Erro ao enviar mensagem.');
            }

        } catch (error) {
            console.error('Erro na requisição:', error);
        }
    });

    function iniciarWebSocket() {
        if (!window.Echo) {
            setTimeout(iniciarWebSocket, 100);
            return;
        }

        window.Echo.channel('chat')
            .listen('.message.sent', (event) => {
                adicionarMensagem(
                    event.message.user,
                    event.message.message
                );
            });
    }

    iniciarWebSocket();
</script>

</body>
</html>
