<?php include('connect.php'); ?>

<!DOCTYPE html> 
<html lang="en"> 

<head> <!-- Inicio de la cabecera del documento -->
	<title>Iniciar Sesión</title> <!-- Título del documento -->
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=Edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" href="comun/css/formulario.css">
	<link rel="stylesheet" href="comun/css/registrarse.css">
	<link rel="stylesheet" href="comun/css/iniciarsesion.css"> <!-- Enlaza la hoja de estilos CSS -->
	<link rel="shortcut icon" href="/comun/imagenes/logop.png"> <!-- Icono de la página -->
</head>

<aside class="container2"> <!-- Inicio del contenedor lateral -->
	<a> <img class="A" src="comun/imagenes/anahuac.png"></a> <!-- Imagen en el contenedor lateral -->
</aside>

<header> <!-- Inicio del encabezado -->
	<div class="barra"> <!-- Inicio de la barra de navegación -->
		<nav class="container"> <!-- Inicio del contenedor de navegación -->
			<a> <img class="imglogo" src="comun/imagenes/logo.png" alt="logoiest"></a> <!-- Logo en la barra de navegación -->
			<ul class="menu"> <!-- Inicio del menú de navegación -->
				<li class="nav-item "> 
					<a class="nav-link-item" href="index.html">INICIO</a> <!-- Botón INICIO -->
				</li>
				<li class="nav-item">
					<a class="nav-link-item" href="registrarseformulario.php">REGISTRARSE</a> <!-- Botón REGISTRARSE -->
				</li>
			</ul> 
		</nav> 
	</div>
</header>

<body> <!-- Inicio del cuerpo del documento -->
	<div class="cajas">
		<p>Iniciar Sesión</p>
		<h4><span>Estudiante</span> <span>Trabajador</span></h4>
			<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			<label for="reg-log"></label>
		<div class="card-3d-wrap">
			<div class="card-3d-wrapper">
				<div class="card-front">
					<div class="center-wrap">
							<h4>Estudiante</h4>
							<div class="form-group">
								<form action="iniciarsesionusuarios.php" method="post"> <!-- Formulario de inicio de sesión que envía los datos mediante un POST -->
									<div class="box-container">
										<div class="box">
											<p></p>
											<input type="text" id="Sie" name="IDIEST" placeholder=" ID IEST"> <!-- Campo de texto para el IDIEST -->
										</div>
										<div class="box">
											<p></p>
											<input type="password" id="Contraseña" name="PASSWORD" placeholder=" Contraseña"> <!-- Campo de contraseña para la contraseña -->
										</div>
									</div>
									<br>
									<div class="btn"><input type="submit" id="iniciarsesion" name="iniciarsesionusuarios" value="Iniciar Sesión"></div> <!-- Botón para enviar el formulario -->
								</form>
							</div>
					</div>
				</div>
				<div class="card-back">
					<div class="center-wrap">
							<h4 >Trabajador</h4>
							<form action="iniciarsesiontrabajadores.php" method="post"> <!-- Formulario de inicio de sesión que envía los datos mediante un POST -->
								<div class="box-container">
									<div class="box">
										<p></p>
										<input type="text" id="Sie" name="IDIEST" placeholder=" ID IEST"> <!-- Campo de texto para el IDIEST -->
									</div>
									<div class="box">
										<p></p>
										<input type="password" id="Contraseña" name="PASSWORD" placeholder=" Contraseña"> <!-- Campo de contraseña para la contraseña -->
									</div>
								</div>
								<br>
								<div class="btn"><input type="submit" id="iniciarsesion" name="iniciarsesiontrabajadores" value="Iniciar Sesión"></div> <!-- Botón para enviar el formulario -->
							</form>
					</div>
				</div>
			</div>
        </div>	
    </div>	
	</div>

</body>

</html>  <!-- Fin del documento HTML -->
