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
    <a href="../index.php">Portada | </a> <a href="../local.php"> Local | </a> <a href="../provincia.php"> Provincia | </a> <a href="../nacional.php"> Nacional |</a><a href="../deportes.php"> Deportes </a></section>
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
           	  <a href="rey_reaparece_madrid_borussia.php" onMouseOver="ventanita(); return true;"><h2 id="titulonoticia"> El Rey reaparece en público en el partido de fútbol Madrid-Borussia </h2></a>
            <h6 id="infonoticia"> Ana Romero | Actualizado martes 30/04/2013 21:15 horas </h6>
             <p> <img src="rey.jpg" width="640" height="258" alt="rey de españa" /></p>
            <p id="parrafo">El Rey ha reaparecido en un acto público en el estadio Santiago Bernabéu, donde ha presenciado en el palco de autoridades la semifinal de Liga de Campeones entre el Real Madrid y el Borussia de Dortmund. La llegada del monarca a su localidad no ha sido anunciada por megafonía ni ha sonado el himno de España.</p>                
            <p id="parrafo">Ha sido la primera actividad pública del monarca tras su doble operación de hernia del pasado 3 de marzo. Ya la semana pasada retomó las audiencias en Zarzuela, pero ésta ha sido la primera ocasión en la que ciudadanos y periodistas han podido verle fuera del Palacio de la Zarzuela. </p>
            <p id="parrafo">Don Juan Carlos, sonriente, se ha sentado en el centro del palco presidencial del Bernabéu, entre Florentino Pérez y Hans-Joachim Watzke, con quienes ha intercambiado algunas impresiones en tono distendido, informa Europa Press.</p>
            <p id="parrafo">El monarca, que sigue apoyándose en dos muletas para caminar, continúa con sus sesiones diarias de rehabilitación, pero se siente más seguro y mantiene el buen estado de ánimo.</p>
            <p id="parrafo">En principio, se esperaba su reaparición para el día 17 de mayo en la final de la Copa del Rey entre el Real Madrid y el Atlético de Madrid, pero Don Juan Carlos ha decidido, de manera espontánea esta misma mañana, que iba a acudir por la noche al Bernabéu.</p>
            <p id="parrafo">Según fuentes de la Casa del Rey, se ha tratado de una "decisión personal" que ha tomado tras pedir permiso a los médicos debido a su buen estado físico. Desde Zarzuela se quiere restar importancia a esta decisión para que no sea interpretada como un deseo del Rey por reincorporarse con demasiada premura a la vida pública tras la última operación.</p>
            <p id="parrafo">En estos días atrás de audiencias, todas las imágenes del Rey han sido tomadas por un cámara y un fotógrafo institucionales. En ellas, Don Juan Carlos aparece más delgado y con mejor aspecto que antes de la operación. </p>
            <p id="parrafo">El pasado domingo, el Rey recibió a Abdulá II de Jordania, con el que mantiene una excelente relación. Fue el final de una semana que comenzó con el encuentro con José Manuel Caballero Bonald, Premio Cervantes 2012. Un día después se dejó fotografiar con Robert Vico, el primer ministro de Eslovaquia. </p>
            
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
                                 <form method='post' action='./login.php'>
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
        	<li><a href="imputan_ocho_empresarios_barcenas.php"> Imputan a ocho empresarios relacionados caso Bárcenas </a></li>
            <li><a href="rajoy_promete_ajuste_bruselas.php"> Rajoy promete nuevos ajustes a Bruselas </a></li>
            <li><a href="sindicatos_reclaman_gran_pacto.php"> Los sindicatos reclaman un pacto en la lucha por el Paro </a></li>
            <li><a href="retenciones_trafico_salida_puente.php"> Retenciones de hasta 5Km en la salida de Madrid </a></li>
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
