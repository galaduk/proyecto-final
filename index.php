<?php
 include("config.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Proyecto Final</title>
  <!--link de bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- link de css-->
    <link rel="stylesheet" href="estilos.css">
    <!-- links de googlefont-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<?php
  include("header.php");
  include("navbar.php");
?>
<body class="body">
    <!-- Sobre Nosotros -->
    <h2 style="text-align: center;" id="SobreNosotros" >Sobre nosotros</h2>
    <br>
    <div class="container" >
      <div class="row" >
        <div class="col-sm-4" >
          <img src="" alt="" width="400px">
        </div>
        <div class="col-sm-8" >
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pharetra diam augue, nec finibus sem venenatis ac. Mauris non augue augue. Curabitur blandit, neque quis commodo tempus, felis justo vestibulum quam, vitae molestie sapien sapien ac sem. Phasellus augue nisl, semper ut eleifend ut, facilisis non odio. Phasellus volutpat nibh vitae nulla efficitur, nec condimentum felis luctus. Nunc sed porttitor magna, in ullamcorper felis. Integer erat felis, semper rutrum massa vitae, blandit gravida dolor.

          Pellentesque at euismod ex, eu blandit odio. Fusce risus erat, viverra ut lacus eu, bibendum convallis odio. Quisque rhoncus, quam posuere feugiat mollis, mi erat semper odio, vitae hendrerit tortor neque sit amet nibh. Fusce libero nunc, tristique quis scelerisque non, suscipit nec mauris. Aliquam erat volutpat. Mauris sed ultrices libero, eu viverra lorem. Nunc ut purus vulputate, congue nulla eget, fringilla dui. Ut egestas nisi id quam sodales imperdiet. Morbi facilisis eu elit ut commodo. Proin ut elit eu nisl ullamcorper consequat tincidunt in enim.
        </div>
      </div><br>
      <div  class="col-sm-12">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu quam tortor. Ut sit amet diam tincidunt, imperdiet urna vel, porta ligula. Nulla a nunc sollicitudin, venenatis tortor convallis, luctus orci. Sed ut nisl id felis maximus dictum. Proin volutpat justo quis viverra tristique. Sed id arcu id justo lobortis bibendum feugiat quis purus. Integer eu tincidunt metus. Donec condimentum erat felis, sed vestibulum justo condimentum at. Vestibulum sit amet eros quis ante posuere convallis et ut ligula. Ut nec lacus nec urna fringilla congue quis quis ipsum. Donec vel ex at ex elementum aliquet nec et quam. Proin nunc dolor, tempor sed finibus sit amet, tempus eget neque. Maecenas sit amet dignissim quam.

        Nunc cursus finibus sem quis fringilla. Phasellus fermentum suscipit diam et gravida. Nunc quis ligula ut velit semper dapibus. Quisque molestie semper sodales. Quisque a ultrices massa. Curabitur accumsan magna rutrum leo lacinia facilisis. Suspendisse vitae arcu at erat malesuada accumsan in ac tellus. Nam id arcu nec ligula lacinia faucibus non eget neque. Aenean at arcu elit. Aenean et varius diam, sed lacinia orci. Nunc tincidunt ligula vel tortor ornare, non aliquet risus dapibus. Ut eu nulla finibus, suscipit ipsum quis, feugiat libero. Sed finibus imperdiet eros eget posuere. Sed finibus felis quam, in scelerisque neque consectetur et. Quisque sed posuere dolor.
      </div>
    </div>
    <br>

    <!-- Proximas funciones -->
    <h2 style="text-align: center;" id="ProximasFunciones" >Proximas funciones</h2>
      <!-- Contenedor de la galería -->
  <div id="contenedor" class="contenedor">
    <?php
    $sql = "SELECT * FROM funciones";
    $query = mysqli_query($conexion, $sql);
    while ($row = mysqli_fetch_array($query)) { ?>
      <div>
        <img src="favicon.ico" alt="Img" height="100"/>
        <div class='informacion'>
        <a href="detalle_funcion.php?id=<?php echo urlencode($row['Id_funcion']); ?>">
          <p><?= $row['Nombre'] ?> </p>
        </a>
        <p class='precio'>$ <?= $row['Precio'] ?></p>
        <!-- <button class='boton-comprar'>Comprar</button> --> 
        </div>
      </div>
    <?php } ?>
  </div>

<script src="app.js"></script>
<!-- link de bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>



<!-- ACA EMPIEZA EL FOOTER-->
<?php 
 include("footer.php");
?>

</html>


