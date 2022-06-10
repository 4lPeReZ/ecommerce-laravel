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