<?php
// Iniciamos la sesión
session_start();

// Si el usuario ya ha iniciado sesión, lo redirigimos a su perfil
if(isset($_SESSION['IDIEST'])) {
    header("location:miperfiltrabajadores.php");
    exit();
}

// Nos conectamos a la base de datos
$db = new mysqli("localhost", "e1", "1234", "equipo1");

// Si hay un error en la conexión, lo mostramos y terminamos el script
if($db->connect_error) {
    die("La conexión falló: " . $db->connect_error);
}

// Si el usuario ha enviado el formulario de inicio de sesión
if(isset($_POST['iniciarsesiontrabajadores'])) {
    // Escapamos los valores de entrada para prevenir inyecciones SQL
    $IDIEST = $db->real_escape_string($_POST['IDIEST']);
    $PASSWORD = $db->real_escape_string($_POST['PASSWORD']);
    
    // Preparamos la consulta SQL para buscar al usuario en la base de datos
    $sql = "SELECT * FROM trabajadores WHERE IDIEST=$IDIEST AND PASSWORD=$PASSWORD";
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
            header("location:miperfiltrabajadores.php");
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

