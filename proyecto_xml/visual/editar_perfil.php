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
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-3 btn-dark">
			<br>
				<br>
				<br>
				<br>
				<br>
				<h3>hola</h3>
				<br>
				<br>
				<a href="inicio.php" class="btn btn-outline-light container">Inicio</a>
				<br>
				<br>

			
				<br>	<br>
				<a href="cierre_sesion.php" class="btn btn-outline-light container">Cerrar sesión</a>
				<br>	<br>
		</div>
		<div class="col-9">
			<br>
				<br>
				<br>
				<br>
				<br>
		<form method="post" action="../control/editar_perfil.php">
			<h3>Puedes modificar uno o todos los campos</h3>
  <div class="form-group">
    <label for="exampleInputPassword1">contraseña</label>
    <input type="password" class="form-control" name="contrasena_editar">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">nombre </label>
    <input type="text" class="form-control" name="nombre_editar">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">direccion</label>
    <input type="text" class="form-control" name="direccion_editar">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">celular</label>
    <input type="number" class="form-control" name="celular_editar">
  </div>
  <button type="submit" class="btn btn-primary">Comfirmar lo editado</button>
</form>


		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>