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
    <td> <table width="926" height="132" border="0">
  <tr>
    <td width="981"> <h1 id="tituloperiodico"> PERIODICO DIGITAL DE CAZORLA <h1></td>
  </tr>
  <tr>
    <td>
    <section id="contenedor_menu">
    <a href="index.php">Portada | </a> <a href="local.php"> Local | </a> <a href="provincia.php"> Provincia | </a> <a href="nacional.php"> Nacional |</a><a href="deportes.php"> Deportes </a></td>
    </section>
  </tr>
  <tr>
    <td>
    	<nav id="tituloseccion">|||||| LOCAL |||||| <?php
									if (isset($_SESSION['usuario'])) {
   											 echo "Identificado como: ".$_SESSION['usuario']." |||||| "; 	
											 echo "<a href='logout.php'>Cerrar Sesión</a>";	
								}
								?> </nav>
       
    </td>
  </tr>
  <tr>
    <td></td>
  </tr>
    </table>
      <table width="929" height="615" border="0">
        <tr>
          <td width="1266">
          	<section id="noticia_destacada">
            	<h4 id="gruponoticia"> CAZORLA </h4>
            	<a href="local/abril_dejando_nevada_cazorla.php"><h2 id="titulonoticia"> Abril se va dejando nevada la Sierra de Cazorla </a></h2>
           	  <h6 id="infonoticia"> Lunes, 29 de Abril de 2013 12:05 </h6>
                    	<article>
           	  <p id="parrafo">Los mercurios están disparatados. En pocos días hemos pasado de superar los 25 grados en muchos puntos de la comarca Sierra de Cazorla, a rozar los 0 grados en los puntos más altos de la serranía en la noche de ayer. </p>

<p id="parrafo">No solo llovió durante todo el día, sino que a media tarde comenzó a nevar intensamente, una situación que se prolongó durante algo más de una hora y dejó una estampa completamente invernal en plena primavera.</p>

