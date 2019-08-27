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
### [ /api/client]
|                               |            |                                           |
| -------------                 | ---------- | ------------------------------------------|
|- Criar Client                 | `POST`     |[api/client](#post-client)                 |
|- Traz todos Clientes          | `GET`      |[api/client](#get-client)                  |
|- Traz um Cliente por telefone | `GET`      |[api/client/{telefone}](#find-client)      |
|- Atualiza Cliente por telefone| `PUT/PATCH`|[api/client/{telefone}](#put-client)       |
|- Deleta Cliente por telefon   | `DELETE`   |[api/client/{telefone}](#delete-client)    |


### [ /api/client_address]
|                                    |            |                                                   |
| ---------------------------------- | -----------|---------------------------------------------------|
|- Vincula um Endereço a um Client   | `POST`     |[api/client_address](#post-client_address)         |
|- Traz todos Clientes               | `GET`      |[api/client_address](#get-client_address)          |
|- Traz um Endereço por id           | `GET`      |[api/client_address/{id}](#find-client_address)    |
|- Atualiza Endereço por id          | `PUT/PATCH`|[api/client_address/{id}](#put-client_address)     |
|- Deleta Endereço por id            | `DELETE`   |[api/client_address/{id}](#delete-client_address)  |

### [ /api/client_address]
|                                    |            |                                                   |
| ---------------------------------- | ---------- |---------------------------------------------------|
|- Vincula um Endereço a um Client   | `POST`     |[api/client_address](#post-client_address)         |
|- Traz todos Endereços              | `GET`      |[api/client_address](#get-client_address)          |
|- Traz um Endereço por id           | `GET`      |[api/client_address/{id}](#find-client_address)    |
|- Atualiza Endereço por id          | `PUT/PATCH`|[api/client_address/{id}](#put-client_address)     |
|- Deleta Endereço por id            | `DELETE`   |[api/client_address/{id}](#delete-client_address)  |

### [ /api/pizza]
|                                     |            |                                 |
| ------------------------------------|----------- |---------------------------------|
|- Cria uma nova Pizza                | `POST`     |[api/pizza](#post-pizza)         |
|- Traz todas Pizzas                  | `GET`      |[api/pizza](#get-pizza)          |
|- Traz uma pizza por id              | `GET`      |[api/pizza/{id}](#find-pizza)    |
|- Atualiza uma pizza por id          | `PUT/PATCH`|[api/pizza/{id}](#put-pizza)     |
|- Deleta uma pizza por id            | `DELETE`   |[api/pizza/{id}](#delete-pizza)  |


### [ /api/ingredient]
|                                     |            |                                           |
| ------------------------------------|------------|-------------------------------------------|
|- Cria um novo ingredient            | `POST`     |[api/ingredient](#post-ingredient)         |
|- Traz todos ingredientes            | `GET`      |[api/ingredient](#get-ingredient)          |
|- Traz um ingrediente por id         | `GET`      |[api/ingredient/{id}](#find-ingredient)    |
|- Atualiza um ingrediente por id     | `PUT/PATCH`|[api/ingredient/{id}](#put-ingredient)     |
|- Deleta um ingrediente por id       | `DELETE`   |[api/ingredient/{id}](#delete-ingredient)  |

### [ /api/pizza_ingredient]
|                                           |            |                                                       |
| ------------------------------------------|------------|-------------------------------------------------------|
|- Vincula um ingredient a uma pizza        | `POST`     |[api/pizza_ingredient](#post-pizza_ingredient)         |
|- Traz os ingredientes de todas pizzas     | `GET`      |[api/pizza_ingredient](#get-pizza_ingredient)          |
|- Traz os ingredientes de uma pizza por id | `GET`      |[api/pizza_ingredient/{id}](#find-pizza_ingredient)    |
|- Atualiza os ingredientes por id          | `PUT/PATCH`|[api/pizza_ingredient/{id}](#put-pizza_ingredient)     |
|- Deleta um ingrediente por id             | `DELETE`   |[api/pizza_ingredient/{id}](#delete-pizza_ingredient)  |

### [ /api/order]
|                                              |            |                                 |
| ---------------------------------------------|----------- |---------------------------------|
|- Cria um pedido de uma pizza para um cliente | `POST`     |[api/order](#post-order)         |
|- Traz todos os pedidos                       | `GET`      |[api/order](#get-order)          |
|- Traz o um pedido por id                     | `GET`      |[api/order/{id}](#find-order)    |
|- Atualiza um pedido por id                   | `PUT/PATCH`|[api/order/{id}](#put-order)     |
|- Deleta um pedido por id                     | `DELETE`   |[api/order/{id}](#delete-order)  |
