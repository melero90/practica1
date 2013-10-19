<?php

require 'configuracion.php';

conectar(1);

		if($_POST['id'] && $_POST['titulo'] && $_POST['cat'] && $_POST['cuerpo'])
		{
			$id=$_POST['id'];
			$titulo=$_POST['titulo'];
			$cat=$_POST['cat'];
			$cuerpo=$_POST['cuerpo'];
			
            $checknotice = mysql_query("SELECT id_noticia FROM noticias where id_noticia='$id'");
            $notice_exist = mysql_num_rows($checknotice);
            		
            
           			 if ($notice_exist<=0) {
                				echo "<script>alert('El identificador no existe, compruebe que existe!');</script>";
                				echo "<script language='javascript'>window.location='administrador.php'</script>;";
           			 	}else{
                				$query = "UPDATE noticias SET titulo='$titulo', categoria='$cat', desarrollo='$cuerpo' WHERE id_noticia='$id'";
								mysql_query($query) or die(mysql_error());
                				echo "<script>alert('Has actualizado la noticia: $titulo ');</script>";
								echo "<script language='javascript'>window.location='administrador.php'</script>;";
							}
		}
?>
                
            



		