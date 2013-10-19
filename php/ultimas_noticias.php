<?php
include 'configuracion.php';

//conectar(1);

function mostrar_ultimas()
    {
		conectar(1);
        $consulta= ("SELECT * FROM noticias");	
		$result=mysql_query($consulta) or die(mysql_error());
		
  		//$totalcomentarios=mysql_num_rows($result);			
		while ($fila = mysql_fetch_row($result)){ 
			if ($fila > 0){
      			echo "<li> $fila[1] </li> \n"; 
			}else{
				echo "¡ No se ha encontrado noticias ultimas !";  
			}
		}
	}
	
?>


