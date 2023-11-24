<?php
if(!isset($_SESSION['IDIEST'])){

}else{
    $idUsuario = $_SESSION['IDIEST']; 
}
?>
<!doctype html>
<html>
<head>
	<title>Mi Perfil</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" href="comun/css/barra-fija.css">
	<link rel="stylesheet" href="comun/css/miperfilcss.css">
	<link rel="shortcut icon" href="/comun/imagenes/logop.png">
	<link href="comun/css/miperfilcss.css" rel="stylesheet" type="text/css">
	<script src="comun/js/links-input.js"></script>

</head>

<header>
	<!--MENU-->
	<div class="barra">
		<nav class="container">
			<a> <img class="imglogo" src="comun/imagenes/logo.png" alt="logoiest"></a>
			<ul class="menu">
				<li class="nav-item ">
					<a class="nav-link-item" href="">DISPONIBILIDAD DE ESTACIONAMIENTO</a>
				</li>
				<li class="nav-item">
					<a class="nav-link-item" href="miperfil.php">MI PERFIL</a>
				</li>
				<li class="nav-item">
					<a class="nav-link-item" href="cerrarsesion.php">CERRAR SESION</a>
				</li>
			</ul>
		</nav>
	</div>
</header> 
<body>
<div class="box-containerfondo">
	<!-- Div del texto e imagen-->
	<div class="container-titulo"> 
	<!-- Div para poner a la izquierda e texto -->
		<div class="miperfil">
			<a><img class="img" src="comun/imagenes/perfil.png" alt="imagen de alerta"></a>
			<div class="box-container">
				<div class="cajaperfil">
		<table style="padding-top: 35px;"> 
					<?php
		include 'connect.php';
        $idUsuario = $_SESSION['IDIEST'];
        $sql = "SELECT * FROM trabajadores WHERE IDIEST=$idUsuario";
        $result_usuario = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result_usuario)){ ?>
        <tr>
        
        <td class="NU"><?php echo $row['NOMBRE']; ?> </td>
        </tr>
        <tr>
        <td class="info"> <?php echo $row['DIVISION']; ?> </td>
        </tr>
		<tr> 
		<td class="info"> <?php echo $row['IDIEST']; ?> </td>
        </tr>
          <?php
         }
         ?>
					</table>

				</div>
			</div>
		</div>
	</div>
	</div>
     
		<div class="box-container">
		<div class="caja">
			<div class="container-link">
				<p></p>
				<h4>Vehículo</h4>
				<p></p>
				<br> 
				<div class="button" onclick="location.href='sanciones.html'"><input type="submit" id="espacio" name="espacio" value="IR"></div>
			</div>
			<div>
				<a><img class="img2" src="comun/imagenes/carro.png"></a>
			</div>
		</div>
			
		<div class="caja">
			<div>
				<a><img class="img2" src="comun/imagenes/disc.png"></a>
			</div>		
			<div class="container-link">
				<p></p>
				<h4>Solicitud Espacio</h4>
				<h4>Casos Especiales</h4>
				<p></p>
				<div class="button" onclick="location.href='sanciones.html'"><input type="submit" id="espacio" name="espacio" value="IR"></div>
			</div>
		</div>
	</div>
	
<footer class="container3"> </footer>
</body>
 
</html>
