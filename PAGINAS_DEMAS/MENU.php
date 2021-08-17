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
        <link rel="stylesheet" href="../CSS/GALERIA_CARRERAS.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <!----ICONS----->
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
  <body background="../FOTOS/FONDO1.jpg">
      <!-----------------------------------INICIO--DE--PAGINA-------------------------------->
<center>
   <div class="titulo-historia">
       <font size="7"><b>MENU - CD. DEPORTIVA VELODROMO</b></font>
   </div>
    </center>
        <br>
        <br>

<div class="card-group col-12 " style=" display: block;">



<div class="row">


 <?php 

try {
include('DASHBOARD/procesos/conexion2.php');

$sql='SELECT * FROM menu ';
$resultado=$conexion->query($sql);

} catch(Exception $e){
    $error=$e->getMessage();
  }
?>

<?php while($registros=$resultado->fetch_assoc()){ ?>
              
             
 <div class="col-sm-3">
    <div class="card card-border">
      
    <center><img src="DASHBOARD/<?php echo substr($registros['imagen'],3);  ?>" class="card-img-top logo1" alt="Card image cap" >
    </center>
    <div class="card-body " style=" padding: 0.2rem;">
    <h5 class="card-title"><?php echo $registros['nombre']; ?></h5>
    <h5 class="card-title"><?php echo $registros['precio']; ?></h5>
    <p class=" card-footer"><?php echo $registros['descripcion']; ?></p>

    <form action="../funciones/carrito_base_save.php?user=<?php echo $sett ?><?php echo '&' ?>id=<?php echo $registros['id_productos'];?>" method="post" enctype="multipart/form-data">
    <center><label class="control-label">Cantidad </label> 
      <input type="number" name="cantidad" value="1">
      <br>
      <button type="submit" class="btn btn-primary">Agregar</button>

   
   </center>
</form>
    </div>
</div> 
</div>     
            <?php } ?>

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
        <td><a href="https://play.google.com/store/apps/details?id=com.xiaojukeji.didi.global.customer"><img src="
          ../FOTOS/DIDI.png" height="65" width="80"></a></td>
</table>
</nav>
</div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>