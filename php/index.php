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
.img_not_pri {
		 display: block;
    	margin-left: auto;
   		 margin-right: auto;
}
</style>

<script Language="JavaScript">
	function ventanita() {
	msg1=open("http://www.ford.es/","Homepage",	"width=800,height=800");
}
</script>
</head>

<body>

<table width="1168" height="191" border="0">
  <tr>
    <td width="123">&nbsp;</td>
    <td width="904"><a href onMouseOver="ventanita(); return true;" ><img src="Images/publi_ford_top.png" width="991" height="90" alt="ford" /></td>
    <td width="119">&nbsp;</td>
  </tr>
  <tr>
    <td><img src="Images/publi_ford_izq.png" width="123" height="488" alt="ford" /></td>
    <td> <table width="996" height="206" border="0">
  <tr>
    <td><h1 id="tituloperiodico"> PERIODICO DIGITAL DE CAZORLA </h1> </td>
  </tr>
  <tr>
    <td>
    	<nav>
        	<section id="contenedor_menu">
        	<a href="index.php"> Portada | </a>
            <a href="local.php"> Local | </a>
            <a href="provincia.php"> Provincia | </a>
            <a href="nacional.php"> Nacional | </a>
            <a href="deportes.php"> Deportes |</a>
            <a href="formulario.html"> Subscribirse a la edición en papel</a>
            <a href="formulario_registro.html"> | Registrarse </a>
            <?php
				if (($_SESSION['usuario'])=="admin") {
   					echo "<a href='administrador.php'> | Administrar </a>";
								}
			?>
            </section>
            </nav>
            
    </td>
  </tr>
</table>
      <table width="904" height="400" border="0">
        <tr>
          <td width="350">
          		<table width="350" height="100" border="0">
  					<tr>
   						 <td>
                         	<section id="noticia_destacada">
            	<h4 id="gruponoticia"> FÚTBOL / REAL MADRID </h4>
            	<a href="deportes/el_bernabeu_si_remonto.php"><h2 id="titulonoticia"> El Bernabeú sí remontó</h2></a>
           	  <h6 id="infonoticia"> Juan I. García-Ochoa 01/05/13 - 12:15. </h6>
                    	<article>
           	  <p id="parrafo">El Real Madrid se quedó a un centímetro de conquistar el Everest, pero no se puede decir que fuera por falta de aliento. Porque la afición del equipo blanco, ayer sí, siguió al pie de la letra el manual de las remontadas.</p>
			  <img src="deportes/bernabeu.png" width="300" height="179" alt="bernabeu" class="img_not_pri"/>
<p id="parrafo"> El Bernabéu fue una caldera y la hinchada empujó al equipo desde mucho antes de que empezara el partido. Eran las seis y media de la tarde y la calle Concha Espina estaba tomada por 7.000 aficionados que creían en la remontada. Un grito de guerra a la espera del autobús de los jugadores: “¡Sí, se puede!”. </p>
			</article>
            	<h5 id="leermas"> <a href="deportes/el_bernabeu_si_remonto.php"> Leer más... </a></h5>
            </section>
                      </td>
  					</tr>
				</table>
                <table width="350" height="100" border="0">
  					<tr>
   						 <td width="340">
               	           <section id="noticia_destacada">
            	<h4 id="gruponoticia"> MADRID / CASO BÁRCENAS </h4>
            	<a href="nacional/imputan_ocho_empresarios_barcenas.php"><h2 id="titulonoticia">Ruz imputa a 8 empresarios donantes del PP citados en los papeles de Bárcenas</h2></a>
           	  <h6 id="infonoticia"> Europa Press | Madrid. Actualizado martes 30/04/2013 21:46 horas </h6>
                    	<article>
           	  <p id="parrafo">El juez Pablo Ruz ha imputado a ocho empresarios que aparecen recogidos como donantes del PP en la en la contabilidad B atribuida a su ex tesorero Luis Bárcenas. Entre ellos, destacan el presidente de la constructora OHL, Juan Miguel Villar Mir, y el ex presidente de Sacyr Vallehermoso, Luis del Rivero.</p>
              <img src="nacional/barcenas.jpg" width="300" height="142" alt="barcenas_chorizo" class="img_not_pri"/>
