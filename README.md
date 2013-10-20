PRACTICA 1 IV
=============

Crear un aplicación y desplegarla en un PaaS. Usar cualquier lenguaje conocido. El objetivo de la aplicación puede 
estar relacionado con la asignatura y su material, por ejemplo, un interfaz REST al material de la misma o una mini-app
para seleccionar PaaS basado en el lenguaje o los requisitos.

Me he decantado por openshift dado que para mi aplicación desarrollada en html y php ofrece el soporte necesario asi como 
la base de datos MySql y un sistema gestor de bases de datos como PhpMyAdmin, con los que me encuentro familiarizado.

Estos son los pasos más importantes para la realización de la práctica:


1. En primer lugar, debemos darnos de alta en: https://www.openshift.com/
2. Una vez dado de alta creo mi aplicacion con add application.
3. Elegir un lenguaje de programación para desarrollar la aplicacion: PHP 5.3
4. Añadimos paquetes necesarios como MySql 5.1 y php myadmin 4.0
5. Damos un nombre a nuestra aplicación: practica1
6. OpenShift registrará automáticamente el nombre de dominio para su aplicación: -melero90.rhcloud.com
7. Genero mi clave pública con la orden ssh-keygen y la inserto para mi aplicación.
8. Por último, creamos la aplicacion.
    

Creada la aplicación. Descargamos la aplicación a nuestro ordenador con la siguiente orden de git:

git clone ssh://525feb215973ca92a6000071@practica1iv-melero90.rhcloud.com/~/git/practica1iv.git/

En la carpeta descargada tenemos una carpeta php donde vamos a incluir en este caso la aplicación de un periodico desarrollado
para otra asignatura.

Ahora subimos todos los archivos a OpenShift mediante las siguientes ordenes:

1. git add . 
2. git commit -a -m "Aniado la aplicacion"
3. git push

Ya está mi aplicación subida a OpenShift funcionando, simplemente con el link siguiente:

http://practica1iv-melero90.rhcloud.com/
