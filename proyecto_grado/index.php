<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #222;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #555;
            border-radius: 5px;
            background-color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #fff;
        }
        input[type="number"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #555;
            border-radius: 4px;
            color: #fff;
            background-color: #444;
        }
        input[type="submit"] {
            background-color: #555;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #777;
        }
        a {
            color: #fff;
        }
    </style>
</head>
<body>
    <form action="login.php" method="post" class="form">
        <label>Cedula</label>
        <input type="number" name="userid" id="id" required style="background-color: #444; color: #fff;">
        <label>Contraseña</label>
        <p><input type="password" name="password" required style="background-color: #444; color: #fff;"></p>
        <p><input type="submit" value="Iniciar Sesión"></p>
        <p>¿No tienes una cuenta? <a href="formulario.php">Regístrate aquí</a>.</p>
    </form>
</body>
</html>



