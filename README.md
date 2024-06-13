# Blog con Comentarios - Proyecto Laravel

Este es un proyecto de blog desarrollado en Laravel que permite a los usuarios publicar artículos y dejar comentarios en ellos desarrollado para el curso Desarrollo de Aplicaciones Interactivas II. 
(falta carpetas node_modules y vendor)

## Requisitos

- PHP >= 7.3
- Composer
- Node.js 

## Instalación

1. Clona este repositorio a tu máquina local:

```bash
git clone https://github.com/tu-usuario/blog-laravel.git
```

2. Instala las dependencias de PHP con Composer y de JavaScript:

```bash
composer install 
npm install
```

3. Copia el archivo de configuración `.env.example` a `.env`:

```bash
cp .env.example .env
```

4. Genera una nueva clave de aplicación:

```bash
php artisan key:generate
```

5. Configura tu base de datos en el archivo `.env`:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
```

6. Ejecuta las migraciones de la base de datos para crear las tablas necesarias:

```bash
php artisan migrate
```
