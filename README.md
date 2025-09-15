## Projeto Laravel Auth Fortify

## Requisitos

* PHP 8.2 ou superior - Conferir a versão: php -v
* Composer - Conferir a instalação: composer --version
* Node.js 22 ou superior - Conferir a versão: node -v
* GIT - Conferir se está instalado o GIT: git -v


## Objetivo

```sh
Este projeto tem como objetivo praticar uso da autenticação do Laravel Fortify para implementação de autenticação em aplicações web.

```

### O intuito é servir como base para outros projetos em Laravel que necessitem de:
- Cadastro de usuários
- Login e Logout
- Recuperação de senha via e-mail
- Confirmação de e-mail

## 🚀 Tecnologias Utilizadas
- Laravel 12
- Laravel Fortify
- PHP 8.2+
- Composer
- PostgreSQL
- Bootstrap 5.3

### Instalações

* Instalação do Laravel Fortify

 - composer require laravel/fortify
 - php artisan fortify:install
 - php artisan migrate

 ### Traduzir projeto para Portugues no laravel

 - https://github.com/lucascudo/laravel-pt-BR-localization

 - php artisan lang:publish
 - composer require lucascudo/laravel-pt-br-localization --dev
 - php artisan vendor:publish --tag=laravel-pt-br-localization

