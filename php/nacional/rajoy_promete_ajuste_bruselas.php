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
           	  <a href="rajoy_promete_ajuste_bruselas.php" onMouseOver="ventanita(); return true;"><h2 id="titulonoticia"> Rajoy ofrece más ajustes a Bruselas </h2></a>
            <h6 id="infonoticia"> Jesús Sérvulo González Madrid 1 MAY 2013 - 00:01 CET </h6>
            <p><img src="rajoy.jpg" width="560" height="309" alt="rajoy"/> </p>
            <p id="parrafo">La negociación entre España y Bruselas para lograr más tiempo que permita cuadrar las cuentas públicas —el techo de déficit pasa del 4,5% al 6,3% este año— comprendía contrapartidas para el Gobierno de Mariano Rajoy. El déficit es el objetivo primordial. Por eso, el Gobierno ha incluido en el Programa de Estabilidad de 2013-2016 un nuevo paquete de ajustes para este año valorados en unos 3.000 millones, una cifra adelantada por el presidente el pasado domingo en Granada pero sin detallar las medidas.</p>                
            <p id="parrafo">El Ejecutivo se aferra a unas nuevas perspectivas más pesimistas, que las aireadas hasta ahora, y que exigen nuevas medidas para reducir el desequilibrio presupuestario. Los nuevos pronósticos oficiales atrasan la recuperación a 2016, cuando el Gobierno proyecta que la economía comenzará a crecer por encima del 1%. Si los vientos de cambio que llegan de Bruselas, presionada para aflojar la dosis de austeridad, mejoran la situación económica, Mariano Rajoy se compromete a destinar “los efectos de un crecimiento por encima del esperado en reducción del déficit público”, según figura en el texto. </p>
            <p id="parrafo">En el caso de que la Comisión Europea aplace decisiones para reactivar la economía hasta después de las elecciones alemanas, en otoño, y la economía continúe la senda de depresión, el Gobierno garantiza que adoptará nuevas medidas para reducir el déficit. “Si en el mes de septiembre de 2013 el Gobierno identificara alguna desviación en la ejecución presupuestaria, se adoptarían nuevas medidas de no disponibilidad presupuestaria para cumplir los objetivos”, señala el documento que detalla las medidas de ajuste que acometerá el Gobierno. Entre las novedades comprometidas con Bruselas se incluyen la creación de impuestos medioambientales y especiales que servirán para recaudar unos 800 millones adicionales, según los cálculos recogidos en el Plan de Estabilidad. El Ejecutivo de Rajoy espera otros 1.000 millones “en la mejora de la coordinación de las políticas activas y pasivas de empleo”. También hay previstos otros 1.000 millones en recortes de los ministerios, que incluyen disminuciones en subvenciones y en las transferencias para políticas sociales a las comunidades.</p>
            <p id="parrafo">Los ajustes adoptados el año pasado contribuyeron a agravar la situación económica y ahora Europa requiere nuevas medidas para avanzar en la consolidación fiscal. El Gobierno responde con la prórroga de todas las medidas temporales de carácter fiscal que ha aprobado durante los últimos meses. Prolongará la subida del Impuesto sobre Bienes Inmuebles de los Ayuntamientos, que caducaba inicialmente en 2014. Y eso pese a que la secretaria de Estado de Presupuestos, Marta Fernández Currás, admitió hace un par de semanas de que había “margen” para bajarlo. También se ven afectadas deducciones sobre el impuesto de sociedades eliminadas temporalmente durante el verano pasado. El Gobierno mantiene la congelación de estas deducciones para ingresar unos 3.000 millones adicionales en 2014, según el texto. Hacienda también cuenta con otros 250 millones adicionales por los impuestos que pagarán los cerca de 40.000 millones de bases imponibles afloradas por la amnistía.</p>
            <p id="parrafo">El plan prolonga las medidas de ajuste en educación y sanidad adoptadas en 2012 e incluye otras adicionales. En sanidad, por ejemplo, espera recortar unos 3.134 millones por la reforma farmacéutica, o la compra centralizada.</p>
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
            <li><a href="imputan_ocho_empresarios_barcena.html"> Imputan a ocho empesarios relacionados con el caso Bárcenas </a></li>
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
