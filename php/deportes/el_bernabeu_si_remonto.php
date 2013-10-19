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
           	  <a href="el_bernabeu_si_remonto.php" onMouseOver="ventanita(); return true;"><h2 id="titulonoticia"><h2> El Bernabéu sí remontó </h2></a>
            <h6 id="infonoticia"> Juan I. García-Ochoa 01/05/13 - 12:15. </h6>
            <p><img src="bernabeu.png" width="630" height="279" alt="santiago bernabeu" /></p>
            <p id="parrafo">El Real Madrid se quedó a un centímetro de conquistar el Everest, pero no se puede decir que fuera por falta de aliento. Porque la afición del equipo blanco, ayer sí, siguió al pie de la letra el manual de las remontadas. El Bernabéu fue una caldera y la hinchada empujó al equipo desde mucho antes de que empezara el partido.

Eran las seis y media de la tarde y la calle Concha Espina estaba tomada por 7.000 aficionados que creían en la remontada. Un grito de guerra a la espera del autobús de los jugadores: “¡Sí, se puede!”.</p>                
            <p id="parrafo">a marea blanca era imparable y el bus del equipo, al filo de las siete y media, se quedó bloqueado ante la muchedumbre. Hasta los jugadores sacaron sus cámaras para grabar el momento, puede que usual en las grandes remontadas de los 80, pero inédito en la historia moderna del club madridista.

El estadio se llenó mucho antes de lo normal y un speaker fichado para la ocasión caldeaba el ambiente. No hacía falta, en realidad, porque la afición sabía perfectamente lo que tenía que hacer: no parar de animar durante los 90 minutos.</p>
            
            <p id="parrafo">Al contrario de lo que venía sucediendo últimamente, ayer eran los aficionados rivales los que sacaban sus cámaras para inmortalizar el espectáculo del Bernabéu. El ambiente no tenía nada que envidiar al del Westfallenstadion hace una semana.</p>
            <p id="parrafo">Empezó el partido y jugadores y aficionados, de la mano, se comieron al Borussia durante los primeros 15 minutos. Una avalancha futbolística y atmosférica que se hubiera llevado por delante a cualquier equipo del mundo.

El guion era el soñado por todos los aficionados… salvo porque falló lo que nunca falla: la pegada. Higuaín, Cristiano y Özil marraron tres mano a mano que jamás olvidarán los aficionados del Real Madrid. Porque cualquiera de estas tres ocasiones, convertidas en gol, podrían haber dado el pase al Real Madrid. Con esta sensación al menos se fue el aficionado a casa.

Se llegó al descanso con el 0-0 y la afición siguió animando. Se llegó al 65’ con el 0-0 y el Bernabéu siguió apretando. Y sólo a partir del 75’ se empezaron a bajar los brazos y a ceder el protagonismo a los 4.000 hinchas del Borussia. Pero llegó el 83’ y el madridismo volvió a demostrar que cree en los milagros más que nadie.

El 1-0 hizo creer en la remontada. Y el segundo gol casi echa abajo el estadio.
La fe del Bernabéu parecía empujar al Madrid hacia una de las proezas más grandes de toda su historia, pero faltó el gol cumbre. Y no fue el de Juanito, que ese lo hizo Ramos, líder espiritual del equipo e inconmensurable toda la noche. Faltó el de Cristiano.</p>
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
            <li><a href="mourinho_se_va_chelsea.php"> La prensa inglesa asegura que Mourinho se va al Chelsea </a></li>
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
