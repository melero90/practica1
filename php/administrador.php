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

<script language="javascript" type="text/javascript">
	function valida_usuario(){
			if(form1.user.lenght >= 5){
				return true;
			}else{
				alert("Error: Nombre de usuario demasiado corto. 5 o más caracteres, por favor.");
				user.focus();
				return false;
			}
	} 
</script> 
    
<script language="javascript" type="text/javascript">
	function valida_contraseña(){
			if(form1.pass.lenght >= 7){
				return true;
			}else{
				alert("Error: La contraseña debe tener una longitud de 7 o más caracteres. Intentelo de nuevo.");
				pass.focus();
				return false;
			}
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
    <a href="index.php">Portada | </a> <a href="local.php"> Local | </a> <a href="provincia.php"> Provincia | </a> <a href="nacional.php"> Nacional |</a><a href="deportes.php"> Deportes | </a><a href="formulario.html"> Suscribirse edición papel </a></section>
    </td>
    
  </tr>
  <tr>
    <td>
    	<nav id="tituloseccion"> ADMINISTRADOR: ÚLTIMAS NOTICIAS</nav>
    </td>
  </tr>
</table>
      <table width="990" height="36" border="0">
  			<tr>
    			<td>
               	  <section id="formulario"> 
                    	<h1 id="parrafo2">NOTICIAS ACTUALMENTE EN EL SISTEMA:</h1>
                    	<?php
	  						include('mostrar_noticias.php');
							muestra_noticia();
	  					?>
                        <hr />
						  <p id="parrafo3">Rellena campos de este formulario y pulsa insertar para guardar la noticia. </p>
					
					<form id="form2" name="form2" method="post" action="insercion_noticia.php">

    				<p> Id: <br />  <input name="id" type="number" id="textfield" size="5" maxlength="5"  required /><br />
    				<p> Título: <br />  <input name="titulo" type="text" id="textfield" size="60" required />
    				<p> Categoría: <br />  <input name="cat" type="text" id="textfield" size="20" required />
                    <p> Cuerpo de la Noticia: <br />  <input name="cuerpo" type="text" id="textfield" size="90" required />
    				<p>
      				<input type="submit" name="button" id="button" value="Insertar Noticia" />
      				<input type="reset" name="button2" id="button" value="Limpiar Datos" />
      				<br />
    				</p>
  					</form>
                    <hr/>
                    <p id="parrafo3">Rellena campos de este formulario y pulsa actualizar para modificar la noticia. </p>
					
					<form id="form2" name="form2" method="post" action="modificar_noticia.php">

    				<p> Id: <br />  <input name="id" type="number" id="textfield" size="5" maxlength="5"  required /><br />
    				<p> Título: <br />  <input name="titulo" type="text" id="textfield" size="60" required />
    				<p> Categoría: <br />  <input name="cat" type="text" id="textfield" size="20" required />
                    <p> Cuerpo de la Noticia: <br />  <input name="cuerpo" type="text" id="textfield" size="90" required />
    				<p>
      				<input type="submit" name="button" id="button" value="Actualizar Noticia" />
      				<input type="reset" name="button2" id="button" value="Limpiar Datos" />
      				<br />
    				</p>
  					</form>
              		<hr />
                    <p id="parrafo3">Introduce el identificador (Id) de la noticia que desea eliminar. </p>
					
					<form id="form2" name="form2" method="post" action="eliminar_noticia.php">

    				<p> Id: <br />  <input name="id" type="number" id="textfield" size="5" maxlength="5"  required /><br />
                    
      				<input type="submit" name="button" id="button" value="Borrar Noticia" />
      				<input type="reset" name="button2" id="button" value="Limpiar Datos" />
      				<br />
    				</p>
  					</form>
                       	
                    </section>
                </td>
 		 	</tr>
	  </table>
      
      <table width="990" height="36" border="0">
  			<tr>
    			<td>
                	<section id="contacto"
                	<address id="infoperiodico"> Periodico Digital de Cazorla: Realizado por Antonio Melero Bello para la asignatura TECNOLOGIAS WEB de Ingenieria Informatica UGR </address>
                    <hr />
                    <a href="mailto:periodicocazorleño@gmail.com"> Contactar aquí </a>
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
