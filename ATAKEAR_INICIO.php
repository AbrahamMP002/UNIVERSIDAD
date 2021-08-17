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
    <meta name= "viewport" content= "width=device-width, initial-scale=1">
    <meta name="description" content="Nuestra franquicia consiste en que usted instale y opere su propio negocio restaurantero: una exitosa y muy rentable taquería ATAKEAR®, un lugar casual, limpio y agradable, donde sus clientes encontrarán los más exquisitos takos al pastor y nuestra especialidad; el tako de Sirloin, que se ha convertido en el sello de nuestra marca y uno de los favoritos de nuestros clientes.">
    <meta name="keywords" content="El mejor restaurante para darse en familia un ataskon de sabor, Atakear!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ATAKEAR</title>
  <link rel="stylesheet" href="CSS/ESTILOS_CSS.css">
   <link rel="stylesheet" href="CSS/PRINCIPAL_MOVE.css">
   
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
<body>
  <!-----------------------------------INICIO--DE--PAGINA--BARRA-NAV------------------------------->
   <header class="encabezado">
    <div class="logo-contenedor"> 
      <nav class="navegacion">
        <ul>
         <li><a href="PAGINAS_DEMAS/LOGIN_ADMIN.php?user= <?php echo $sett ?>" class="navbar-brand"><img src="FOTOS/LOGO.png" alt="" width="70" height="40"></a></li>
         <li><a href="ATAKEAR_INICIO.php?user=<?php echo $sett ?>" >Inicio</a></li>
          <li><a href="PAGINAS_DEMAS/MENU.php?user=<?php echo $sett ?>">Menú</a></li>
          <li><a href="PAGINAS_DEMAS/HISTORIA.php?user=<?php echo $sett ?>">Quienes somos</a></li>
           <li><a href="PAGINAS_DEMAS/CONTACTO.php?user=<?php echo $sett ?>">Contáctanos</a></li>
           <li><a href="PAGINAS_DEMAS/LOGIN.php?user=<?php echo $sett ?>" class="navbar-brand"><i class="fas fa-user-circle"></i> Inicia Sesión</a></li>
        <li><a href="PAGINAS_DEMAS/CARRITO.php?user=<?php echo $sett ?>"><i class="fas fa-cart-arrow-down"></i></a></li>
      </ul>
      </nav>
    </div>
  </header>
  
  <!---------------------------------CONTENIDO--DEL--PORTAL--INICIAL------------------------------->
<br><br>
<center><img src="FOTOS/LOGO2.png" width="400"></center>
 <div class="contenedor">
    <ul>
        <li><img src="FOTOS/ULTIMAS-6.jpg" alt="" class="im"></li>
        
       
        <li><img src="FOTOS/UBICACION.jpg" alt="" class="im"></li>
        
       
        <li><img src="FOTOS/UBICACION2.jpg" alt="" class="im"></li>
       
        <li><img src="FOTOS/UBICACION3.jpg" alt="" class="im"></li>
       
   </ul>
</div>



























  <!------------------------FINAL--DEL--CONTENIDO--DEL--PORTAL--INICIAL----------------------------->
  <!----------------------------------Inicio del pie------------------------------------------>
  <footer role="contetinfo">
<div class="pie">
  <nav>
<table style="width: 100%;">
  <tr>
<td><p>Siguenos en:</p></td>
  <td><a href="https://www.instagram.com/a.takear/"><img src="FOTOS/INSTA.png" height="45" width="55"></a></td>
  <td><a href="https://www.facebook.com/atakear"><img src="FOTOS/FB.png" height="55" width="55"></a></td>
        <td><p><b>Ordena tambien en: </b></p></td>
        <td><a href="https://www.ubereats.com/mx/store/a-takear!-deportiva/qcI6hcXURLibo1Ka07DGMg"><img src="FOTOS/UBER.png" height="65" width="100"></a></td>
        <td><a href="https://www.rappi.com.mx/restaurantes/1923250569-atakear-villahermosa"><img src="FOTOS/RAPPI.png" height="65" width="65"></a></td>
        <td><a href="https://play.google.com/store/apps/details?id=com.xiaojukeji.didi.global.customer"><img src="FOTOS/DIDI.png" height="65" width="80"></a></td>
</table>
</nav>
</div>
</footer>
 
</html>
