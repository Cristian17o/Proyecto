<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registro</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #222;
            color: #fff;
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
        input[type="text"], input[type="password"], input[type="email"], input[type="number"] {
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
        .id{
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
    </style>
</head>
<body>
    <form action="procesa.php" method="get" class="form">
        <label>Nombre Completo</label>
        <p><input type="text" name="username" id="name" class="form-control" Required>
        <label>Correo</label>
        <p><input type="email" name="useremail" id="email" Required>
        <label>Cedula</label>
        <p><input type="number" name="userid" id="id" Required style="background-color: #555;">
        <label>Teléfono</label>
        <p><input type="text" name="userphone" id="phone" maxlength="10" Required>
        <label>Contraseña</label>
        <p><input type="password" name="userpassword" id="password" maxlength="20" Required>
        <p><input type="submit" value="Enviar">
    </form>
</body>
</html>