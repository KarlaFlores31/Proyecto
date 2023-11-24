<?php
// Iniciamos la sesión
session_start();

// Si el usuario ya ha iniciado sesión, lo redirigimos a su perfil
if(isset($_SESSION['IDIEST'])) {
    header("location:miperfil.php");
    exit();
}

// Nos conectamos a la base de datos
$db = new mysqli("localhost", "e1", "1234", "equipo1");

// Si hay un error en la conexión, lo mostramos y terminamos el script
if($db->connect_error) {
    die("La conexión falló: " . $db->connect_error);
}

// Si el usuario ha enviado el formulario de inicio de sesión
if(isset($_POST['iniciarsesion'])) {
    // Escapamos los valores de entrada para prevenir inyecciones SQL
    $IDIEST = $db->real_escape_string($_POST['IDIEST']);
    $PASSWORD = $db->real_escape_string($_POST['PASSWORD']);
    
    // Preparamos la consulta SQL para buscar al usuario en la base de datos
    $sql = "SELECT * FROM users WHERE IDIEST=$IDIEST AND PASSWORD=$PASSWORD";
    $stmt = $db->prepare($sql);
    
    // Si la consulta se preparó correctamente
    if($stmt) {
        // Vinculamos los parámetros a la consulta y la ejecutamos
        $stmt->bind_param("ss", $IDIEST, $PASSWORD);
        $stmt->execute();
        
        // Obtenemos el resultado de la consulta
        $result = $stmt->get_result();
        
        // Si encontramos al menos un usuario que coincida con el IDIEST y la contraseña proporcionados
        if($result->num_rows >= 1) {
            // Guardamos el IDIEST del usuario en la sesión y lo redirigimos a su perfil
            $_SESSION['IDIEST'] = $IDIEST;
            header("location:miperfil.php");
            exit();
        } else {
            // Si no encontramos ningún usuario que coincida, mostramos un mensaje de error
            echo "Tu idiest o contraseña están incorrectos.";
        }
        
        // Cerramos la declaración preparada
        $stmt->close();
    } else {
        // Si hubo un error al preparar la consulta, lo mostramos
        echo "Error al preparar la consulta SQL: " . $db->error;
    }
}

// Cerramos la conexión con la base de datos
$db->close();
?>

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
								<form action="iniciarsesion.php" method="post"> <!-- Formulario de inicio de sesión que envía los datos mediante un POST -->
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
									<div class="btn"><input type="submit" id="iniciarsesion" name="iniciarsesion" value="Iniciar Sesión"></div> <!-- Botón para enviar el formulario -->
								</form>
							</div>
					</div>
				</div>
				<div class="card-back">
					<div class="center-wrap">
							<h4 >Trabajador</h4>
							<form action="iniciarsesionguardias.php" method="post"> <!-- Formulario de inicio de sesión que envía los datos mediante un POST -->
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
								<div class="btn"><input type="submit" id="iniciarsesion" name="iniciarsesion" value="Iniciar Sesión"></div> <!-- Botón para enviar el formulario -->
							</form>
					</div>
				</div>
			</div>
        </div>	
    </div>	
	</div>

</body>

</html>  <!-- Fin del documento HTML -->


