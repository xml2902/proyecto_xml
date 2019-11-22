<?php  

SESSION_START();
$_SESSION['comprobado']=$_POST['usuariosesion'];
 
if (isset($_POST)) {

	$usuario_sesion = $_POST['usuariosesion'];
	$contrasena_sesion = $_POST['contrasenasesion'];
	
	$registro_usuario = simplexml_load_file('../model/registro_usuario.xml');

	foreach ($registro_usuario as $usuario_unico) {
		
		if ($usuario_sesion==$usuario_unico->usuario&&$contrasena_sesion==$usuario_unico->contrasena) {
			header('location: ../visual/inicio.php');
			break;
		}
		else
		{
			header('location: ../index.php');
		}
	}








}






?>