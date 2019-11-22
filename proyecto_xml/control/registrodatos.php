<?php  
if (isset($_POST)) {
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
	$nombreCompleto = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	$celular = $_POST['celular'];
	echo "existe post, este es el usuario ".$usuario."<br>";
	echo "existe post, este es el usuario ".$contrasena."<br>";
	echo "existe post, este es el usuario ".$nombreCompleto."<br>";
	echo "existe post, este es el usuario ".$direccion."<br>";
	echo "existe post, este es el usuario ".$celular."<br>";



	$registro_usuario = simplexml_load_file('../model/registro_usuario.xml');

$usuario_unico = $registro_usuario->addChild('usuario_unico');
$usuario_unico->addChild('usuario', $usuario);
$usuario_unico->addChild('contrasena', $contrasena);
$usuario_unico->addChild('nombreCompleto', $nombreCompleto);
$usuario_unico->addChild('direccion', $direccion);
$usuario_unico->addChild('celular', $celular);


file_put_contents('../model/registro_usuario.xml', $registro_usuario->asXML());
header('location: ../index.php');



}
else
{
	echo "no hay post";
}


?>