<?php
// login.php
error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();

include_once("conector.php");

$mensaje_error = ""; // Inicializamos la variable de mensaje de error

// Procesar formulario de inicio de sesión si se ha enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cedula = $_POST['userid'];
    $password = $_POST['password'];

    $conectar = conn();

    $sql = "SELECT id, name, email, password FROM clientes WHERE id = '$cedula'";
    $resultado = mysqli_query($conectar, $sql);

    if (!$resultado) {
        die("Error en la consulta: " . mysqli_error($conectar));
    }

    if (mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_assoc($resultado);

        if (password_verify($password, $usuario['password'])) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nombre'] = $usuario['name'];

            header('Location: principal.php');
            exit;
        } else {
            $mensaje_error = "Contraseña incorrecta";
        }
    } else {
        $mensaje_error = "Usuario no encontrado";
    }

    mysqli_close($conectar);
}

?>

<!-- Código HTML para mostrar el mensaje de error -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAOS</title>
    <!-- Agrega tus estilos y enlaces necesarios aquí -->
</head>

<body>

    <!-- Agrega el código HTML de tu página aquí -->
    
    <?php
    // Mostrar mensaje de error si existe
    if (!empty($mensaje_error)) {
        echo "<p>$mensaje_error</p>";
    }
    ?>

</body>

</html>
