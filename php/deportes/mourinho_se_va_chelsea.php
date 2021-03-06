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
    	<nav id="tituloseccion">DEPORTES</nav>
    </td>
  </tr>
</table>
      <table width="990" height="102" border="0">
  <tr>
    <td width="651"><article id=articulonoticia> 
           	  <a href="mourinho_se_va_chelsea.php "<h2 id="titulonoticia"> La prensa británica da por hecho que Mourinho se va al Chelsea</h2></a>
            <h6 id="infonoticia"> EFE 1 de mayo de 2013 10:24h  </h6>
            <p id="parrafo">La prensa británica dio hoy por segura la vuelta de José Mourinho, entrenador al Real Madrid, al Chelsea al final de temporada después de que el portugués declarara anoche en el Bernabéu que quiere estar "donde se le quiera". El entrenador luso, de 50 años, habló al final del encuentro de semifinales de ''Champions'' en el que los blancos cayeron eliminados ante el Borussia Dortmund por 2-0, un resultado que no fue suficiente para compensar la ida, 4-0.</p>                
            <p id="parrafo">"José Mourinho se declara listo para retomar su historia de amor con el Chelsea", titula el diario The Times, que destaca que las palabras del técnico son la "mayor indicación hasta la fecha de que quiere -y espera- volver a Stamford Bridge" </p>
            <p><img src="mourinho.jpg" width="261" height="174" alt="jose mourinho" class="imagen" /> </p>
            <p id="parrafo">El diario sugiere que el poco afecto que Mourinho encuentra en Madrid le hará romper su contrato con el club y marcharse a la Premier y asegura, al mismo tiempo, que su agente, Jorge Mendes, ha cerrado varias reuniones para esta misma semana con el París Saint Germain para discutir el futuro del entrenador.</p>
            <p id="parrafo">The Guardian también menciona al club francés, "con el que ha habido conversaciones", aunque deja más claro que "la base de un acuerdo" con el Chelsea está ya "cimentada" para una posible vuelta del luso a final de temporada.</p>
            <p id="parrafo">Para este diario, la situación del entrenador de los blancos es "insostenible" tras sus "enfrentamientos" con varios jugadores y destaca la advertencia del entorno del entrenador al presidente del Madrid, Florentino Pérez, de que si Mourinho continúa una temporada más, algunos titulares "tendrían que marcharse".</p>
            <p id="parrafo">"Mourinho se ha sentido víctima de una campaña mediática, a menudo virulenta, en los últimos meses. No puede evitar preguntarse qué se esconde detrás de esa actitud en un club que mantiene con los medios una posición a menudo estratégica desde las altas esferas", indica The Guardian.</p>
            <p id="parrafo">Para el sensacionalista The Sun, los comentarios vertidos anoche por el portugués "ponen a más de un club de la Premier en alerta", y señala que, además de los "blues", el Manchester City podría ser otro destino "posible" para el entrenador.</p>
            <p id="parrafo">El llamado "Special One" ocupó el banquillo del Chelsea entre junio de 2004 y septiembre de 2007, y lo abandonó por diferencias con el actual dueño del club, el ruso Roman Abramovich. Pese a todo, aún se mantiene como el técnico que más títulos consiguió con los "blues": dos Premier y tres trofeos en competiciones inglesas, un dato que aún recuerdan los jugadores del equipo londinense.</p>
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
        	<li><a href="guardiola_analiza_barsa_bayern.php"> Guardiola analiza el Barcelona - Bayern </a></li>
            <li><a href="el_bernabeu_si_remonto.php"> El Santiago Bernabeu si remontó </a></li>
            <li><a href="alonso_recuerda_barcelona_2006.php"> Fernando Alonso recuerda carrera de Barcelona 2006 </a></li>
            <li><a href="cajasol_campeon_andaluz_junior.php"> Cajasol campeón de Baloncesto Andaluz Junior </a></li>
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
