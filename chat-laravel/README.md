# Chat Laravel com WebSocket

## 📌 Sobre o projeto

Este projeto foi desenvolvido em Laravel com o objetivo de criar um sistema de chat com comunicação em tempo real utilizando WebSocket.

A aplicação permite que usuários autenticados enviem e recebam mensagens instantaneamente, sem a necessidade de atualizar a página manualmente.

O projeto foi desenvolvido seguindo as etapas apresentadas no tutorial disponibilizado pelo professor.

---

## 🚀 Tecnologias utilizadas

* PHP
* Laravel
* Laravel Breeze
* Laravel Chatify
* WebSocket
* Pusher
* MySQL
* Blade
* JavaScript
* Vite
* Tailwind CSS

---

## 📋 Pré-requisitos

Para executar o projeto é necessário ter instalado:

* PHP
* Composer
* Node.js e npm
* MySQL
* XAMPP ou outro servidor local
* Git

---

## 📂 Estrutura do projeto

O projeto possui a estrutura padrão do Laravel, incluindo:

```text
chat-laravel/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── package-lock.json
├── phpunit.xml
└── vite.config.js
```

---

## ⚙️ Instalação

### 1. Clonar o projeto

```bash
git clone https://github.com/BiaBatista2000/PW-2026.git
```

Depois acessar a pasta:

```bash
cd PW-2026/chat-laravel
```

### 2. Instalar as dependências do PHP

```bash
composer install
```

### 3. Instalar as dependências do JavaScript

```bash
npm install
```

### 4. Configurar o arquivo `.env`

Copiar o arquivo `.env.example` para `.env`:

```bash
cp .env.example .env
```

No Windows, também pode ser utilizado:

```powershell
Copy-Item .env.example .env
```

Depois, configurar no `.env` os dados do banco de dados e as configurações necessárias para o serviço de WebSocket/Pusher.

> O arquivo `.env` não deve ser enviado para o GitHub, pois pode conter informações privadas, como senhas e chaves de serviços.

### 5. Gerar a chave da aplicação

```bash
php artisan key:generate
```

---

## 🗄️ Banco de dados

Criar o banco de dados MySQL utilizado pelo projeto e configurar as informações no arquivo `.env`.

Depois executar as migrations:

```bash
php artisan migrate
```

As migrations são responsáveis pela criação das tabelas necessárias para o funcionamento da aplicação.

---

## 💬 Chatify

O projeto utiliza o Laravel Chatify para disponibilizar a interface e as funcionalidades do sistema de mensagens.

O Chatify permite a comunicação entre usuários e utiliza os recursos configurados no projeto para o funcionamento das mensagens em tempo real.

---

## 🔌 WebSocket e Pusher

A comunicação em tempo real do chat utiliza WebSocket, permitindo uma conexão persistente entre o navegador e o servidor.

O Pusher é utilizado como serviço de comunicação para o envio e recebimento dos eventos de mensagens.

Quando uma mensagem é enviada, um evento é disparado e os usuários conectados podem receber a atualização sem precisar recarregar a página.

---

## ▶️ Executando o projeto

Para iniciar o servidor Laravel:

```bash
php artisan serve
```

O projeto poderá ser acessado pelo endereço:

```text
http://localhost:8000
```

Para executar os recursos do frontend:

```bash
npm run dev
```

---

## 👥 Testando o chat

Para testar a comunicação em tempo real:

1. Criar ou utilizar dois usuários cadastrados no sistema.
2. Entrar com o primeiro usuário em uma janela do navegador.
3. Entrar com o segundo usuário em outra janela ou navegador.
4. Abrir a área do Chatify.
5. Selecionar o outro usuário.
6. Enviar uma mensagem.
7. Verificar o recebimento da mensagem pelo outro usuário.
8. Responder utilizando o segundo usuário.
9. Verificar que as mensagens são atualizadas em tempo real, sem atualização manual da página.

---

## 🔄 Funcionamento do WebSocket

O fluxo básico da comunicação é:

```text
Usuário 1
   ↓
Envia mensagem
   ↓
Laravel
   ↓
Evento da mensagem
   ↓
WebSocket / Pusher
   ↓
Usuário 2
   ↓
Mensagem recebida em tempo real
```

Dessa forma, a aplicação mantém a comunicação entre os usuários de maneira dinâmica.

---

## 🧪 Testes

O projeto também possui testes automatizados na pasta:

```text
tests/
```

Os testes podem ser executados utilizando:

```bash
php artisan test
```

---

## 🎥 Demonstração

Foi produzido um vídeo demonstrando o desenvolvimento e o funcionamento do projeto.

No vídeo são apresentados:

* Estrutura do projeto;
* Código-fonte;
* Configurações utilizadas;
* Funcionamento do chat;
* Comunicação entre dois usuários;
* Envio e recebimento de mensagens;
* Funcionamento da comunicação em tempo real utilizando WebSocket.

**Link do vídeo:**
[https://drive.google.com/drive/folders/1w_IxqALNqz-rJ8BWL6Yydue-AT5vS6t2?usp=sharing]

---

## 👩‍💻 Autora

**Beatriz Batista**

Projeto desenvolvido para a atividade de Desenvolvimento de Chat no Laravel – WebSocket.
