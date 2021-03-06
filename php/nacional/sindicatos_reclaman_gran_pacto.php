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
           	  <a href="sindicatos_reclaman_gran_pacto.php" onMouseOver="ventanita(); return true;"><h2 id="titulonoticia">Los sindicatos reclaman un gran pacto ante la emergencia nacional del paro </h2></a>
            <h6 id="infonoticia">  Manuel V. Gómez Madrid 1 MAY 2013 - 11:54 CET </h6>
            <p id="parrafo">Más de 6,2 millones de parados llevan a España a una situación de "emergencia nacional", creen los sindicatos. Por eso, este miércoles, aprovechando el Primero de Mayo, reclaman "un gran acuerdo para cambiar el modelo económico, por el empleo y la protección", en palabras del líder de CC OO, Ignacio Fernández Toxo. Entre las cosas que tendría que contar ese pacto estaría un plan de choque para estimular la actividad económica.</p>                
            <p id="parrafo"> "Este Primero de Mayo tiene que marcar un antes y un después", ha exigido Cándido Méndez, secretario general de UGT. "En primer lugar, hay que poner el empleo", ha continuado antes de reclamar que, para ello, Europa destine entre el 1% y el 2% de su PIB a luchar contra el paro.</p>
            <p><img src="sindicatos.jpg" width="360" height="233" alt="sindicatos" class="imagen" /> </p>
            <p id="parrafo">"Es mentira que no haya alternativas a esta política económica", han defendido los líderes sindicales, que para lograr el pacto se han mostrado dispuestos a asumir el coste y la responsabilidad política que les corresponda.</p>
            <p id="parrafo">Según Méndez, UGT y CC OO esperan hoy "una gran participación" en los actos convocados con motivo del Día del Trabajo, aunque también ha advertido de que, en su opinión, no tiene sentido entrar en una guerra de cifras. Según ha defendido, la asistencia no marcará el rechazo "muy mayoritario" que hay en la sociedad española a los recortes. "Hoy no pedimos el apoyo a los sindicatos, sino que la gente salga a la calle por sus derechos, por los parados, por los preferentistas, por los precarios", ha zanjado Toxo.</p>
            <p id="parrafo">Asimismo, este año el Primero de mayo se desarrolla a un mes de que empiece a vencer en muchos convenios colectivos el límite de un año dado en la reforma laboral para su renovación, situación que afecta a cuatro millones de trabajadores, según las cifras que manejan los sindicatos. Por esta razón, Méndez ha incluido entre las reivindicaciones de la jornada exigir a la patronal que cumpla el acuerdo sobre negociación colectiva, firmado en enero de 2012.</p>
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
            <li><a href="rajoy_promete_ajuste_bruselas.php"> Rajoy promete nuevos ajustes a Bruselas </a></li>
            <li><a href="imputan_ocho_empresarios_barcenas.php"> Imputan a ocho empresarios relacionados con el caso Bárcenas</a></li>
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
