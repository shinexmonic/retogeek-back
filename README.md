# RETO GEEK
_Reto Geek._

## Comenzando 馃殌

## Ayuda Laravel

Laravel tiene la [documentaci贸n](https://laravel.com/docs) y la biblioteca de tutoriales en video m谩s extensa y completa de todos los marcos de aplicaciones web modernos, por lo que es muy f谩cil comenzar a usar el marco.

Si no tiene ganas de leer, [Laracasts](https://laracasts.com) puede ayudarlo. Laracasts contiene m谩s de 1500 tutoriales en video sobre una variedad de temas que incluyen Laravel, PHP moderno, pruebas unitarias y JavaScript. Mejore sus habilidades explorando nuestra completa biblioteca de videos.

### Pre-requisitos 馃搵

*  Laragon, XAMPP ...

*  php >= 7.4.19  (recomendable por ser la versi贸n usada)

*  mysql

*  Composer

### Descarga 馃摜 

_Para descargar est茅 proyecto debes seguir los siguientes pasos:_

*  Hacer un **FORK** de est茅 repositorio. (UNA VEZ)

*  Copiar la url del bot贸n clonar.

_En la carpeta /www del Laragon - WAMP 贸 en la /htdocs del XAMPP, abrir **Git Bash** y ejecutar:_

``` bash
git clone 'url_copiada';
```

*  Copiar la url del bot贸n clonar en el repositorio original o del grupo.

*  Agregar vinculo a upstream **remota** en el repositorio local. (UNA VEZ)

``` bash
git remote add upstream 'url_copiada';
```

### Configuraci贸n del proyecto 鈿欙笍

Para configurar el proyecto, lo primero es establecer la conexi贸n a la base de datos, entonces le quitamos el .example al archivo .env.example y modificamos lo siguiente 


```
 DB_CONNECTION=mysql
 DB_HOST=localhost
 DB_PORT=3306
 DB_DATABASE=geek
 DB_USERNAME=root
 DB_PASSWORD=
```
Ahora nos ubicaremos en la capeta ra铆z del proyecto, abrir **Bash** y ejecutar

``` bash
composer update
```
Una vez terminado el comando anterior, se proceder谩 a ejecutar migraciones y semillas

``` bash
php artisan migrate --seed
```
Creamos el JWT

``` bash
php artisan jwt:secret
```
---
Muchas gracias. 