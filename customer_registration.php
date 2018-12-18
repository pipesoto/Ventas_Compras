<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Mercado Online</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="http://tusolutionweb.blogspot.pe/" class="navbar-brand">Mercado Online</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Productos</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Formulario registro de cliente</div>
					<div class="panel-body">
					
					<form method="post">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">Nombre</label>
								<input type="text" id="f_name" name="f_name" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="f_name">Apellidos</label>
								<input type="text" id="l_name" name="l_name" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">password</label>
								<input type="password" id="password" name="password" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Repetir Password</label>
								<input type="password" id="repassword" name="repassword" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="rut">Cédula de Identidad</label>
								<input type="text" id="rut" name="rut" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="fecha_nac">Fecha de Nacimiento</label>
								<input type="text" id="fecha_nac" name="fecha_nac" class="form-control">
							</div>
						</div>
						
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="float:right;" value="Registrarse" type="button" id="signup_button" name="signup_button"  class="btn btn-success btn-lg">
							</div>
						</div>
						
					</div>
					</form>
					<div class="panel-footer"><center>Todos los derechos reservados Felipe Soto </center></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>



















