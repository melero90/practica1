PRACTICA 1 IV
=============




    1 .En primer lugar, debemos darnos de alta en: https://www.openshift.com/
    2. Una vez dado de alta creo mi aplicacion con add application.
    3. Elegimos un lenguaje de programación para nuestra aplicación: yo he elegido PHP 5.3
    4. Añadimos paquetes necesarios como MySql 5.1 y php myadmin 4.0
    5. Damos un nombre a nuestra aplicación: practica1
    6. OpenShift registrará automáticamente el nombre de dominio para su aplicación: -melero90.rhcloud.com
    7. Genero mi clave pública (ssh-keygen) y la inserto para mi aplicación.
    8. creamos la aplicacion
    

Ya tengo creada mi aplicación. Ahora nos descargamos la aplicación a nuestro ordenador con la siguiente orden de git:



Dentro de la carpeta practica tenemos nuestra carpeta php donde vamos a programar la aplicación (index.php)

Terminada de programar la aplicación subimos todos los archivos a "openShift":

git add . 
git commit -a -m "añadido mi aplicación"
git push

Ya está mi aplicación subida a "openshift" funcionando correctamente:

http://practica1iv-melero90.rhcloud.com/
