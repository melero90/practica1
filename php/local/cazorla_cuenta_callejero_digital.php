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
           	  <a href="cazorla_cuenta_callejero_digital.php" onMouseOver="ventanita(); return true;"><h2 id="titulonoticia"> Cazorla, único municipio jienense que ya cuenta con un callejero digital  </h2></a>
            <h6 id="infonoticia"> Lunes, 15 de Abril de 2013 11:19 </h6>
            <p id="parrafo"> Se puede ver en <a href="http://www.cazorla.es">www.cazorla.es</a> </p>               
            <p id="parrafo">El Aula de Cultura de la Diputación acogió la presentación del callejero digital unificado de Andalucía (CDAU), un proyecto en cuya elaboración la Administración provincial está colaborando con el Instituto de Estadística y Cartografía de Andalucía (ICA) y con el que se pretende aunar la información de los distintos callejeros disponibles de los municipios andaluces y crear uno solo que sea referencia para la planificación y la consulta de datos sobre calles, situación geográfica e instalaciones, entre otras cuestiones.</p>
                <p id="parrafo">"Es un instrumento útil para todas las administraciones, valioso para el ciudadano y de promoción de nuestras empresas porque nos da una visión actualizada del ámbito urbanístico, económico y social de cada pueblo y ciudad", subrayó el presidente de la Diputación, Francisco Reyes, en la presentación junto al director del Instituto de Estadística y Cartografía (IECA), Ignacio Pozuelo, de este proyecto a alcaldes y técnicos municipales de una quincena de ayuntamientos jienenses con los que se trabaja actualmente para la recogida y actualización de datos que se integrarán en el CDAU.</p>
                <p><img src="callejero_cazorla.jpg" alt="callejero" name="imagen" width="400" height="225"  class="imagen"/> </p>

				<p id="parrafo">En este acto, Francisco Reyes, quien también estuvo acompañado por el diputado de Infraestructuras Municipales, José Castro, y el delegado territorial de Economía, Innovación, Ciencia y Empleo, Manuel Gabriel Pérez, explicó que este callejero digital se realiza en el marco de un convenio entre la Diputación y el Instituto de Estadística y Cartografía de Andalucía, que depende de la Junta de Andalucía, firmado hace ahora un año y que ha dado como resultado un callejero que, según el presidente de la Corporación provincial, es una herramienta "muy práctica para ayuntamientos, empresas y ciudadanos". </p>

 				<p id="parrafo">Por ahora, en la provincia de Jaén se ha terminado el de Cazorla, y están a punto de concluirse los de Villacarrillo y Mancha Real, mientras que en otros doce municipios está en fase de elaboración y las previsiones son que para 2014 esté finalizado en todas las localidades jienenses. Su realización permitirá, según Reyes, que "los ayuntamientos mejoren la gestión municipal y se favorezca la coordinación con otras administraciones, se facilite la información de residentes y actividades y, por tanto, se contribuya a una mejor planificación de zonas urbanas y de la distribución de equipamientos públicos y recursos, además de que se aumentará la eficacia de la prestación de los servicios públicos, por ejemplo a la hora de optimizar rutas en servicios indispensables como los de emergencias, o para la gestión tributaria". </p>

				<p id="parrafo"> Pero los consistorios no son los únicos que se podrán beneficiar de esta precisa herramienta, donde las empresas pueden encontrar, como detalló el presidente de la Diputación, "un soporte para promocionar sus servicios, especialmente las de hostelería y comercio, porque este callejero será muy importante para los turistas que buscan un lugar a la hora de comer o dormir cuando visitan nuestra provincia". Igualmente, destacó su utilidad para las empresas dedicadas a la logística o el transporte y que también "abre nuevas vías de generación de productos y servicios". Por último, la ciudadanía en general "tendrá acceso a una información más actualizada, ya que se ofrecerán más posibilidad de localizar cualquier lugar o trazar rutas", concluyó Reyes.

 </p>
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
            <li><a href="abril_dejando_nevada_cazorla.php"> Abril se va dejando nevada la Comarca</a> </li>
            <li><a href="junta_inicia_trabajos_forestales.php"> Junta inicia trabajos de reforestacion en Sierra Cazorla</a></li>
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
