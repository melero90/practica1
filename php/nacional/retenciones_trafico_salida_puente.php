<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>El Periódico Digital de Cazorla</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.imagen {
		padding: 4px;
    	margin: 0 7px 2px 0;
    	display: inline; 
		float: right;
}
</style>
<script Language="JavaScript">
function ventanita() {
msg1=open("../ventana_emergente.php","Homepage","width=500,height=500");
}
</script>
</head>

<body>

<table width="1168" height="191" border="0">
  <tr>
    <td width="123">&nbsp;</td>
    <td width="904"><a href="http://www.ford.es"><img src="Images/publi_ford_top.png" width="991" height="90" alt="ford" /></a></td>
    <td width="119">&nbsp;</td>
  </tr>
  <tr>
    <td><a href="http://www.ford.es"><img src="Images/publi_ford_izq.png" width="123" height="488" alt="ford" /></a></td>
    <td> <table width="991" height="130" border="0">
  <tr>
    <td width="981"><h1 id="tituloperiodico"> PERIODICO DIGITAL DE CAZORLA <h1></td>
  </tr>
  <tr>
    <td>
    <section id="contenedor_menu">
    <a href="../index.html">Portada | </a> <a href="../local.html"> Local | </a> <a href="../provincia.html"> Provincia | </a> <a href="../nacional.html"> Nacional |</a><a href="../deportes.html"> Deportes </a></section>
    </td>
    
  </tr>
  <tr>
    <td>
    	<nav id="tituloseccion">NACIONAL</nav>
    </td>
  </tr>
