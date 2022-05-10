Pre requisitos

Se debe tener instalado los siguientes programas.

1. Xampp o Wamp o Laragon o Appserve, escojer a su preferencia (este debe estar activo mientras se ejecuta el proyecto)
2. Tener instalado como minimo la versión 8.0 de PHP
3. Composer (laravel), cuando este solicite de donde se tomará el PHP, seleccionar la instalada en el paso 2

Pasos para correr el proyecto

1. en una terminal ejecutar el siguiente comando --> git clone https://github.com/YeffersonLinares/Choho
2. después de ejecutar el primer comando ejecutar el siguiente --> cd choho
3. en el directorio /choho crear un archivo --> .env, copiar lo que se encuentra en el archivo .env.example y pegarlo en el .env
4. Crear una base de datos por el puerto 3306 (MySQL) y llamarla choho o si se gusta editar el archivo .env el cual contiene
    las variables de conexión DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD, estas deben coincidir
    con la ubicación de nuestra base de datos y demás parametros para conectar a la base de datos de manera exitosa.
5. Ejecutando una terminal en la carpeta /Choho correr el comando --> php artisan key:generate
6. Al estar en la carpeta /Choho ejecutar el comando --> composer update
7. Correr el comando --> php artisan migrate:fresh --seed
8. cuando se termine de procesar el comando anteriormente ejecutado escribir en esa misma terminal --> php artisan serve --port=8000
9. Abrir el navegador de preferencia y colocar la siguiente url --> 127.0.0.1:8000/api/asesor-index
