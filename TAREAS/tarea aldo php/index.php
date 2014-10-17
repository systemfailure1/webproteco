<?php 
	if(!isset($_SESSION)){
		session_start();
	}

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="contro/usuarios.php">Ver Usuarios</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="row">
		<div class="col-lg-6">
			<form role="form" action="contro/registro.php" method="post">
				<fieldset>
					<legend>Registrarse</legend>
					<div class="form-group">
						<label for="Usuario">Usuario:</label>
						<input type="text" name="user" placeholder="Usuario">
					</div>
					<div class="form-group">
						<label for="contraseña">Contraseña:</label>
						<input type="password" name="pass" placeholder="Contraseña">
					</div>
					<div class="form-group">
						<label for="correo">Correo:</label>
						<input type="email" name="email" placeholder="Correo">
					</div>
					<input type="submit" class="btn btn-success">
				</fieldset>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<form role="form" action="contro/login.php" method="post">
				<fieldset>
					<legend>Inicio de Sesion</legend>
					<div class="form-group">
						<label for="Usuario">Usuario:</label>
						<input type="text" name="user" placeholder="Usuario">
					</div>
					<div class="form-group">
						<label for="contraseña">Contraseña:</label>
						<input type="password" name="pass" placeholder="Contraseña">
					</div>
					<input type="submit" class="btn btn-success">
				</fieldset>
			</form>
		</div>
	</div>

</body>
</html>