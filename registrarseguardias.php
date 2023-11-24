<?php include('connect.php');
    
if(isset($_POST['registrarse'])) {
    $PASSWORD = $_POST['CONTRASEÑA'];
    $CUENTASIE = $_POST['SIE'];
    $IDIEST = $_POST['ID'];
    $SEMESTRE = $_POST['SEMESTRE'];
    $CARRERA = $_POST['CARRERA'];
    $NOMBRE = $_POST['NOMBRE'];

    $query="INSERT INTO users(CUENTASIE, PASSWORD, NOMBRE, IDIEST, CARRERA, SEMESTRE) VALUES('$CUENTASIE','$PASSWORD','$NOMBRE','$IDIEST','$CARRERA','$SEMESTRE')";
    $result=mysqli_query($conn, $query); 

    if (!$result) { //si result no es cierto dar un mensaje de fail
        die("Fail");
    }
    

    $_SESSION['message'] = "Guardado con éxito.";
    $_SESSION['message_type'] = 'success';


    header("Location: iniciarsesion.php");
}


?>

