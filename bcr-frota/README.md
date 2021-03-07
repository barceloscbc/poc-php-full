
## Comandos
### Executar
```shell
php artisan serve
```
### Acessar
*  http://127.0.0.1:8000

### Criar Controller

```shell
php artisan make:controller VeiculoController --api
````

### Listar rotas

```shell
php artisan route:list
```

```php
+--------+-----------+---------------------------+------------------+------------------------------------------------+------------+
| Domain | Method    | URI                       | Name             | Action                                         | Middleware |
+--------+-----------+---------------------------+------------------+------------------------------------------------+------------+
|        | GET|HEAD  | /                         |                  | Closure                                        | web        |
|        | GET|HEAD  | api/user                  |                  | Closure                                        | api        |
|        |           |                           |                  |                                                | auth:api   |
|        | GET|HEAD  | api/v1                    |                  | Closure                                        | api        |
|        | GET|HEAD  | api/v1/veiculos           | veiculos.index   | App\Http\Controllers\VeiculoController@index   | api        |
|        | POST      | api/v1/veiculos           | veiculos.store   | App\Http\Controllers\VeiculoController@store   | api        |
|        | GET|HEAD  | api/v1/veiculos/{veiculo} | veiculos.show    | App\Http\Controllers\VeiculoController@show    | api        |
|        | PUT|PATCH | api/v1/veiculos/{veiculo} | veiculos.update  | App\Http\Controllers\VeiculoController@update  | api        |
|        | DELETE    | api/v1/veiculos/{veiculo} | veiculos.destroy | App\Http\Controllers\VeiculoController@destroy | api        |
|        | GET|HEAD  | docs/swagger              |                  | Closure                                        | web        |
+--------+-----------+---------------------------+------------------+------------------------------------------------+------------+
```

* https://medium.com/@bauernfeind.dominik/using-logstash-with-laravel-509c65065d52

* https://medium.com/@sirajul.anik/elastic-apm-for-php-developers-using-apm-with-laravel-baa2700c4c1b