<p id="parrafo"> El magistrado de la Audiencia Nacional ha dictado una providencia donde les cita para prestar declaración los próximos 27 y 29 de mayo. </p>
			</article>
            	<h5 id="leermas"> <a href="nacional/imputan_ocho_empresarios_barcenas.php"> Leer más... </a></h5>
            </section>
                         </td>
  					</tr>
				</table>
                <table width="350" height="100" border="0">
  					<tr>
   						 <td width="340">
                       	   <section id="noticia_destacada">
            	<h4 id="gruponoticia"> JAÉN </h4>
            	<a href="provincia/situacion_actual_sanidad_jaen.php"><h2 id="titulonoticia"> «La situación actual de la sanidad jienense es la peor que he vivido en mi carrera»</h2></a>
           	  <h6 id="infonoticia"> 01.05.13 - 00:31 - CARMEN CABRERA | JAÉN. </h6>
                    	<article>
           	  <p id="parrafo">Manuel Pérez es vicepresidente del sector de sanidad en el sindicato Csif de Jaén. Lleva trabajando 31 años en la sanidad pública y lo ha hecho en cuatro hospitales diferentes: Complejo Hospitalario de Jaén; Hospital San Agustín, de Linares; Hospital Valle de los Pedroches, de Córdoba; y Hospital Princesa de España (antes de la fusión de dicho hospital con el hospital Ciudad de Jaén para constituir el Complejo Hospitalario en 2002). </p>

              <img src="provincia/manuel perez.jpg" width="300" height="225" alt="manuel perez" class="img_not_pri" border="1" />
              
<p id="parrafo"> Se cumple un año de la publicación en el BOE del Real Decreto ley 16/2012 de abril de medidas urgentes para garantizar la sostenibilidad del Sistema Nacional de Salud. </p>
			</article>
            	<h5 id="leermas"> <a href="provincia/situacion_actual_sanidad_jaen.php"> Leer más... </a></h5>
            </section>
                      </td>
  					</tr>
				</table></td>
          <td width="250">
          		<table width="250" height="150" border="0">
  					<tr>
   						 <td>
                         <article id="articulonoticia"> 
                            <h4 id="gruponoticia"> GOBIERNO </h4>                         
                             <a href="nacional/rajoy_promete_ajuste_bruselas.php" <h2 id="noticia_secundaria">Rajoy ofrece más ajustes a Bruselas </h2> </a>                              
                            <p id="parrafo2"> La negociación entre España y Bruselas para lograr más tiempo que permita cuadrar las cuentas públicas —el techo de déficit pasa del 4,5% al 6,3% este año— comprendía contrapartidas para el Gobierno de Mariano Rajoy. El déficit es el objetivo primordial.   </p>    
                           <img src="nacional/rajoy.jpg" width="250" height="129" alt="mariano_rajoy" />
