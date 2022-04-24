# RETO GEEK
_Reto Geek._

## Comenzando 🚀

## Ayuda Laravel

Laravel tiene la [documentación](https://laravel.com/docs) y la biblioteca de tutoriales en video más extensa y completa de todos los marcos de aplicaciones web modernos, por lo que es muy fácil comenzar a usar el marco.

Si no tiene ganas de leer, [Laracasts](https://laracasts.com) puede ayudarlo. Laracasts contiene más de 1500 tutoriales en video sobre una variedad de temas que incluyen Laravel, PHP moderno, pruebas unitarias y JavaScript. Mejore sus habilidades explorando nuestra completa biblioteca de videos.

### Pre-requisitos 📋

*  Laragon, XAMPP ...

*  php >= 7.4.19  (recomendable por ser la versión usada)

*  mysql

*  Composer

### Descarga 📥 

_Para descargar esté proyecto debes seguir los siguientes pasos:_

*  Hacer un **FORK** de esté repositorio. (UNA VEZ)

*  Copiar la url del botón clonar.

_En la carpeta /www del Laragon - WAMP ó en la /htdocs del XAMPP, abrir **Git Bash** y ejecutar:_

``` bash
git clone 'url_copiada';
```

*  Copiar la url del botón clonar en el repositorio original o del grupo.

*  Agregar vinculo a upstream **remota** en el repositorio local. (UNA VEZ)

``` bash
git remote add upstream 'url_copiada';
```

### Configuración del proyecto ⚙️

Para configurar el proyecto, lo primero es establecer la conexión a la base de datos, entonces le quitamos el .example al archivo .env.example y modificamos lo siguiente 


```
 DB_CONNECTION=mysql
 DB_HOST=localhost
 DB_PORT=3306
 DB_DATABASE=geek
 DB_USERNAME=root
 DB_PASSWORD=
```
Ahora nos ubicaremos en la capeta raíz del proyecto, abrir **Bash** y ejecutar

``` bash
composer update
```
Una vez terminado el comando anterior, se procederá a ejecutar migraciones y semillas

``` bash
php artisan migrate --seed
```
Creamos el JWT

``` bash
php artisan jwt:secret
```
---
Muchas gracias. 