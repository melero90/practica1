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
    	<nav id="tituloseccion">|||||| PROVINCIA |||||| <?php
									if (isset($_SESSION['usuario'])) {
   											 echo "Identificado como: ".$_SESSION['usuario']." |||||| "; 	
											 echo "<a href='logout.php'>Cerrar Sesión</a>";	
								}
								?></nav>
    </td>
  </tr>
</table>
      <table width="929" height="615" border="0">
        <tr>
          <td width="1266">
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
      </table>
      <table width="904" height="400" border="0">
        <tr>
          <td width="350">
          		<table width="350" height="100" border="0">
  					<tr>
   						 <td>
                         	<article id="articulonoticia"> 
                            <h4 id="gruponoticia"> JAÉN </h4>                         
                             <a href="provincia/junta_retoma_ayudas_comerciantes.php" <h2 id="noticia_secundaria"> La Junta retoma las ayudas a los comerciantes para paliar su situación </h2> </a>                              
                            <p id="parrafo2"> Subvenciones para los comerciantes. Hacía tres años que no se convocaban las ayudas para los comercios y la Junta de Andalucía ha anunciado que las retomará este año.  </p>                      
                            <img src="provincia/pequeño comercio.jpg" width="300" height="225" alt="comercio en jaen"  class="img_not_pri" border="1"/>
							<p id="parrafo2"> La directora general de Comercio, María del Carmen Cantero, visitaba ayer Jaén para presentar a los comerciantes la convocatoria que ya se ha publicado en el Boletín Oficial de la Junta de Andalucía.</p>
                            <a href="provincia/junta_retoma_ayudas_comerciantes.php"> Leer más... </a>                             </article>
                         </td>
  					</tr>
				</table>
                <table width="350" height="100" border="0">
  					<tr>
   						 <td width="340">
                         	<article id="articulonoticia"> 
                            <h4 id="gruponoticia"> JAÉN </h4>
                             <a href="provincia/ayuntamiento_reconoce_bajo_ahorro.php"<h2 id="noticia_secundaria">El Ayuntamiento de Jaén reconoce el bajo ahorro en el primer trimestre</h2></a>
                             <p id="parrafo2">El concejal de Hacienda y Comunicación, Miguel Contreras (PP), ha admitido en la mañana de hoy martes, en el pleno ordinario de abril, que el Ayuntamiento de Jaén no ha ahorrado lo suficiente durante el primer trimestre, por estar centrados en la elaboración de los presupuestos municipales y porque no han querido subir los impuestos a los jienenses, aunque confía en que las medidas adoptadas den resultado en lo que queda de 2013.</p>
                             <p><img src="provincia/ayto jaen.jpg" width="250" height="140" alt="ayuntamiento de jaen" class="img_not_pri" border="1" /></p>
                             <p id="parrafo2">El concejal destacó no obstante lo ahorrado respecto al anterior gobierno, de PSOE e IU, a la vez que han logrado mantener los servicios municipales y el pago de la nómina a sus 1.500 empleados.</p>
                             <h5 id="leermas"> <a href="provincia/ayuntamiento_reconoce_bajo_ahorro.php"> Leer más... </a></h5>
                           </article>
               	         </td>
				  </tr>
			</table>
       	  </td>
          <td width="250">
          		<table width="250" height="150" border="1">
  					<tr>
   						 <td id="tabla2"><article id="articulonoticia"> 
                            <h4 id="gruponoticia"> JAÉN </h4>
                             <a href="provincia/condenada_seis_años_agresion.php"<h2 id="noticia_terciaria">Condenada a más de cinco años y medio de cárcel por agredir en "múltiples ocasiones" a su pareja</h2></a>
                             <p id="parrafo3">El Juzgado de lo Penal número 4 de Jaén ha condenado a más de cinco años y medio de cárcel --un total de 69 meses-- a una mujer, F.C.M., acusada de agredir en "múltiples ocasiones" a su pareja sentimental en 2010 en la localidad jiennense de Baeza, tal y como señala la sentencia.</p>					
                             <p id="parrafo3">Las agresiones se produjeron durante el tiempo en que vivieron juntos y una vez terminada la relación. En una de las ocasiones, la procesada lo golpeó en el ojo, le quemó el pelo y lo arañó. Igualmente, en plena calle, unos días después le propinó varios golpes y le tiró del pelo.</p>
                             <h5 id="leermas"> <a href="provincia/condenada_seis_años_agresion.php"> Leer más... </a></h5>
                      </article></td>
  					</tr>
				</table>
                <table width="250" height="150" border="1">
  					<tr>
   						 <td><article id="articulonoticia"> 
                            <h4 id="gruponoticia"> JAÉN </h4>
                             <a href="provincia/jaen_alerta_amarilla_nevada.php"<h2 id="noticia_terciaria">Jaén, en alerta amarilla por nevadas</h2></a>
                           <iframe class="youtube-player" type="text/html" width="225" height="125" src="http://www.youtube.com/embed/_cQvBgx7VTw" frameborder="0"></iframe>
                           <p id="parrafo3">Quince provincias, entre ellas Almería, Granada y Jaén, están este martes en alerta amarilla por nevadas, tormentas y lluvias, en el marco de un temporal que empieza a remitir, informa la página web de la Agencia Estatal de Meteorología (Aemet).</p>
                           <p id="parrafo3">Por tormentas se encuentran en alerta Almería, Granada, Alicante, Castellón, Valencia y Murcia. </p>
                             <h5 id="leermas"> <a href="provincia/jaen_alerta_amarilla_nevada.php"> Leer más... </a></h5>
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