<img src="local/nieve_abril.jpg" alt="nieve_abril" name="img_not_prin" width="450" height="225" class="img_not_pri" />
<p id="parrafo">Así, hasta las 14:00 horas de hoy y a pesar de que el cielo está parcialmente nublado, Aemet, tiene activada la alerta amarilla por nieve.</p>
			</article>
            	<h5 id="leermas"> <a href="local/abril_dejando_nevada_cazorla.php"> Leer más... </a></h5>
            </section>
          </td>
        </tr>
      </table>
      <table width="904" height="400" border="0">
        <tr>
          <td width="350">
          		<table width="350" height="100" border="0">
  					<tr>
   						 <td>
                         	<article id="articulonoticia"> 
                            <h4 id="gruponoticia"> CAZORLA </h4>                         
                             <a href="local/primeras_confirmaciones_blues_cazorla.php" <h2 id="noticia_secundaria"> Fito y Fitipaldis y Bettye LaVette, primeras confirmaciones del BluesCazorla 2013 </a>                              
                            <p id="parrafo2"> A ellos se unen otros artistas como Los Coronas, Curtis Salgado, Chris Kane, Texas Scrath, Anson Thundergerg, Nine Below Zero , Ian Segal, Mighty Calacas, Los Deltonos y la primera banda confirmada del festival George Thorogood and Destroyer.       </p>                      <img src="local/artistas_blues.jpg" width="150" height="80" alt="artistas blues" border="1" class="img_not_pri"/>              <p id="parrafo2"> Cazorla ya huele a blues. Las primeras confirmaciones ya están en marcha y Cazorla va a poder disfrutar de dos grandes voces del panorama nacional e internacional.</p>
                            <p id="parrafo2">Como viene ocurriendo tras varios años habrá un gran artista del panorama nacional. Loquillo, Rosendo, M-Clan y Raimundo Amador ya han pisado las tablas del escenario de la plaza de toros, este año es el turno de la mítica banda Fito y Fitipaldis.</p>
                            <a href="local/primeras_confirmaciones_blues_cazorla.php"> Leer más... </a>                             </article>
                         </td>
  					</tr>
				</table>
                <table width="350" height="100" border="0">
  					<tr>
   						 <td width="340">
                         	<article id="articulonoticia"> 
                            <h4 id="gruponoticia"> CAZORLA </h4>
                             <a href="local/cazorla_cuenta_callejero_digital.php"<h2 id="noticia_secundaria">Cazorla, único municipio jienense que ya cuenta con un callejero digital</h2></a>
                             <p><img src="local/callejero_cazorla.jpg" width="250" height="80" alt="callejero" class="img_not_pri" border="1" /></p>
                             <p id="parrafo2">El Aula de Cultura de la Diputación acogió la presentación del callejero digital unificado de Andalucía (CDAU), un proyecto en cuya elaboración la Administración provincial está colaborando con el Instituto de Estadística y Cartografía de Andalucía (ICA) y con el que se pretende aunar la información de los distintos callejeros disponibles de los municipios andaluces y crear uno solo que sea referencia para la planificación y la consulta de datos sobre calles, situación geográfica e instalaciones, entre otras cuestiones.</p>
                             <h5 id="leermas"> <a href="local/cazorla_cuenta_callejero_digital.php"> Leer más... </a></h5>
                           </article>
               	         </td>
				  </tr>
			</table>
       	  </td>
          <td width="250">
          		<table width="250" height="150" border="1">
  					<tr>
   						 <td><article id="articulonoticia"> 
                            <h4 id="gruponoticia"> CAZORLA </h4>
                             <a href="local/junta_inicia_trabajos_forestales.php"<h2 id="noticia_terciaria">La Junta inicia los trabajos de mejora forestal del Plan de Choque en montes de Huesa y Quesada</h2></a>
                             <p id="parrafo3">La Consejería de Agricultura, Pesca y Medio Ambiente ha iniciado las obras de mejora forestal en montes con problemas erosivos de la provincia de Jaén, que van generar cerca de 1.600 jornales, equivalentes a 40 puestos de trabajo por espacio de tres meses.</p>
                            <p> <img src="local/trabajos_de_reforestacin.JPG" width="190" height="95" alt="trabajos forestales" class="img_not_pri" border="1" />			</p>						
                            
                           <p id="parrafo3">Así lo ha puesto de manifiesto la delegada territorial de Agricultura y Medio Ambiente, Irene Sabalete,quien ha especificado que las actuaciones medioambientales de carácter forestal en la zona suroriental de Jaén, concretamente en los municipios de Huesa y Quesada, tienen un presupuesto total de 289.309 euros.</p>
                             <h5 id="leermas"> <a href="local/junta_inicia_trabajos_forestales.php"> Leer más... </a></h5>
                      </article></td>
  					</tr>
				</table>
                <table width="250" height="150" border="1">
  					<tr>
   						 <td><article id="articulonoticia"> 
                            <h4 id="gruponoticia"> CAZORLA </h4>
                             <a href="local/roban_gimnasio_cazorla_vitrina.php"<h2 id="noticia_terciaria">Roban en un gimnasio de Cazorla productos expuestos en una vitrina</h2></a>
                            
                           <p id="parrafo3">Otro robo más. Uno de los gimnasios de Cazorla, situado en la calle del Carmen, fue el escenario de un robo ocurrido ayer.</p>
                           <p id="parrafo3"> Los dueños alertaron a la Guardia Civil de lo ocurrido tras descubrir un expositor del gimnasio roto, donde se encontraban complejos vitamínicos y ropa de deporte, entre otras cosas, según ha manifestado a este medio la Guardia Civil. </p>
                             <h5 id="leermas"> <a href="local/roban_gimnasio_cazorla_vitrina.php"> Leer más... </a></h5>
                      </article></td>
  					</tr>
				</table></td>
          
          <td width="282"><section id="publi">
          <img src="Images/publi_vodafone.jpg" width="298" height="266" alt="publi_vodafone" />
<hr />
          	<img src="Images/publicidad_campo.png" width="298" height="247" alt="publicidad_campo" />
<hr />
          	<img src="deportes/Images/publi_linea.png" width="295" height="168" />
            <hr />
       	  <img src="deportes/Images/publi_movil.png" width="294" height="165" alt="publi" />
          <hr />
          <a href="http://almagais.es/es"><img src="deportes/Images/publi_a_g.png" width="297" height="87" alt="publi alma gaia" /></a>
          <hr />
          <img src="deportes/Images/publi_turisnat.png" width="298" height="90" alt="publi turisnat" /><section></td>
               
        </tr>
      </table>
      <table width="940" height="116" border="0">
  			<tr>
    			<td><section id="contacto"
                	<address id="infoperiodico"> Periodico Digital de Cazorla: Realizado por Antonio Melero Bello para la asignatura TECNOLOGIAS WEB de Ingenieria Informatica UGR </address>
                    <hr />
                    <a href="mailto:periodicocazorleño@gmail.com"> Contacto pinchando aquí </a>
                    </section></td>
 		 	</tr>
	  </table>

      </p>
    </td>
    <td><a href="http://www.ford.es"><img src="Images/publi_ford_der.png" width="123" height="512" alt="ford" /></a></td>
  </tr>
</table>


</body>
</html>
