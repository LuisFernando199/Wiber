<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Imagen Base de Datos
![bdwiber](https://github.com/LuisFernando199/Wiber/assets/78904114/0a0c5e52-030f-4449-a692-4f04ed12ed69)

# Blog de Alquiler de Coches

Este proyecto es un blog de alquiler de coches desarrollado con Laravel. Proporciona una plataforma para compartir información sobre el alquiler de coches, con diferentes categorías y artículos relacionados. La aplicación se conecta a una base de datos MySQL utilizando phpMyAdmin.

## Características

- **Categorías de vehículos:** Los usuarios pueden explorar diferentes categorías de vehículos, como coches y vans.
- **Navegación sencilla:** El blog incluye una navegación intuitiva para acceder a todas las categorías de artículos.
- **Visualización de artículos:** Cada artículo se muestra en una tarjeta con una imagen, título, categoría, descripción, autor y fecha.
- **Base de datos:** El proyecto utiliza una base de datos MySQL administrada con phpMyAdmin para almacenar los datos de los artículos.

## Configuración

Para ejecutar este proyecto en tu entorno local, sigue estos pasos:

1. Clona el repositorio en tu máquina local.
2. Asegúrate de tener instalado PHP y Laravel en tu sistema.
3. Crea una base de datos en MySQL y configura las credenciales de conexión en el archivo `.env`.
4. Ejecuta las migraciones y los seeders para crear la estructura de la base de datos y generar algunos datos de ejemplo.
5. Inicia el servidor de desarrollo de Laravel.

```bash
# Ejecuta las migraciones y los seeders
php artisan migrate --seed

# Inicia el servidor de desarrollo
php artisan serve

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).


If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
