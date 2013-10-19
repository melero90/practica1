<?php
include 'configuracion.php';

//conectar(1);

function mostrar($noticia)
    {
		$not=$noticia;
		conectar(1);
        $consulta= ("SELECT * FROM comentarios WHERE id_noticia='$not' order by fecha_hora");	
		$result=mysql_query($consulta) or die(mysql_error());
		
  		//$totalcomentarios=mysql_num_rows($result);			
		while ($fila = mysql_fetch_row($result)){ 
			if ($fila > 0){
   			echo "<table border = '1'> \n"; 
   			echo "<tr><td>Autor</td><td>Comentario</td><td>Fecha y Hora</td></tr> \n"; 
   			 
      			echo "<tr><td>$fila[1]</td><td>$fila[2]</td><td>.$fila[3]</td></tr> \n"; 
   			echo "</table> \n"; 
			}else{
			echo "¡ No se ha encontrado ningún comentario para esta noticia !";  
			}
		}
	}
	
?>