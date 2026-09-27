# Projeto Seeder - Laravel

## Sobre o projeto

Este projeto foi desenvolvido em Laravel com o objetivo de aplicar os conceitos de **Database Seeder**, realizando a inserção de dados automaticamente no banco de dados através dos Seeders do Laravel.

## Tecnologias utilizadas

* PHP
* Laravel
* MySQL
* phpMyAdmin
* Composer

## Banco de dados

Banco utilizado:

`bd_seeder`

Tabela principal:

`fornecedores`

## Dados inseridos pelo Seeder

O `FornecedorSeeder` realiza a inserção dos seguintes fornecedores:

| Nome   | Site          | UF | E-mail                                                |
| ------ | ------------- | -- | ----------------------------------------------------- |
| Ana    | ana.com.br    | SP | [contato@ana.com.br](mailto:contato@ana.com.br)       |
| Jayane | jayane.com.br | SP | [contato@jayane.com.br](mailto:contato@jayane.com.br) |

## Como executar o projeto

1. Clone o repositório.
2. Entre na pasta do projeto:

```bash
cd Seeder
```

3. Instale as dependências:

```bash
composer install
```

4. Configure o arquivo `.env` com os dados do banco de dados.

5. Execute as migrations:

```bash
php artisan migrate
```

6. Execute o Seeder:

```bash
php artisan db:seed
```

## Seeder

O projeto utiliza o arquivo:

```text
database/seeders/FornecedorSeeder.php
```

O `DatabaseSeeder.php` chama o `FornecedorSeeder`, permitindo executar os dados através do comando:

```bash
php artisan db:seed
```

## Vídeo de apresentação

**Link do vídeo:**

https://drive.google.com/drive/folders/1P-NCDSzuoH2DRV9LHrKRMrw_a8h1VbBF?usp=sharing

## Projeto acadêmico

Projeto desenvolvido para atividade acadêmica sobre **Database Seeding no Laravel**.
