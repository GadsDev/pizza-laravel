Laravel - pizza-laravel
================================
 Api Para Gerenciar uma Pizzaria Fazendo a relação de Pizza Pedidos e Clientes    

Install
------------

Renomear .env.example para .env e configuere o banco de dados

Config Data Base
    DB_CONNECTION=mysql
    DB_HOST=
    DB_PORT=
    DB_DATABASE=
    DB_USERNAME=
    DB_PASSWORD=

Run

    composer install
Run

    php artisan migrate:refresh --seed

REST API - End Points
------------
### [ /api/client
|                               |            |                                        |
| -------------                 | ---------- | ---------------------------------------|
|- Criar Client                 | `POST`     |[/client](#post-client)                 |
|- Traz todos Clientes          | `GET`      |[/client](#get-client)                  |
|- Traz um Cliente por telefone | `GET`      |[/client/{telefone}](#find-client)      |
|- Atualiza Cliente por telefone| `PUT/PATCH`|[/client/{telefone}](#put-client)       |
|- Deleta Cliente por telefon   | `DELETE`   |[/client/{telefone}](#delete-client)    |
