# Gestión de productos

Aplicación web para administrar un inventario de productos. Permite listar, crear, editar y eliminar productos, además de consultar su precio, existencias y estado de stock.

## Requisitos

- PHP 8.3 o superior, con las extensiones que requiere Laravel (incluida `pdo_sqlite` para la base de datos predeterminada).
- Composer.
- Node.js y npm.
- Git, si vas a descargar el proyecto desde un repositorio.

## Instalación en otro equipo

1. Copia o clona el proyecto y abre una terminal en la carpeta que contiene `artisan` y `composer.json`.

   ```bash
   git clone <URL_DEL_REPOSITORIO>
   cd <CARPETA_DEL_PROYECTO>
   ```

   Si recibiste una copia del proyecto en vez de usar Git, abre la terminal directamente en esa carpeta.

2. Instala las dependencias, crea la configuración local, genera la clave de Laravel, prepara la base de datos y compila los recursos:

   ```bash
   composer run setup
   ```

   Este comando instala las dependencias de PHP y JavaScript, crea `.env` a partir de `.env.example` si todavía no existe, genera `APP_KEY`, ejecuta las migraciones y compila los archivos del frontend.

3. Inicia la aplicación:

   ```bash
   composer run dev
   ```

4. Abre la dirección que muestre la terminal; normalmente es:

   ```text
   http://localhost:8000
   ```

   La ruta principal redirige al listado de productos.

## Base de datos

La configuración inicial usa SQLite. El comando de instalación ejecuta las migraciones, que crean la base de datos y las tablas necesarias, incluida la de productos. Los datos se guardan localmente en `database/database.sqlite`.

Para cambiar de base de datos, configura las variables `DB_*` en `.env` según la conexión elegida y asegúrate de que esa base de datos exista antes de ejecutar:

```bash
php artisan migrate
```

No compartas el archivo `.env`: contiene configuración local y puede incluir datos sensibles. En otro equipo, crea uno desde `.env.example` con `composer run setup` o copia el archivo de ejemplo manualmente.

## Comandos útiles

| Comando | Descripción |
| --- | --- |
| `composer run dev` | Inicia el servidor local y las herramientas de desarrollo. |
| `php artisan migrate` | Ejecuta las migraciones pendientes. |
| `php artisan migrate:status` | Muestra el estado de las migraciones. |
| `npm run dev` | Inicia Vite para trabajar en los recursos del frontend. |
| `npm run build` | Compila los recursos del frontend para producción. |
| `composer run test` | Ejecuta las pruebas del proyecto. |

## Estructura principal

- `app/Models/` — modelos de Eloquent, como `Product`.
- `app/Http/Controllers/` — controladores de las páginas y acciones.
- `app/Services/` — lógica de acceso y cambios de productos.
- `database/migrations/` — estructura de las tablas.
- `resources/views/` — vistas Blade de la aplicación.
- `routes/web.php` — rutas web.
