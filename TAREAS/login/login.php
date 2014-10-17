<!DOCTYPE html>
<!--pagina de logueo hacia la tienda-->
<html>
	<head>
	<meta charset="utf-8"> <!--codificacion-->
    <title>Inicio de Sesion</title>
    <link href="./css/bootstrap.css" rel="stylesheet">
	<style>
		.vertical-offset-100{
		  padding-top:100px;
		}
		
		body{
			background: linear-gradient(#04B404,#0B0B61);
			
		}
		
	</style>
	
	</head>
	
	<body background>
		<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Inicia Sesion</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form id="forma" method="post" action="validacion.php" role="form">
                    <fieldset>
						<div class="form-group">
			    		    <input class="form-control" placeholder="Usuario" name="name" type="text">
			    		</div>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Correo Electronico" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Contrseña" name="password" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Mantener Sesion
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Entrar">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
	</div>
	<script src="./js/jquery.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	</body>


</html>
