# poc-php-full
Template de projeto php


## Ambiente de desenvolvimento
---

### PHP.ini

```php
memory_limit = 1G

extension_dir = "ext"

extension=curl
extension=fileinfo
extension=gd2
extension=mbstring
extension=openssl
extension=pdo_mysql
extension=pdo_sqlite
extension=sockets
```

### Visual studio code


### Composer
O Composer é uma ferramenta para gerenciamento de dependências em PHP. Ele permite que você declare as bibliotecas das quais seu projeto depende e as gerencia (instala /atualiza) para você.

* https://getcomposer.org/download/
* https://www.jeffgeerling.com/blog/2018/installing-php-7-and-composer-on-windows-10


### Laravel
Quando se fala de framework PHP, um dos nomes mais populares é o Laravel. Esse framework é conhecido por seu sintaxe elegante, que é fácil de aprender e prazeroso de trabalhar.

Com o Laravel, você começa a trabalhar nos seus projetos rapidamente. Você também consegue economizar muito tempo e trabalho com acesso a funções como autenticação de usuário, gerenciamento de seção, e cache.

No geral, o Laravel possui todas as ferramentas que você precisa para construir uma aplicação PHP moderna. 
* https://laravel.com/docs/7.x

Vamos criar um projeto modelo

```shell
composer create-project --prefer-dist laravel/laravel bcr-frota-command "7.*"

```

# Links
* https://medium.com/@arikardnoir/documentando-uma-api-rest-laravel-usando-swagger-2daa24b752e0

* https://github.com/zircote/swagger-php

* https://zircote.github.io/swagger-php/Getting-started.html

* https://laravel.com/docs/7.x