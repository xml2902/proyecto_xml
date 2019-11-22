
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
				<a href="editar_perfil.php" class="btn btn-outline-light container">Editar perfil</a>
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
				<h3>Esta es una lista de los animales que estan para adoptar</h3>
				<br>
				<table class="table">
  <thead>
    <tr>
      <th scope="col">codigo mascota</th>
      <th scope="col">nombre</th>
      <th scope="col">edad</th>
      <th scope="col">especie</th>
    </tr>
  </thead>
  <tbody>

<?php
      
$mascotas = simplexml_load_file('../model/mascotas.xml');

foreach($mascotas as $mascota) { ?>
	<tr>
		<td><?php echo $mascota['codigo']; ?></td>
		<td><?php echo $mascota->nombre; ?></td>
		<td><?php echo $mascota->edad; ?></td>
		<td><?php echo $mascota->especie; ?></td>
		<td><a href="adoptar.php?id=<?php echo $mascota['codigo']; ?>">Adoptar</a> 
		</td>
	</tr>
	<?php } 

	?>

  </tbody>
</table>
<br>
    <br>
			</div>
		</div>
	</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>