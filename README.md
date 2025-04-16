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

git clone https://github.com/seu-usuario/nome-do-repositorio.git
cd nome-do-repositorio

    Instale as dependências:

composer install

    Crie o arquivo .env:

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

A API estará disponível em: http://127.0.0.1:8000

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development/)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
