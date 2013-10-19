<?php
include 'configuracion.php';

session_start();

conectar(1);

	$texto=$_POST['comentario'];
	$not=$_POST['noticia'];
	$user=$_POST['usuario'];
	

	$consulta = ("INSERT INTO comentarios (id_noticia, usuario, comentario) VALUES ('$not','$user','$texto')");
			mysql_query($consulta) or die(mysql_error());
			echo "<script>alert('Has insertado un comentario correctamente como $user ');</script>";
			echo "<script language='javascript'>window.location='index.php'</script>;";
?>

