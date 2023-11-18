<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <style>
        body {
            background-color: #1a1a1a;
            color: #fff;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin: 20px 0;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"] {
            width: 300px;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
        }

        input[type="submit"] {
            width: 200px;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
    include_once("conector.php");

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // Recuperar las credenciales ingresadas por el usuario
        $username = $_GET["username"];
        $useremail = $_GET["useremail"];
        $userid = $_GET["userid"];
        $userphone = $_GET["userphone"];
        $userpassword = $_GET["userpassword"];

        // Conectar a la base de datos
        $conectar = conn();

        // Hash de la contraseña
        $hashed_password = password_hash($userpassword, PASSWORD_DEFAULT);

        // Consulta segura utilizando sentencias preparadas
        $sql = "INSERT INTO clientes (name, email, id, number, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conectar, $sql);

        // Vincular parámetros
        mysqli_stmt_bind_param($stmt, "ssiss", $username, $useremail, $userid, $userphone, $hashed_password);

        // Ejecutar la sentencia preparada
        $resul = mysqli_stmt_execute($stmt);

        if (!$resul) {
            $error_message = "Error: " . mysqli_error($conectar);
            trigger_error($error_message, E_USER_ERROR);
        } else {
            echo "<h1>¡Se ha registrado con éxito!</h1>";
        }

        // Cerrar la sentencia preparada
        mysqli_stmt_close($stmt);

        // Cerrar la conexión
        mysqli_close($conectar);
    }
    ?>
    <meta http-equiv="refresh" content="10;url=index.php"/>
</body>
</html>

  