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
           	  <a href="imputan_ocho_empresarios_barcenas.php"onMouseOver="ventanita(); return true;"><h2 id="titulonoticia">Ruz imputa a 8 empresarios donantes del PP citados en los papeles de Bárcenas </h2></a>
            <h6 id="infonoticia"> Europa Press | Madrid. Actualizado martes 30/04/2013 21:46 horas </h6>
            <p id="parrafo">El juez Pablo Ruz ha imputado a ocho empresarios que aparecen recogidos como donantes del PP en la en la contabilidad B atribuida a su ex tesorero Luis Bárcenas. Entre ellos, destacan el presidente de la constructora OHL, Juan Miguel Villar Mir, y el ex presidente de Sacyr Vallehermoso, Luis del Rivero.</p>                
            <p id="parrafo"> El magistrado de la Audiencia Nacional ha dictado una providencia donde les cita para prestar declaración los próximos 27 y 29 de mayo.</p>
            <p> </p>
            <p id="parrafo">Estas nuevas imputaciones se enmarcan en la pieza separada del 'caso Gürtel' en la que se investigan los 'papeles de Bárcenas', que recientemente un informe policial concluyó que los apuntes fueron anotados de su puño y letra.</p>
            <p id="parrafo">Asimismo, Ruz cita también a declarar, en este caso como testigos, a cargos 'populares' que admitieron haber cobrado dinero reflejado en los 'papeles de Bárcenas', entre los que se encuentra el presidente del Senado, Pío García Escudero, y el ex presidente de Baleares Jaume Matas</p>
            <p id="parrafo">os empresarios imputados son Juan Miguel Villar Mir (OHL), Luis de Rivero (Sacyr Vallehermoso), José Luis Sánchez Domínguez (Grupo Sando), Manuel Contreras Caro (Azvi), Alfonso García Pozuelo (Construcciones Hispánica), Juan Manuel Fernández (Aldesa), José Mayor Oreja (Fomento de Construcciones y Contratas) y Antonio Vilella (Construcciones Rubau).</p>
            <p id="parrafo">A estos ochos nombres, el juez suma la citación en calidad de imputado del presunto 'número dos' de la trama 'Gürtel', Pablo Crespo, que también figura como donante en los 'papeles' con un apunte de 21 millones de pesetas en 1999 cuando era responsable del PP de Galicia.</p>
            
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
