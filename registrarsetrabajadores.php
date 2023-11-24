<?php include('connect.php');
    
if(isset($_POST['registrarsetrabajadores'])) {
    $PASSWORD = $_POST['CONTRASEÑA'];
    $IDIEST = $_POST['ID'];
    $DIVISION = $_POST['DIVISION'];
    $NOMBRE = $_POST['NOMBRE'];

    $query="INSERT INTO trabajadores(PASSWORD, NOMBRE, IDIEST, DIVISION) VALUES('$PASSWORD','$NOMBRE','$IDIEST','$DIVISION')";
    $result=mysqli_query($conn, $query); 

    if (!$result) { //si result no es cierto dar un mensaje de fail
        die("Fail");
    }
    

    $_SESSION['message'] = "Guardado con éxito.";
    $_SESSION['message_type'] = 'success';


    header("Location: iniciarsesion.php");
}


?>