<p id="parrafo2"> Por eso, el Gobierno ha incluido en el Programa de Estabilidad de 2013-2016 un nuevo paquete de ajustes para este año valorados en unos 3.000 millones, una cifra adelantada por el presidente el pasado domingo en Granada pero sin detallar las medidas. </p>
                            <a href="nacional/rajoy_promete_ajuste_bruselas.php"> Leer más... </a>                            
                           </article>
                      </td>
  					</tr>
				</table>
                <table width="250" height="150" border="0">
  					<tr>
   						 <td><article id="articulonoticia"> 
                            <h4 id="gruponoticia"> DIA DEL TRABAJO </h4>
                             <a href="nacional/sindicatos_reclaman_gran_pacto.php"<h2 id="noticia_secundaria">Los sindicatos reclaman un gran pacto ante la emergencia nacional del paro</h2></a>
                             <p id="parrafo2">Más de 6,2 millones de parados llevan a España a una situación de "emergencia nacional", creen los sindicatos.</p>
                             <p><img src="nacional/sindicatos.jpg" width="250" height="203" alt="sindicatos" class="img_not_pri" /></p>
                             <p id="parrafo2">Por eso, este miércoles, aprovechando el Primero de Mayo, reclaman "un gran acuerdo para cambiar el modelo económico, por el empleo y la protección", en palabras del líder de CC OO, Ignacio Fernández Toxo. Entre las cosas que tendría que contar ese pacto estaría un plan de choque para estimular la actividad económica.</p>
                             <h5 id="leermas"> <a href="nacional/sindicatos_reclaman_gran_pacto.php"> Leer más... </a></h5>
                      </article></td>
  					</tr>
				</table>
                <table width="250" height="150" border="0">
  					<tr>
   						 <td><article id="articulonoticia"> 
                            <h4 id="gruponoticia"> CAZORLA </h4>                         
                             <a href="local/primeras_confirmaciones_blues_cazorla.php" <h2 id="noticia_secundaria"> Fito y Fitipaldis y Bettye LaVette, primeras confirmaciones del BluesCazorla 2013 </a>                              
                            <p id="parrafo2"> A ellos se unen otros artistas como Los Coronas, Curtis Salgado, Chris Kane, Texas Scrath, Anson Thundergerg, Nine Below Zero , Ian Segal, Mighty Calacas, Los Deltonos y la primera banda confirmada del festival George Thorogood and Destroyer.       </p>                      <img src="local/artistas_blues.jpg" width="250" height="120" alt="artistas blues" border="1" class="img_not_pri"/>              <p id="parrafo2"> Cazorla ya huele a blues. Las primeras confirmaciones ya están en marcha y Cazorla va a poder disfrutar de dos grandes voces del panorama nacional e internacional.</p>
                            <p id="parrafo2">Como viene ocurriendo tras varios años habrá un gran artista del panorama nacional. Loquillo, Rosendo, M-Clan y Raimundo Amador ya han pisado las tablas del escenario de la plaza de toros, este año es el turno de la mítica banda Fito y Fitipaldis.</p>
                      <a href="local/primeras_confirmaciones_blues_cazorla.php"> Leer más... </a>                             </article></td>
  					</tr>
				</table>
                <table width="250" height="150" border="0">
  					<tr>
   						 <td><article id="articulonoticia"> 
                            <h4 id="gruponoticia"> CASA REAL </h4>
                             <a href="nacional/rey_reaparece_madrid_borussia.php"<h2 id="noticia_terciaria">El Rey reaparece en público en el partido de fútbol Madrid-Borussia</h2></a>
                             <p id="parrafo3">El Rey ha reaparecido en un acto público en el estadio Santiago Bernabéu, donde ha presenciado en el palco de autoridades la semifinal de Liga de Campeones entre el Real Madrid y el Borussia de Dortmund.</p>
                           <img src="nacional/rey.jpg" width="250" height="138" alt="rey viendo partido" class="img_not_pri" />
