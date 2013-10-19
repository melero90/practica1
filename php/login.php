<?php
include 'configuracion.php';

session_start();

conectar(1);

if ($_POST['user']) {
	//Comprobacion del envio del nombre de usuario y password
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	
	
	if ($pass==NULL) {
		echo "<script>alert('La contraseña no fue enviada');</script>";
	}else{
		$query = mysql_query("SELECT usuario,password FROM usuarios WHERE usuario = '$user'") or die(mysql_error());
		$data = mysql_fetch_array($query);
		if($data['password'] != $pass) {
			echo "<script>alert('Login incorrecto, intentelo de nuevo!');</script>";
		}else{
			$query = mysql_query("SELECT usuario,password FROM usuarios WHERE usuario = '$user'") or die(mysql_error());
			$row = mysql_fetch_array($query);
			$_SESSION['usuario'] = $row['usuario'];
			echo "<script>alert('Has sido logeado correctamente como $user ');</script>";
		}
	}
}
echo "<script language='javascript'>window.location='index.php'</script>;";


/*
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$sql = "SELECT * FROM usuarios WHERE nick='$usuario' AND password='$clave'";
	//ejecucion de la sentencia anterior
	echo "llega";
	$ejecutar_sql=mysql_query($sql)or die("no va la consulta");
	//si existe inicia una sesion y guarda el nombre del usuario
	if (mysql_num_rows($ejecutar_sql)!=0){
		//inicio de sesion
		session_start();
		//configurar un elemento usuario dentro del arreglo global $_SESSION
		$_SESSION['usuario']=$usuario;
		
	}
*/

?>