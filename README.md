*************************************************************************************************************************************************
Instalación del Sistema
*************************************************************************************************************************************************
Paso 1: Copie el siguiente comando en una consola en la carpeta de su servidor web: 
git clone https://github.com/DavidAyala503/practica-final-php-laravel.git

Paso 2: Su editor de preferido.

Pase 3: Abra una terminal dentro de la carpeta donde tiene guardado su proyecto en el servidor web. (Xampp, Laragon o WamppServer).

Paso 4: Ejecute el siguiente comando: composer install

Paso 5: Cree una base de datos llamada proyectos en su administrador de bases de datos.

Paso 6: Renombre el archivo .env.example a .env

Paso 7: Edite el archivo .env y busque el espacio para las conexiones mysql, el cual le ayudara a configurar la base  de datos, le quedará algo similar a esto: 

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=proyectos
        DB_USERNAME=root
        DB_PASSWORD=

Paso 8: Ejecute el siguiente comando en la consola: php artisan key:generate

Paso 9: Ejecute las migraciones con el siguiente comando: php artisan migrate

Paso 10: Instale npm con el siguiente comando: npm install

Paso 11: Ejecute el siguiente comando: npm run build

*************************************************************************************************************************************************
Autor: David Ayala / martes 31 de octubre de 2023 - El Salvador, San Salvador.
*************************************************************************************************************************************************
Versión de PHP: 8.1.10

Versión de Laraval: 10.29

*************************************************************************************************************************************************