<p id="parrafo3">La llegada del monarca a su localidad no ha sido anunciada por megafonía ni ha sonado el himno de España.</p>
<p id="parrafo3"> Ha sido la primera actividad pública del monarca tras su doble operación de hernia del pasado 3 de marzo. Ya la semana pasada retomó las audiencias en Zarzuela, pero ésta ha sido la primera ocasión en la que ciudadanos y periodistas han podido verle fuera del Palacio de la Zarzuela.</p>
                             <h5 id="leermas"> <a href="nacional/rey_reaparece_madrid_borussia.php"> Leer más... </a></h5>
                      </article></td>
                      
  					</tr>
                    <td><article id="articulonoticia"> 
                            <h4 id="gruponoticia"> CASA REAL </h4>
                             <a href="nacional/rey_reaparece_madrid_borussia.php"<h2 id="noticia_terciaria">El Rey reaparece en público en el partido de fútbol Madrid-Borussia</h2></a>
                             <p id="parrafo3">El Rey ha reaparecido en un acto público en el estadio Santiago Bernabéu, donde ha presenciado en el palco de autoridades la semifinal de Liga de Campeones entre el Real Madrid y el Borussia de Dortmund.</p>
                             <h5 id="leermas"> <a href="nacional/rey_reaparece_madrid_borussia.php"> Leer más... </a></h5>
                      </article></td>
				</table>
                <p>&nbsp;</p>
          </td>
          
          <td width="282">
          <table width="312" height="233" border="0">
  					<tr>
   						 <td width="277">
                         	<section id="ultimas_noticias"> 
                            	<h3 id="ultimasnoticias">CONECTARSE</h3>
                                
                                <?php
									if (isset($_SESSION['usuario'])) {
   											 echo "Bienvenid@, te has conectado como: <h3>".$_SESSION['usuario']." </h3>";
											 echo date("d-m-Y H:i:s");
											 echo " --->";
											 echo "<a href='logout.php'>Cerrar Sesión</a>";
								}else{
								?>
                                 <form method='post' action='login.php'>
									Usuario: <input type='text' name="user" required/><br/>
									Contraseña: <input type='password' name="pass"/><br/><br/>
									<input type='submit' value="Entrar"/>
    							</form>
    							<form action="formulario_registro.html">
    							<input type="submit" value="Registrarse">
   								 </form>
                         		 <?php
								}
								?>
                         	</section>
                         </td>
  					</tr>
				</table>
          		<table width="312" height="233" border="0">
  					<tr>
   						 <td width="277">
                         	<section id="ultimas_noticias"> 
                            	<h3 id="ultimasnoticias"> ULTIMAS NOTICIAS </h3>	
                            		<ul>
                                		<li id="noticia_ultima"><a href="provincia/jaen_alerta_amarilla_nevada.php"> Jaén, en alerta amarilla por nevadas. </a></li>
                                   	 	<li id="noticia_ultima"><a href="provincia/ayuntamiento_reconoce_bajo_ahorro.php"> Ayuntamiento de Jaén reconoce bajo ahorro en el primer trimestre. </a></li>
                                    	<li id="noticia_ultima"><a href="nacional/retenciones_trafico_salida_puente.php"> Retenciones y mal tiempo en la salida del puente de Mayo. </a> </li>
                                    	<li id="noticia_ultima"><a href="local/junta_inicia_trabajos_forestales.php"> Junta de Andalucía inicia trabajos de reforestación en la sierra de Cazorla. </a></li>
                                    	<li id="noticia_ultima"><a href="deportes/mourinho_se_va_chelsea.php"> La prensa Inglesa da por hecho el fichaje de Mourinho por el Chelsea. </a></li>
                                    	<li id="noticia_ultima"><a href="deportes/alonso_recuerda_barcelona_2006.php">Fernando Alonso recuerda Gran Premio de Barcelona 2006 </a></li>
                                    	<li id="noticia_ultima"><a href="deportes/cajasol_campeon_andaluz_junior.php"> Cajasol campeón del torneo junior de baloncesto masculino. </a></li>
                                    	<?php
	  										include('ultimas_noticias.php');							
											mostrar_ultimas();
	  									?>
                                	</ul>	
                         	</section>
                         </td>
  					</tr>
				</table>
                <table width="282" height="180" border="0">
  					<tr>
   						 <td width="282"><section id="publi">
          <img src="Images/publi_vodafone.jpg" width="298" height="266" alt="publi_vodafone" />
<hr />
          	<img src="Images/publicidad_campo.png" width="298" height="247" alt="publicidad_campo" />
<hr />
          	<img src="deportes/Images/publi_linea.png" width="295" height="168" />
            <hr />
       	  <img src="deportes/Images/publi_movil.png" width="300" height="165" alt="publi" />
          <hr />
          <a href="http://almagais.es/es"><img src="deportes/Images/publi_a_g.png" width="297" height="87" alt="publi alma gaia" /></a>
          <hr />
          <img src="deportes/Images/publi_turisnat.png" width="298" height="96" alt="publi turisnat" /><section></td>
  					</tr>
				</table>
                <p><img src="Images/redbull.png" width="308" height="322" alt="redbill" /></p>
                
          <p><img src="Images/publi_vodafone.jpg" width="304" height="287" alt="vodafone" /></p>
          <p><img src="Images/publi_movil.png" width="308" height="287" alt="publi" /></p>
          <p><img src="Images/bmw-x1-preventa.jpg" width="308" height="376" alt="bmw" /></p></td>
        </tr>
      </table>
      <p>
      <table width="991" height="99" border="1">
  			<tr>
    			<td>
                	<section id="contacto"
                	<address id="infoperiodico"> Periodico Digital de Cazorla: Realizado por Antonio Melero Bello para la asignatura TECNOLOGIAS WEB de Ingenieria Informatica UGR </address>
                    <hr />
                    <a href="mailto:periodicocazorleño@gmail.com"> Contacto pinchando aquí </a>
                    <p><a href="como_se_hizo.pdf"> COMO SE HIZO </a></p>
                    </section>
                </td>
 		 	</tr>
	  </table>

      </p>
    </td>
    <td><img src="Images/publi_ford_der.png" width="123" height="512" alt="ford" /></td>
  </tr>
</table>


</body>
</html>
