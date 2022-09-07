0. tener servicios de apache y mysql activados.
1. tener la base de datos llamada: " nexura ", usuario ROOT con contraseña 0000. Sino configurar el archivo ".env" Lineas 15 o 16.
2. usar git bash y ejecutar este comando para descargar el projecto:        git clone git@github.com:alejandromm887/nexura.git
3. dentro de la carpeta que descargó abren el projecto, ejecuten la terminal y dan lo siguiente:        composer install
4. ejecutar en el terminal lo siguiente para crear las tablas, relaciones e inserciones iniciales:      php artisan migrate
5. ejecutar en el terminal lo siguiente para inicializar el proyecto:       php artisan serve

Listo, con todo ello tienen la prueba totalmente completa, espero que les guste. Quedo atento a sus comentarios.
