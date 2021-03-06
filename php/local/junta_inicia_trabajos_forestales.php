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
    	<nav id="tituloseccion">LOCAL</nav>
    </td>
  </tr>
</table>
      <table width="990" height="102" border="0">
  <tr>
    <td width="651"><article id=articulonoticia> 
           	  <a href="abril_dejando_nevada_cazorla.php" onMouseOver="ventanita(); return true;"><h2 id="titulonoticia"> La Junta inicia los trabajos de mejora forestal del Plan de Choque en montes de Huesa y Quesada  </h2></a>
            <h6 id="infonoticia"> Sábado, 27 de Abril de 2013 12:23 Laura Fernández @LauraFS4  </h6>
            <p id="parrafo">La Consejería de Agricultura, Pesca y Medio Ambiente ha iniciado las obras de mejora forestal en montes con problemas erosivos de la provincia de Jaén, que van generar cerca de 1.600 jornales, equivalentes a 40 puestos de trabajo por espacio de tres meses. Así lo ha puesto de manifiesto la delegada territorial de Agricultura y Medio Ambiente, Irene Sabalete,quien ha especificado que las actuaciones medioambientales de carácter forestal en la zona suroriental de Jaén, concretamente en los municipios de Huesa y Quesada, tienen un presupuesto total de 289.309 euros.</p>  
            <p><img src="trabajos_de_reforestacin.JPG" width="350" height="270" alt="trabajos reforestacion" class="imagen" /> </p>             
            <p id="parrafo">Estos trabajos consisten en la ejecución de clareos selectivos, eliminación de residuos, albarradas, mejora de caminos y control de plagas con el objetivo de mejorar las formaciones forestales y combatir la acción de la erosión. Así mismo, está previsto que a mediados de mayo, en coincidencia con el incremento del riesgo de incendios, los trabajos se suspendan y se retomen en la segunda quincena de octubre, ha especificado la delegada. </p>
                <p id="parrafo">El Plan de Choque por el Empleo en Andalucía tiene como principal objetivo la generación del llamado 'empleo verde' en 71 municipios jienenses. En el caso de la provincia de Jaén, Sabalete ha recordado que del total de inversión prevista, que asciende a 10,3 millones de euros, se destinarán 4,1 millones a la mejora de caminos rurales y 6,2 millones de euros a actuaciones de mejora forestal y regeneración ambiental.</p>
                

				<p id="parrafo">Todas estas iniciativas, que contarán con la cofinanciación del Fondo Europeo Agrícola de Desarrollo Rural (Feader), incluyen, entre otros, trabajos de regeneración de zonas incendiadas, labores preventivas contra el fuego, obras contra la erosión y acciones de conservación de la flora, la fauna, el paisaje y los acuíferos.</p>

 				<p id="parrafo">Para la realización de estos trabajos, las empresas adjudicatarias deben contratar a personas inscritas como demandantes en el Servicio Andaluz de Empleo (SAE). Las contrataciones dan prioridad a desempleados de larga duración con cargas familiares, que no reciben ningún tipo de prestación o subsidio y que no hayan tenido vinculación con la entidad empleadora en los tres meses anteriores a la presentación de la oferta.</p>

				
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
            <li><a href="abril_dejando_nevada_cazorla.php"> Abril se marcha dejando nevada la Comarca</a></li>
            <li><a href="roban_vitrina_gimnasio_cazorla.php"> Roban en un gimnasio de la Calle del Carmen</a></li>
        </ul> 
        	</section>
            <section id="publi">
       	  <img src="../Images/publi_movil.png" width="342" height="276" alt="publicidad_samsung" /></td>
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
