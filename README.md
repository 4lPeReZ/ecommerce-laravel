<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Pasos a seguir para el funcionamiento de la aplicación

Antes que nada comentar varios aspectos de la aplicación. Por una parte se me ha hecho imposible la visualizacion de las imagenes tanto las producidas con faker como las subidas por el administrador por lo que nos encontramos con una tienda sin imagenes de los productos, esto no cambia el hecho de que esta aplicacion cumpla con las tareas basicas como son comprar un producto, y su pago mediante PayPal, por la parte del cliente, ademas de registrarse y acceder a su cuenta, y crear, editar y borrar ya sean productos, categorias, subcategorias, marcas, direcciones, cambiar de estado los pedidos que se han realizado en la web y cambiar de rol a los usuarios.

Hemos utilizado esta aplicacion a traves de xampp con un servidor apache y un servidor tambien para nuestra base de datos, en nuestro caso mySQL, por lo que la habrá que configurar varios ficheros. Por otra parte hemos eliminado el fichero .env de nuestro gitignore para que asi este a vuestra disposicion. A continuación se mostraran los pasos que se han seguido repetidas veces para desplegar dicho proyecto de manera local.

- Descarga o clonacion del repositorio
- Configurar, o crear en caso de que no exista, nuestro archivo .env y para el pago a través de Paypal
- Realizar el comando composer install en la terminal dentro de nuestro proyecto
- Realizar el comando npm install en la terminal dentro de nuestro proyecto para la creación de la carpeta node_modules
- Realizar el comando php artisan key:generate, si la key no esta generada en nuestro fichero .env, en la terminal dentro de nuestro proyecto
- Configurar nuestro archivo de vhosts de xampp y apache con un nuevo virtualhost
    Un ejemplo seria el siguiente formato:
    <VirtualHost *>
        DocumentRoot "D:\ecommerce\ecommerce-laravel\public"
        ServerName alvarokpop.com
        <Directory "D:\ecommerce\ecommerce-laravel\public">
            Options All
            AllowOverride All
            Require all granted
        </Directory>
    </VirtualHost>
- Configurar nuestro archivo host para darle nombre a nuestro localhost
- Levantar un servidor apache y un mySQL para la aplicación a través de Xampp
- Realizar el comando php artisan migrate –seed
- Comprobar el correcto funcionamiento en nuestro navegador

Por último, indicar que las credenciales de acceso al usuario con rol de administrador esta en el documento UserSeeder.

Laravel is accessible, powerful, and provides tools required for large, robust applications.

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

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
