
Ventas web

Punto de venta creado en php usando laravel, muy siemple aun, vamos en desarrollo

Web oficial del proyecto
Soporte
Se irá actualizando constantemente para ver que realmente este punto de venta contenga todas las funcionalidades de requiera un punto de venta covencional

Documentación
Contribuciones
Actualmente el proyecto se encuentra enpezando por lo que si quieres aportar ere bienvenido

Ejemplos
Sin derechos © 2021
Acerca del projecto
Pasos para inmplementar el proyecto

1-. Descargar/instalar laragon

2-. Decargar/instalar git

3-. Abrir git en el directorio www de laragon

4-. clonar repositorio "git clone https://github.com/ImhoDev/puntodeventaweb.git"

5-. Desde la terminal de laragon/puntodeventaweb instalar las dependencias de PHP "composer install"


npm update vue-loader

composer require laravel-frontend-presets/material-dashboard

npm install vue-loader@^15.9.7 --save-dev --legacy-peer-deps

php artisan ui material

php artisan migrate --seed

6-. Desde la terminal de laragon/puntodeventaweb instalar las dependencias de JS "npm install && npm run dev"

7-. Crear la base de datos "puntodeventaweb" recomiendo usar phpmyadmin para crear la base de datos, o usar la consola de laragon "CREATE DATABASE puntodeventaweb;"

8-. Duplicar y renombrar .env.example a .env

9-. Configurar el archivo .env con los datos de mysql

10-. Reinciar laragon desde la consola con "reload laragon" desde el escritorio principal de laragon que habitualmente es C:\laragon

11-. Vistar "http://puntodeventaweb.test" desde cualquier navegador.

12-. Vemos que sale un error, hay que generar el key ejecuentado "php artisan key:generate"

13-. Sale error porque no hemos realizado las migraciones, para solucionar ejecutar las migraciones.