<?php
    // Recuperar datos
    $id = $_POST['id'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['contador'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago</title>
</head>
<body>
    <?php 
    echo 'ID: ', $id;
    echo 'PRECIO: $', $precio;
    echo 'CANTIDAD: ', $cantidad;
    ?>
</body>
</html>