</table>
      <table width="990" height="102" border="0">
  <tr>
    <td width="651"><article id=articulonoticia> 
           	  <a href="retenciones_trafico_salida_puente.php" onMouseOver="ventanita(); return true;"><h2 id="titulonoticia"> Retenciones y mal tiempo en las salidas por el puente de Mayo</h2></a>
            <h6 id="infonoticia">  europa press@ABC_Es / madrid Día 01/05/2013 - 10.40h </h6>
            <p id="parrafo">Las principales carreteras de salida de Madrid registran retenciones durante la primera mañana de la operación especial por el puente de mayo, según los datos de la Dirección General de Tráfico (DGT). </p>                
            <p id="parrafo"> En concreto, hay problemas circulatorios en las salida de Madrid por la Autovía de Valencia (A-3) --entre Valdemingómez y Rivas Vaciamadrid, así como entre Arganda y Villarejo de Salvanés--, en la Autovía de Andalucía (A-4) --principalmente en la zona de Aranjuez-- y en la Autovía de Extremadura (A-5) --desde Navalcarnero--. El resto de carreteras permanecen sin incidencias importantes y se circula con normalidad. </p>
            <p><img src="trafico.jpg" width="384" height="262" alt="trafico puente" class="imagen" /> </p>
            <p id="parrafo">La DGT recomienda tener precaución con la niebla en carreteras de Ávila, Burgos, Segovia, Palencia o Zamora, por lo que pide moderar la velocidad y aumentar la distancia de seguridad. La DGT prevé que, coincidiendo con la fiesta nacional del 1 de mayo y la fiesta autonómica del día de la Comunidad de Madrid el jueves 2 de mayo, se produzcan en las carreteras 6 millones de desplazamientos, para lo que ha desplegado un dispositivo especial entre las 15 horas de este martes y las 24 horas del domingo 5 de mayo. </p>
            <p id="parrafo">Los desplazamientos previstos para estos cinco días superan en un 10% a los que se producirían sin días festivos a nivel nacional y en un 35% a los movimientos habituales en la zona centro. En concreto, de los 6 millones de desplazamientos previstos, 1,6 se producirán en la zona centro. Tráfico ha advertido de que, dado que el 2 de mayo sólo es festivo en la Comunidad de Madrid, las carreteras que pueden presentar mayor intensidad circulatoria son las de la Comunidad de Madrid, Castilla la Mancha y Comunidad Valenciana. </p>
             </article>
                <hr />          
          </td>
    <td width="323">
    <section id="contenedor_interes">
            <h3 id="ultimasnoticias">Conectarse</h3>
                                
                                <?php
									if (isset($_SESSION['usuario'])) {
   											 echo "Conectado como: <h3>".$_SESSION['usuario']." </h3>";
											 echo "<a href='../logout.php'>Cerrar Sesión</a>";
								}else{
								?>
                                 <form method='post' action='../login.php'>
									Usuario: <input type='text' name="user"/><br/>
									Contraseña: <input type='password' name="pass"/><br/><br/>
									<input type='submit' value="Entrar"/>
    							</form>
    							<form action="../formulario_registro.html">
    							<input type="submit" value="Registrarse">
   								 </form>
                         		 <?php
								}
								?>
            </section>
    		<section id="contenedor_interes">
    		<p id="noticiasrelacionadas"> Noticias Relacionadas </p>
    	<ul>
        	<li><a href="rey_reaparece_madrid_borussia.php"> El rey reaparece en publico en el Madrid-Borussia </a></li>
            <li><a href="rajoy_promete_ajuste_bruselas.php"> Rajoy promete nuevos ajustes a Bruselas </a></li>
            <li><a href="sindicatos_reclaman_gran_pacto.php"> Los sindicatos reclaman un pacto en la lucha por el Paro </a></li>
            <li><a href="imputan_ocho_empresarios_barcenas.php"> Imputan a ocho empresarios relacionados con el caso Bárcenas </a></li>
        </ul> 
        	</section>
            <section id="publi">
       	  <img src="../Images/publi_movil.png" width="342" height="276" alt="publicidad_samsung" />
          <hr />
          
            <img src="../Images/publi_linea.png" width="342" height="276" alt="linea directa" /></td>
            </section>
  </tr>
  <tr>
    <td>
    <section id="contenedorcomentarios">
    <p id="comentarios">Comentarios de los lectores:</p>
      <?php
	  		include('../mostrar_comentario.php');
			$user=$_SESSION['usuario'];
			$not=$_SERVER['PHP_SELF'];
			mostrar($not);
			if (isset($_SESSION['usuario'])) {
	  ?>
      <hr/>
      <p id="comentarios">¡Participa enviando tu comentario!</p>
      <p>
      	<form method='post' action='../insertar_comentario.php'>
        	<input type='text' name="comentario" size="80" height="100" required/>
        	<input type='hidden' name="usuario" value='<?php echo "$user"?>'/>
        	<input type='hidden' name="noticia" value='<?php echo "$not"?>'/>
        	<input type="submit" name="env_com" value="Enviar Comentario" />
        </form>
      </p>
      <?php
			}
		?>	
      </td>
      </section>
      <hr />
    <td><a href="http://www.almagaia.es/es/"><img src="Images/publi_a_g.png" width="322" height="87" alt="publi_alma" longdesc="http://www.almagaia.es/es/" /></a>
        <hr>
        <a href="http://www.turisnat.es/"><img src="Images/publi_turisnat.png" width="322" height="87" alt="turisnat" longdesc="http://www.turisnat.es/" /></a></td>
  </tr>
</table>

      <table width="990" height="36" border="0">
  			<tr>
    			<td>
                	<section id="contacto"
                	<address id="infoperiodico"> Periodico Digital de Cazorla: Realizado por Antonio Melero Bello para la asignatura TECNOLOGIAS WEB de Ingenieria Informatica UGR </address>
                    <hr />
                    <a href="mailto:periodicocazorleño@gmail.com"> Contacto pinchando aquí </a>
                    </section>
                </td>
 		 	</tr>
	  </table>

      </p>
    </td>
    <td><a href="http://www.ford.es"><img src="Images/publi_ford_der.png" width="123" height="512" alt="ford" /></a></td>
  </tr>
</table>


</body>
</html>
