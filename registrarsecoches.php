<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","e1","1234","equipo1");
if(isset($_POST['registrarse']))
{
    $ID=mysqli_real_escape_string($db,$_POST['ID']);
    $MODELO=mysqli_real_escape_string($db,$_POST['MODELO']);
    $COLOR=mysqli_real_escape_string($db,$_POST['COLOR']);
	$AGENCIA=mysqli_real_escape_string($db,$_POST['AGENCIA']);
	$PLACAS=mysqli_real_escape_string($db,$_POST['PLACAS']);
    $query = "SELECT * FROM coches WHERE ID = '$ID'";
    $result=mysqli_query($db,$query);
      if($result)
      {
     
        if( mysqli_num_rows($result) > 0)
        {
                
                echo '<script language="javascript">';
                echo 'alert("Username already exists")';
                echo '</script>';
        }
        
          else
          {
            
            
                //Create User
               
                $sql="INSERT INTO coches(MODELO,COLOR, AGENCIA,PLACAS) VALUES('$MODELO','$COLOR','$AGENCIA','$IDIEST','$PLACAS')"; 
                mysqli_query($db,$sql);                         
                header("location:iniciarsesion.php");  //redirect home page
            }            
                  
            
          }
      }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro de Automovil</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" href="comun/css/registrarse.css">
	<link rel="shortcut icon" href="/comun/imagenes/logop.png">

</head>
	
<aside class="container2">
	<a> <img class="A" src="comun/imagenes/anahuac.png"></a>
</aside>

<header>
	<!--MENU-->
	<div class="barra">
		<nav class="container">
			<a> <img class="imglogo" src="comun/imagenes/logo.png" alt="logoiest"></a>
			<ul class="menu">
				<li class="nav-item ">
					<a class="nav-link-item" href="index.html">INICIO</a>
				</li>
				<li class="nav-item">
					<a class="nav-link-item" href="iniciarsesion.php">INICIAR SESIÓN</a>
				</li>
			</ul>
		</nav>
	</div>
</header> 

<body>
	<section class="login">
		<div class="log">
			<p>Registrarse</p>
		</div>
	
		<div class="box-container">
            <form action="registrarse.php" method="post" class="box-container"> 
            <div class="box">
                <p></p>
                <input type="text" id="Sie" name="SIE" placeholder=" Cuenta Sie">
                <p></p>
                <input type="text" id="ID" name="ID" placeholder=" ID">
                <p></p>
                <input list="semestre" type="text" id="Semestre" name="SEMESTRE" placeholder=" Semestre">
                <datalist id="semestre">
                    <option value="Primer Semestre">1°</option>
                    <option value="Segundo Semestre">2°</option>
                    <option value="Tercer Semestre">3°</option>
                    <option value="Cuarto Semestre">4°</option>
                    <option value="Quinto Semestre">5°</option>
                    <option value="Sexto Semestre">6°</option>
                    <option value="Séptimo Semestre">7°</option>
                    <option value="Octavo Semestre">8°</option>
                    <option value="Noveno Semestre">9°</option>
                    <option value="Otro">Otro</option>
                </datalist>
            </div>
            <div class="box">
                <p></p>
                <input type="password" id="Contraseña" name="CONTRASEÑA" placeholder=" Contraseña">
                <p></p>
                <input type="text" id="Nombre" name="NOMBRE" placeholder=" Nombre Completo">
                <p></p>
                <input list="carrera" type="text" id="Carrera" name='CARRERA' placeholder=" Carrera">
                <datalist id="carrera">
                    <option value="ISND">Ingeniería en Sistemas y Negocios Digitales</option>
                    <option value="IQ">Ingeniería Química</option>
                    <option value="II">Ingeniería Industrial</option>
                    <option value="IM">Ingeniería Mecatrónica</option>
                    <option value="ADE">Administración y Dirección de Empresas</option>
                    <option value="FCP">Finanzas y Contaduría Pública</option>
                    <option value="GB">Gastronomía</option>
                    <option value="ME">Mercadotecnia Estratégica</option>
                    <option value="NI">Negocios Internacionales</option>
                    <option value="MC">Médico Cirujano</option>
                    <option value="ARQ">Arquitectura</option>
					<option value="CT">Ciencias Teológicas</option>
					<option value="DCHO">Derecho</option>
					<option value="DG">Diseño Gráfico</option>
					<option value="F">Filosofía</option>
					<option value="I">Idiomas</option>
                </datalist>
				</div>
			</div>
        <div class="single"><input list="rol" type="text" id="Roles" name="ROLES" placeholder=" Roles"></div>
        <datalist id="rol">
            <option>Estudiante</option>
            <option>Empleado</option>
            <option>Guardia</option>
        </datalist>
            <div class="button"><input type="submit" id="registarse" name="registrarse" value=" Registrarse"></div>
        </form>
    </section>

        </div>

<!--script js -->
<script src="comun/js/links-input.js"></script>
</body>
 
</html>