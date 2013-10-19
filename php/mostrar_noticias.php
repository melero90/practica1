<?php
include 'configuracion.php';

function muestra_noticia()
    {
		conectar(1);
        $consulta= ("SELECT * FROM noticias");	
		$result=mysql_query($consulta) or die(mysql_error());
		
  		//$total_noticias=mysql_num_rows($result);			
		while ($fila = mysql_fetch_row($result)){ 
			if ($fila > 0){
   			echo "<table border = '1'> \n"; 
   			echo "<tr><td>Id_Not</td><td>Título</td><td>Categoria</td><td>Desarrollo</td><td>Fecha/Hora</td></tr> \n"; 
   			 
      			echo "<tr><td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td></tr> \n"; 
   			echo "</table> \n"; 
			}else{
			echo "¡ No se hay ultimas noticias en el sistema !";  
			}
		}
	}
	
?>