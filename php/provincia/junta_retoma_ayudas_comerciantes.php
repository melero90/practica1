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
           	  <a href="junta_retoma_ayudas_comerciantes.php" onMouseOver="ventanita(); return true;"><h2 id="titulonoticia"> La Junta retoma las ayudas a los comerciantes para paliar su situación </h2></a>
            <h6 id="infonoticia"> 01.05.13 - 00:30 -LORENA CÁDIZ | JAÉN. </h6>
            <p id="parrafo">Subvenciones para los comerciantes. Hacía tres años que no se convocaban las ayudas para los comercios y la Junta de Andalucía ha anunciado que las retomará este año. La directora general de Comercio, María del Carmen Cantero, visitaba ayer Jaén para presentar a los comerciantes la convocatoria que ya se ha publicado en el Boletín Oficial de la Junta de Andalucía.</p>                
            <p id="parrafo">«Se trata de ayudas vinculadas a dos bloques concretos: modernización de pequeñas y medianas empresas comerciales, y formación y cualificación empresarial para que los comerciantes puedan aumentar su competitividad», explicó la directora general, que aseguró que con esta medida tratan de dar respuesta y cubrir parte de las demandas que tienen los comerciantes. Cantero destacó además la situación crítica a la que se enfrenta el sector con la bajada del consumo, la subida del IVA y las «medidas comerciales que ha tomado el Gobierno central», entre las que destacó la liberalización de horarios, «que solo beneficia a las grandes superficies y perjudica a los pequeños y medianos comercios».</p>
            <p><img src="pequeño comercio.jpg" width="300" height="225" alt="pequeño comercio en jaen" class="imagen"/> </p>
            <p id="parrafo">Las ayudas para modernización se pueden solicitar desde el pasado 25 de abril y las subvenciones para formación se publicarán en unos días en el BOJA, momento a partir del que podrán solicitarlas los comerciantes.</p>
            <p id="parrafo"> En total, la consejería de Comercio ha liberado una partida de 4,8 millones para este fin en toda Andalucía, «lo que supone el 35 por ciento de la dotación presupuestaria de la Dirección General». La cantidad de empresas que se beneficiarán en Jaén dependerá de la demanda. </p>
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
            <li><a href="ayuntamiento_reconoce_bajo_ahorro.php"> Ayuntamiento de Jaén reconoce el bajo ahorro cosechado</a></li>
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
