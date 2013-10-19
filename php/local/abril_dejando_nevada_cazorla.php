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
           	  <a href="abril_dejando_nevada_cazorla.php" onMouseOver="ventanita(); return true;"><h2 id="titulonoticia"> Abril se va dejando nevada la Sierra de Cazorla </h2></a>
            <h6 id="infonoticia"> Lunes, 29 de Abril de 2013 12:05 </h6>
            <p id="parrafo">Los mercurios están disparatados. En   pocos días hemos pasado de superar los 25 grados en muchos puntos de la   comarca Sierra de Cazorla, a rozar los 0 grados en los puntos más altos   de la serranía en la noche de ayer.                
            <p id="parrafo">No solo llovió durante todo el día, sino   que a media tarde comenzó a nevar intensamente, una situación que se   prolongó durante algo más de una hora y dejó una estampa completamente   invernal en plena primavera.</p>
                <p id="parrafo">Así, hasta las 14:00 horas de hoy y a pesar de que el cielo está parcialmente nublado, Aemet, tiene activada la alerta amarilla por nieve.</p>
                <p><img src="nieve_abril.jpg" alt="cazorla nevada" width="400" height="225" class="imagen" /> </p>

				<p id="parrafo">Además, este frente gélido, también viene acompañado de una borrasca que durante el día de ayer dejó muchas precipitaciones y se prevé que mañana deje algunas más. Hasta las 20:00 horas de ayer se habían recogido 16 litros por metro cuadrado en Cazorla. </p>

 				<p id="parrafo">Mañana los mercurios seguirán en la misma línea que hoy, aunque aumentarán un poco las máximas. Por el contrario las mínimas seguirán situadas en 3 grados. Los cielos continuarán nublados y la probabilidad de lluvia es de un 70 por ciento en las horas centrales del día. </p>

				<p id="parrafo"> El miércoles parece que habrá un significante cambio, no lloverá y los mercurios subirán hasta los 17 grados.</p>
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
