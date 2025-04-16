<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## 📦 API de Usuários - Laravel

Esta é uma API RESTful desenvolvida com Laravel para gerenciamento de usuários. A API permite operações de criação, listagem, edição e remoção de usuários, com suporte a hash de senha e retornos JSON estruturados.

✅ Requisitos

    PHP >= 8.1

    Composer

    MySQL ou outro banco compatível

    Laravel >= 10.x

    WAMP/XAMPP (ou ambiente de desenvolvimento similar)

    Postman (ou outra ferramenta de testes de API)

## 🚀 Instalação e Configuração

Clone o repositório:

    git clone https://github.com/LarissaNSilva/api-usuarios.git


Instale as dependências:

    composer install

Crie o arquivo .env, se não existir:

    cp .env.example .env

Configure o arquivo .env com suas credenciais do banco de dados:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=

Gere a chave da aplicação:

    php artisan key:generate

Crie o banco de dados (se ainda não existir) e execute as migrations:

    php artisan migrate

Inicie o servidor de desenvolvimento:

    php artisan serve
    
Para requisições POST, PUT, DELETE, adicione o token CSRF ou desative temporariamente para testes em routes/web.php.

## 📡 Rotas da API

    Método | Endpoint | Ação
    GET | /csrf-token | Obter Token
    GET | /usuarios | Listar usuários
    POST | /usuarios | Criar usuário
    GET | /usuarios/{id} | Ver um usuário
    PUT | /usuarios/{id} | Atualizar usuário
    DELETE | /usuarios/{id} | Deletar usuário
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
