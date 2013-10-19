<?php

require 'configuracion.php';

conectar(1);

			
			$query = "INSERT INTO papel (nombre, email, web, comentario, edad, direccion, cpostal, telefono, fecha, duracion) VALUES ('$_POST[name]','$_POST[from]','$_POST[website]','$_POST[comments]','$_POST[edad]','$_POST[direccion]','$_POST[cp]','$_POST[tlf]','$_POST[fechaini]','$_POST[duracion]')";
			mysql_query($query) or die(mysql_error());
			//echo 'El usuario '$_POST[user]' ha sido registrado de manera satisfactoria.<br />';
                				echo 'Ahora recibirá la edición en papel todas la semanas <br />';
								//sleep(10); //redireccionamos despues de 5 segundos.
								

			// Introducir valores asi tambien: VALUES ('$user','$pass')";
	
			// mysql_query($consulta,$conexion) or die(mysql_error());

			//conectar(0);		//Para desconectar.
			
			// Para desconectar. destruir el objeto pdo
			//$db = NULL;
			conectar(0);

?>
                
             <input type="button" value="¡¡¡¡¡Llévame a la pagina principal!!!!!" onClick=" window.location.href='index.php' ">



		