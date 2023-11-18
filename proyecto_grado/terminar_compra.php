<!DOCTYPE html>
<html>
<head>
    <title>Mi carrito de compras</title>
    <style>
        body {
            background-color: black;
            color: white;
            text-align: center;
            position: relative;
            top: 6em;
            font-size: 50px;
        }
    </style>
</head>
<body>
    <?php
    include_once "funciones.php";
    $productos = obtenerProductosEnCarrito();
    echo "Nos Pondremos en contacto contigo para coordinar el envio de tus productos. Gracias por preferirnos.";
    ?>
</body>
<meta http-equiv="refresh" content="10;url=principal.php"/>

</html>
  
