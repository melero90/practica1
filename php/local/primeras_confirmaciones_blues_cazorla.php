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
           	  <a href="primeras_confirmaciones_blues_cazorla.php" onMouseOver="ventanita(); return true;"><h2 id="titulonoticia">Fito y Fitipaldis y Bettye LaVette, primeras confirmaciones del BluesCazorla 2013 </h2></a>
            <h6 id="infonoticia"> Martes, 02 de Abril de 2013 09:30 Laura Fernández @LauraFS4 </h6>
            <p id="parrafo">A ellos se unen otros artistas como Los Coronas, Curtis Salgado, Chris Kane, Texas Scrath, Anson Thundergerg, Nine Below Zero , Ian Segal, Mighty Calacas, Los Deltonos y la primera banda confirmada del festival George Thorogood and Destroyer. </p>
            <p id="parrafo">Cazorla ya huele a blues. Las primeras confirmaciones ya están en marcha y Cazorla va a poder disfrutar de dos grandes voces del panorama nacional e internacional.</p>
              <p id="parrafo">Como viene ocurriendo tras varios años habrá un gran artista del panorama nacional. Loquillo, Rosendo, M-Clan y Raimundo Amador ya han pisado las tablas del escenario de la plaza de toros, este año es el turno de la mítica banda Fito y Fitipaldis.</p>
                <p><img src="artistas_blues.jpg" width="325" height="175" alt="artistas del blues" class="imagen" /> </p>

				<p id="parrafo">Premio Ondas 2009 al 'Mejor Artista Nacional', Fito Cabrales cuenta con una gran trayectoria en el mundo musical, antes en Platero y Tú y desde 1998 con Los Fitipaldis. Los asistentes al festival blusero podrán disfrutar de grandes canciones como 'Soldadito Marinero', 'A la luna se le ve el ombligo' o 'La casa por el tejado' entre muchas otras.</p>

			  <p id="parrafo">Una de las grandes voces del Soul del momento visitará la localidad serrana de la mano de Bettye LaVette. </p>

			  <p id="parrafo"> Lanzó su primer single, 'My man', a la temprana edad de 16 años de la mano de la discográfica Atlantic Records. Tuvo un éxito intermitente durante todos estos años hasta la publicación de su trabajo 'I've got my own hell to rise' en 2005, con el cual tuvo un gran reconocimiento internacional. Su estilo se mueve entre el Soul, Country, Rock, Funk y Gospel. Ha compartido escenario con artistas de la talla de Clyde McPhatter, Ben E. King, Barbara Lynn y el por entonces nueva promesa Otis Redding, así como una pequeña gira con James Brown.</p>
              <p id="parrafo"> El festival BluesCazorla ya está en marcha, el próximo 4, 5 y 6 de julio Cazorla volverá a sonar a blues por todos sus rincones.</p>
              
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
        	<li><a href="abril_dejando_nevada_cazorla.php"> Abril se marcha dejando nevada la Comarca </a></li>
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
