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
    	<nav id="tituloseccion">PROVINCIA</nav>
    </td>
  </tr>
</table>
      <table width="990" height="102" border="0">
  <tr>
    <td width="651"><article id=articulonoticia> 
           	  <a href="ayuntamiento_reconoce_bajo_ahorro.php" onMouseOver="ventanita(); return true;"><h2 id="titulonoticia"> El Ayuntamiento de Jaén reconoce el bajo ahorro en el primer trimestre </h2></a>
            <h6 id="infonoticia"> 01.05.13 - 12:30 -MARCOS MARTIN | JAÉN. </h6>
            <p id="parrafo">El concejal de Hacienda y Comunicación, Miguel Contreras (PP), ha admitido en la mañana de hoy martes, en el pleno ordinario de abril, que el Ayuntamiento de Jaén no ha ahorrado lo suficiente durante el primer trimestre, por estar centrados en la elaboración de los presupuestos municipales y porque no han querido subir los impuestos a los jienenses, aunque confía en que las medidas adoptadas den resultado en lo que queda de 2013. El concejal destacó no obstante lo ahorrado respecto al anterior gobierno, de PSOE e IU, a la vez que han logrado mantener los servicios municipales y el pago de la nómina a sus 1.500 empleados.></p>                
            <p id="parrafo">La portavoz de IU, Isabel Mateos, reprochó al concejal de Hacienda que no hablara del reciente informe del interventor del Ayuntamiento, en el que se dice que el Plan de Ajuste "no se cumple, por muchos recortes que hagan", dijo la edil, contraria a los planes de ajuste "que están imponiendo los gobiernos al dictado de Alemania y de los bancos, que son los que han hecho el negocio".</p>
            <p id="parrafo">El concejal socialista Juan Carlos Rodríguez Cohard llamó la atención sobre el hecho de que el equipo de gobierno reconozca que las medidas adoptadas son insuficientes y que para cumplir el Plan de Ajuste en este año sería necesario ahorrar 27 millones de euros, y más a partir de 2014 en que también habrá que amortizar el capital de los 217 millones pedidos para el pago de las deudas a los proveedores. Por lo que la única salida a su juicio es la renegociación de las condiciones de dichos préstamos: más tiempo para devolver el dinero y a un interés más bajo.</p>
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
        	<li><a href="primeras_confirmaciones_blues_cazorla.php"> Primeras confirmaciones blues Cazorla </a></li>
            <li><a href="cazorla_cuenta_callejero_digital.php"> Cazorla cuenta con el primer callejero digital </a> </li>
            <li><a href="junta_inicia_trabajos_forestales.php"> Junta inicia trabajos de reforestacion en Sierra Cazorla</a></li>
            <li><a href="roban_vitrina_gimnasio_cazorla.php"> Roban en un gimnasio de la Calle del Carmen</a></li>
            <li><a href="situacion_actual_sanidad_jaen.php"> Situacion Actual de la Sanidad en Jaén</a></li>
            <li><a href="junta_retoma_ayudas_comerciantes.php"> La Junta de Andalucia retoma ayudas a comerciantes</a></li>
            <li><a href="condenada_seis_años_agresion.php"> Condenada a seis años de cárcel por agredir a su pareja</a></li>
            <li><a href="jaen_alerta_amarilla_nevada.php"> Jaén en alerta amarilla por fuertes nevadas</a></li>
            
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
