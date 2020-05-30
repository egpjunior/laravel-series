1 - Realizar Download do projeto pelo endereço -> https://github.com/egpjunior/laravel-series <br>
2 - Criar o Banco de Dados series <br>
    create database series; <br>
3 - Selecionar o Banco de Dados series 
    use series; <br>
4 - Adicionar o projeto 'laravel-series' no seu editor PHP <br>
5 - Renomear o arquivo .ev.example para .env <br>
6 - No arquivo .env alterar o Banco de Dados MYSQL de laravel para series e salvar o arquivo <br>
7 - Alterar usuário e senha do Mysql para o seu login de acesso. No exemplo está como usuário root e sem senha. <br>
8 - Entrar no diretório no meu por exemplo: c:\wamp64\www\laravelSeries> <br>
9 - Executar o comando dentro do diretório c:\wamp64\www\laravelSeries> php artisan migrate <br>
10 - Caso apareça a mensagem: No application encryption key has been specified que em português seria ... "Nenhuma chave de criptografia de aplicativo foi especificada" <br>
11 - Clique em Generate app key <br>
12 - Entre no cmd é execute o comando php artisan key:generate <br>
13 - Feche o navegador <br>
14 - Executar o comando dentro do diretório c:\wamp64\www\laravelSeries> php artisan serve <br>
15 - Abra um navegador e entre no seu ambiente <br>
16 - http://127.0.0.1:8000/series
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
