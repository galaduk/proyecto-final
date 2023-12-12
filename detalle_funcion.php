<?php
  include('header.php');
  include("navbar.php")
?>
<!-- detalle_producto.php -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalle de funcion</title>
    
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="style.css">
 <!-- links de googlefont-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body class = "body">
  <?php
  //Accede al archivo config donde se establece la conexion a la base de datos
  include ('config.php');


// Verifica si hay errores en la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

  // Obtener el ID del producto desde la URL
  $funcion_id = isset($_GET['id']) ? $_GET['id'] : '';

  // Consulta a la base de datos para obtener el producto mediante ID
  $sql = "SELECT * FROM funciones WHERE Id_funcion = '$funcion_id'";
  $result = $conexion->query($sql);
  
  if ($result->num_rows > 0) {
      // Si hay resultados en la consulta nos da los datos de ese producto
      $row = $result->fetch_assoc();
      // Creamos un objeto Producto con los datos del producto de la base
      ?>
      <!-- Informacion del producto -->
      
      <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9">
        <div class="producto-thumbnail">
          <h1 class="mb-3"><?= $row['Nombre'] ?></h1>
          <img src="favicon.ico" alt="Imagen del Producto" class="img-thumbnail img-fluid mb-3" width="200">
          <div class="precio mb-3">
            <span>$<?= $row['Precio'] ?></span>
          </div>
          <?php 
            if ($row['Asientos'] <= 50) {
              if ($row['Asientos'] == 0) {
                echo "<p>AGOTADO</p>";
              }else{
                echo "<p>QUEDAN POCOS ASIENTOS</p>";
              }    
            }
          ?>          
          <form action="procesar_pago.php" method="post">
                    <input type="hidden" name="id" value="<?= $row['Id_funcion'] ?>">
                    <input type="hidden" name="precio" value="<?= $row['Precio'] ?>">
                    <input type="number" class="contadorboton" name="contador"min="1" value="1">
                    <?php if ($row['Asientos'] == 0) {
                      echo "<button type='submit' disabled>Comprar entrada</button>";
                    }else{
                      echo "<button type='submit'>Comprar entrada</button>";
                    } ?>
          </form>
        </div>
      </div>
      <div class="col-md-9">
        <div class="detalles">
          <div class="descripcion">
            <h4>Detalle de la funcion</h4>
            <p><?= $row['Detalle'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
        <?php
  } else {
      echo "<h2>Producto no encontrado</h2>";
  }
    // Se cierra la conexion
    $conexion->close();
  ?>
  
  <?php
  include('footer.php');
      /* Verificamos que se apreto el boton de agregar al carrito
      if (isset($_POST['agregar_carrito'])) {
        $productoId = $_POST['id'];
        $productoCantidad = $_POST['contador'];
        // agregarAlCarrito($productoId, $productoCantidad);
      } */
    ?>

<script src="app.js"></script>
<!-- link de bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>