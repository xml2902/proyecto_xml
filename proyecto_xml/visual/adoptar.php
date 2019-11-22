 <?php 
SESSION_START();

if (!$_SESSION['comprobado']) {
	header('location: ../index.php');
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 	<style type="text/css">
 		.centro{
 			text-align: center;
 			margin-top: 10%;
 		}
 	</style>
 </head>
 <body>
 

 <div class="container">
 	<div class="row">
 		<div class="col-12 centro">
 			<h3>Muchas gracias por adoptar</h3>
 			<img src="../img/mascota.gif">
<?php
$mascotas = simplexml_load_file('../model/mascotas.xml');

foreach($mascotas as $mascota) { 
	 if($mascota['codigo'] == $_GET['id']){
	 	echo "<h4>".$mascota->nombre." llegará pronto a tu casa</h4>";
  		
  	


	 	break;
	 } 
	 }













$registro_usuario = simplexml_load_file('../model/registro_usuario.xml');
$nombre_completo;
$direccion;
$celular;
foreach($registro_usuario as $usuario_unico) { 
	 if($usuario_unico->usuario == $_SESSION['comprobado']){
	 	
  		$nombre_completo = $usuario_unico->nombreCompleto;
  		$direccion = $usuario_unico->direccion;
  		$celular = $usuario_unico->celular;

	 	break;
	 } 
	 }













	$tarjeta_adopcion = simplexml_load_file('../model/tarjeta_adopcion.xml');

$adopcion = $tarjeta_adopcion->addChild('adopcion');
$adopcion->addAttribute('codigoMascota', $_GET['id']);
$adopcion->addAttribute('usuarioNombre', $_SESSION['comprobado']);
$adopcion->addChild('nombreCompleto', $nombre_completo);
$adopcion->addChild('direccion', $direccion);
$adopcion->addChild('celular', $celular);


file_put_contents('../model/tarjeta_adopcion.xml', $tarjeta_adopcion->asXML());















//Código para eliminar nodos

$xml = new DomDocument("1.0","UTF-8");
$xml->load('../model/mascotas.xml');
$cname = $mascota->nombre;
$xpath = new DOMXPATH ($xml);
foreach ($xpath->query("/mascotas/mascota [nombre = '$cname']") as $node) {
	$node->parentNode->removeChild($node);
}
$xml->formatoutput = true;
$xml->save('../model/mascotas.xml');
//fin de código para eliminar nodos





















	?>
	<br>
	<br>
<a class="btn btn-primary" href="inicio.php" role="button">Regresar a página principal</a>

 		</div>
 	</div>
 </div>



 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>
 </html>