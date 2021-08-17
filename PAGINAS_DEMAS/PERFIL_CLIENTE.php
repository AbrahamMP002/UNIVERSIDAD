<?php 
  include("conexion2.php");
      if(isset($_GET['user'])){
      $sett=$_GET['user'];
  }
     ?>

<!DOCTYPE html>
<html>
  <head>
    <meta  charset="utf-8">
    <meta name="description" content="Nuestra franquicia consiste en que usted instale y opere su propio negocio restaurantero: una exitosa y muy rentable taquería ATAKEAR®, un lugar casual, limpio y agradable, donde sus clientes encontrarán los más exquisitos takos al pastor y nuestra especialidad; el tako de Sirloin, que se ha convertido en el sello de nuestra marca y uno de los favoritos de nuestros clientes.">
    <meta name="keywords" content="El mejor restaurante para darse en familia un ataskon de sabor, Atakear!">
    
  <title>ATAKEAR</title>
  <link rel="stylesheet" href="../CSS/ESTILOS_CSS.css">
   <link rel="stylesheet" href="../CSS/ESTILO_LOGIN.css">
  <link rel="stylesheet" href="../CSS/MENU_INICIO.css">
  <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


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
  <body>
      <!-----------------------------------INICIO--DE--PAGINA--BARRA-NAV------------------------------->

<div class="container">
      <div class="row">
      <form method="post" id="perfil">
        <div >
   <?php
try {
$conexion = new mysqli("localhost","root","12345678","productos");
$sql="SELECT * FROM `usuarios` WHERE `id`='$sett'";
$resultado=$conexion->query($sql);

} catch(Exception $e){
    $error=$e->getMessage();
  }
 ?>
   <?php 
  while($registros=$resultado->fetch_assoc()){ ?>
          <div class="panel panel-success"><br>
              <center><h3>PERFIL DEL CLIENTE</h3></center>
<center>
            <div class="panel-body">
              <div class="row">
        
      
                <div class=" col-md-20 col-lg-12 "> 
                  <table class="table">
                    <thead class="table-dark">
                   
                      <tr>
                        <td class='col-md-5'>Nombres y Apellidos:</td>
                        <td><input type="text" class="form-control input-sm" name="nombre" value="<?php echo $registros['nombre'];?>"></td>
                      </tr>
                      <tr>
                        <td>Fecha de nacimiento:</td>
                        <td><input class="crotrols" type="date" name="fecha" value="<?php echo $registros['fecha'];?>"></td>
                      </tr>
                      <tr>
                        <td>Dirección:</td>
                        <td><input type="text" class="form-control input-sm" name="direccion" value="<?php echo $registros['direccion'];?>"></td>
                      </tr>
            <tr>
                        <td>Estado:</td>
                        <td><input type="text" class="form-control input-sm" required name="estado" value="<?php echo $registros['estado'];?>"></td>
                      </tr>

                      <tr>
                        <td>Municipio:</td>
                        <td><input type="text" class="form-control input-sm" name="municipio" value="<?php echo $registros['municipio'];?>"></td>
                      </tr>

            <tr>
                        <td>Colonia:</td>
                        <td><input type="text" class="form-control input-sm" name="colonia" value="<?php echo $registros['colonia'];?>" required></td>
                      </tr>
            <tr>
                        <td>Correo eléctronico:</td>
                        <td><input type="text" class="form-control input-sm" name="correo" value="<?php echo $registros['correo'];?>" required></td>
                      </tr>
            <tr>
                        <td>Contraseña:</td>
                        <td><input type="text" class="form-control input-sm" name="contraseña" value="<?php echo $registros['contraseña'];?>"></td>
                      </tr>                   
                     
                   
                  </thead>
                  </table>
                  
                  
                </div>
        <div class='col-md-12' ></div>
              </div>
            </div>
                 
                    
                     
              <center><button type="submit" class="btn btn-sm btn-success">Actualizar datos</button></center>

                  <?php } ?>     
               </center>        
            
          </div>
        </div>
    </form>
      </div>
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
    
</body>
</html>  