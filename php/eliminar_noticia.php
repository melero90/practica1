<?php

require 'configuracion.php';

conectar(1);

		if($_POST['id'])
		{
			$id=$_POST['id'];
			
            $checknotice = mysql_query("SELECT id_noticia FROM noticias where id_noticia='$id'");
            $notice_exist = mysql_num_rows($checknotice);
            		
            
           			 if ($notice_exist<=0) {
						 		
                				echo "<script>alert('El identificador no existe, compruébelo');</script>";
                				echo "<script language='javascript'>window.location='administrador.php'</script>;";
           			 	}else{
                				$query = "DELETE FROM noticias WHERE id_noticia='$id'";
								mysql_query($query) or die(mysql_error());
                				echo "<script>alert('Has borrado la noticia: $id ');</script>";
								echo "<script language='javascript'>window.location='administrador.php'</script>;";
							}
		}
?>
                
            



		