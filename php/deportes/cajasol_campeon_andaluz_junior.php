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
    	<nav id="tituloseccion">DEPORTES</nav>
    </td>
  </tr>
</table>
      <table width="990" height="102" border="0">
  <tr>
    <td width="651"><article id=articulonoticia> 
           	  <a href="cajasol_campeon_andaluz_junior.php" onMouseOver="ventanita(); return true;"><h2 id="titulonoticia"> Cajasol campeón andaluz Júnior Masculino  </h2></a>
            <h6 id="infonoticia"> Lunes, 22 de Abril de 2013 10:22 Laura Fernández @LauraFS4   </h6>
            <p id="parrafo">Finaliza el Campeonato de Andalucía júnior masculino con una apasionante jornada final en la que sus dos encuentros, la final y el tercer y cuarto puesto, se resolvió tras una prórroga y por tan solo dos puntos de diferencia.</p>                
            <p id="parrafo">El conjunto sevillano de Cajasol se proclamó ayer Campeón de Andalucía Júnior Masculino 2013, al derrotar al conjunto de Unicaja y tras una prórroga por (72 - 74) en la gran final del Campeonato de Andalucía finalizado en la mañana de ayer y celebrado durante toda la semana en las localidades jienenses de Cazorla y Peal de Becerro.</p>
            <p><img src="cajasol.jpg" width="350" height="314" alt="cajasol campeon" class="imagen" /> </p>
            <p id="parrafo">Tras una primera parte en la que el conjunto de Unicaja dominó en el marcador para irse al descanso con 11 puntos de ventaja (42 – 31), el partido cambió de rumbo tras el paso por los vestuarios con un Cajasol, que comenzó poco a poco a remontar para llegar al final del tercer periodo tan solo uno abajo (55 – 54) y con todo por decidir en los últimos 10 minutos. Durante este último periodo el marcador se mantuvo muy igualado y un menor acierto en el tiro por parte de ambos conjuntos les llevó al final del encuentro con empate a 64 puntos, siendo necesario un tiempo extra de 5 minutos en el que de nuevo la igualdad fue la tónica dominante pero donde finalmente el equipo de Cajasol algo más acertado, se llevó el encuentro y el título de campeón andaluz 2013, por un estrecho margen de dos puntos (70 – 72).</p>
            <p id="parrafo">En la lucha por la tercera plaza fantástico partido el que también brindó a todos los aficionados Jaén CB y Club Náutico de Sevilla y que con prórroga incluida se llevó el conjunto sevillano por tan solo dos puntos de diferencia (60 – 62). Con muchas alternativas en el marcador y dos cuartos para cada equipo se desarrolló este intenso partido que en varias ocasiones parecía se iba a romper pero que sin embargo una y otra vez se igualaba y devolvía el equilibrio al marcador, que tan solo se pudo romper tras un periodo extra de 5 minutos y con dos puntos de diferencia. Gran campeonato el realizado por ambos conjuntos, que además otorga al equipo sevillano una plaza en el Campeonato de España.</p>
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
        	<li><a href="guardiola_analiza_barsa_bayern.php"> Guardiola analiza el Barcelona - Bayern </a></li>
            <li><a href="el_bernabeu_si_remonto.php"> El Santiago Bernabeu si remontó </a></li>
            <li><a href="alonso_recuerda_barcelona_2006.php"> Fernando Alonso recuerda carrera de Barcelona 2006 </a></li>
            <li><a href="mourinho_se_va_chelsea.php"> La prensa inglesa asegura que Mourinho se va al Chelsea </a></li>
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
