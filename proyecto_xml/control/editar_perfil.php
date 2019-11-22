<?php 
SESSION_START();
if (!$_SESSION['comprobado']) {
	header('location: ../index.php');
}
echo "este es el usuario".$_SESSION['comprobado'];
if (isset($_POST)) {


$registro_usuario = simplexml_load_file('../model/registro_usuario.xml');

$probado = 0;

foreach($registro_usuario as $usuario_unico){
		if($usuario_unico->usuario==$_SESSION['comprobado']){
			$usuario_unico->contrasena = $_POST['contrasena_editar'];
			$usuario_unico->nombreCompleto = $_POST['nombre_editar'];
			$usuario_unico->direccion = $_POST['direccion_editar'];
			$usuario_unico->celular = $_POST['celular_editar'];
			file_put_contents('../model/registro_usuario.xml', $registro_usuario->asXML());
			$probado = 1;
			break;
			
		}
	}
if ($probado == 1) {
	echo "datos modificados exitosamente";
	header('location: ../visual/inicio.php');
}






}
else
{
	header('location: ../visual/editar_perfil.php');
}


 ?>