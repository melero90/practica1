<?php

require 'configuracion.php';

conectar(1);


		if($_POST['user'] && $_POST['pass'] && $_POST['pass2'])

		{

			$user=$_POST['user'];

			$pass=$_POST['pass'];
			
			$pass2=$_POST['pass2'];
			
			
        	// ¿Coinciden las contraseñas?
        			if($pass!=$pass2) {
           					echo "<script>alert('La contraseñas no coinciden');</script>";
            				echo "<script language='javascript'>window.location='formulario_registro.html'</script>;";
        			}else{
            		// Comprobamos si el nombre de usuario ya existía
            		$checkuser = mysql_query("SELECT usuario FROM usuarios WHERE usuario='$user'");
            		$username_exist = mysql_num_rows($checkuser);
            		
            
           			 	if ($username_exist>0) {
                				echo "<script>alert('El usuario ya existe, pruebe otro nombre de usuario!');</script>";
                				echo "<script language='javascript'>window.location='formulario_registro.html'</script>;";
           			 	}else{
                				$query = "INSERT INTO usuarios (usuario, password) VALUES ('$_POST[user]','$_POST[pass]')";
								mysql_query($query) or die(mysql_error());
                				echo "<script>alert('Has sido REGISTRADO correctamente como $user ');</script>";
                				echo "<script>alert('Ahora puede entrar con tu usuario y contraseña. ');</script>";
								echo "<script language='javascript'>window.location='index.php'</script>;";
							}
					}
		}
			
							
?>
                
            



		