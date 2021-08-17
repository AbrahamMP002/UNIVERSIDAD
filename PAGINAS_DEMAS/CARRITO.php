<?php 
  include("conexion2.php");
      if(isset($_GET['user'])){
      $sett=$_GET['user'];
  }
     ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  <title>ATAKEAR</title>
  <link rel="stylesheet" href="../CSS/ESTILOS_CSS.css">
        <link rel="stylesheet" href="../CSS/GALERIA_CARRERAS.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!----ICONS----->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

  </head>
  <!-----------------------------------INICIO--DE--PAGINA--BARRA-NAV------------------------------->
  <header class="encabezado">
    <div class="logo-contenedor"> 
      <nav class="navegacion">
        <ul>
          <li><a href="../ATAKEAR_INICIO.php?user= <?php echo $sett ?>" class="navbar-brand"><img src="../FOTOS/LOGO.png" alt="" width="70" height="40"></a></li>
         <li><a href="../ATAKEAR_INICIO.php?user=<?php echo $sett ?>" >Inicio</a></li>
          <li><a href="MENU.php?user=<?php echo $sett ?>">Menú</a></li>
          <li><a href="HISTORIA.php?user=<?php echo $sett ?>">Quienes somos</a></li>
           <li><a href="CONTACTO.php?user=<?php echo $sett ?>">Contáctanos</a></li>
           <li><a href="LOGIN.php?user=<?php echo $sett ?>" class="navbar-brand"><i class="fas fa-user-circle"></i> Inicia Sesión</a></li>
        <li><a href="CARRITO.php?user=<?php echo $sett ?>"><i class="fas fa-cart-arrow-down"></i></a></li>
      </ul>
      </nav>
    </div>
  </header>
  <body background="../FOTOS/FONDO2.jpg">
      <!-----------------------------------INICIO--DE--PAGINA-------------------------------->

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 my-4 mx-auto text-center">
            <h1 class="display-4 mt-4">Gestiona tu Pedido</h1>
        </div>

        <div class="container">
             <div class="row">

                 <table class="table caption-top">
    <thead class="table-dark">
    <tr>
    
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Subtotal</th>
      <th scope="col"></th>
    </tr>
  </thead>

  <?php
    try {
    $conexionl=mysqli_connect("localhost","root","12345678","productos");
    $sql='SELECT * FROM pedido';   
    $resultado=$conexionl->query($sql);

    } catch(Exception $e){
        $error=$e->getMessage();
      }
    ?>
<?php 
  while($registros=$resultado->fetch_assoc()){ ?>
 <tr class="table-light">
      
      <td class="pt-5"><?php echo $registros['nombre']; ?></td>
      <td class="pt-5"><?php echo $registros['precio']; ?></td>
      <td class="pt-5"><?php echo $registros['cantidad']; ?></td>
      <td class="pt-5"><?php echo $registros['total']; ?></td>
      <td class="pt-5">
       <a href="../funciones/borrar_carro.php?user=<?php echo $sett ?><?php echo '&' ?>id_pedido=<?php echo $registros['id_pedido']; ?>"><i class="fas fa-trash"></i>Borrar</a></td> 
 
                  <?php
                      $PROD_TOT=$registros ['total'];
                      $TOTAL_MAX= $TOTAL_MAX + $PROD_TOT;
                      ?>


<?php } ?>
</table>
             </div>
    <a href="MENU.php?user=<?php echo $sett ?>" class="btn btn-info">Seguir comprando</a> 
    <a href="MENSAJE.php?user=<?php echo $sett ?>" class="btn btn-success">Confirmar Pedido</a>   
    <h4 class="text-right">Total $<span id="total" class="text"><?php echo $TOTAL_MAX ?></span></h4>
        </div>            
        

  <!-----------------------------------INICIO--PIE--DE--PAGINA--------------------------->
<footer role="contetinfo">
<div class="pie">
  <nav>
<table style="width: 100%;">
  <tr>
<td><p>Siguenos en:</p></td>
  <td><a href="https://www.instagram.com/a.takear/"><img src="../FOTOS/INSTA.png" height="45" width="55"></a></td>
  <td><a href="https://www.facebook.com/atakear"><img src="../FOTOS/FB.png" height="55" width="55"></a></td>
        <td><p><b>Ordena tambien en: </b></p></td>
        <td><a href="https://www.ubereats.com/mx/store/a-takear!-deportiva/qcI6hcXURLibo1Ka07DGMg"><img src="../FOTOS/UBER.png" height="65" width="100"></a></td>
        <td><a href="https://www.rappi.com.mx/restaurantes/1923250569-atakear-villahermosa"><img src="../FOTOS/RAPPI.png" height="65" width="65"></a></td>
        <td><a href="https://play.google.com/store/apps/details?id=com.xiaojukeji.didi.global.customer"><img src="../FOTOS/DIDI.png" height="65" width="80"></a></td>
</table>
</nav>
</div>
</footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    </script>

</body>
</html>