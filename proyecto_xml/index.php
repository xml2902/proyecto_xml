<!DOCTYPE html>
<html>
<head>
	<title>Proyecto final xml</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


<div class="container">
	<div class="row">
		<div class="col-12">
		<br><br>
		<br>
		<br>
		<form method="post" action="control/iniciosesion.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Ingresar usuario</label>
    <input type="text" class="form-control" name="usuariosesion"  placeholder="Ingrese el usuario" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ingresar contraseña</label>
    <input type="password" class="form-control" name="contrasenasesion" placeholder="Ingrese la contraseña" required>
  </div>
  <button type="submit" class="btn btn-primary">Iniciar sesión</button>
  <h5>¿aún no tienes cuenta?, ¿qué esperas en adoptar?, registrate <a href="visual/registro.php">aquí</a></h5>
</form>
		</div>
	</div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>