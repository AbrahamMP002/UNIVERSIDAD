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
    
  <title>ATAKEAR</title>
  <link rel="stylesheet" href="../CSS/ESTILOS_CSS.css">
   <link rel="stylesheet" href="../CSS/ESTILO_CONTACTO.css">
      <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
  <style> p{ font-size: 24px; color: white;</style>
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
      <!-----------------------------------INICIO--DE--PAGINA-------------------------------->
<center><img src="../FOTOS/LOGO2.png" width="400"></center>
<br><br>
<section class="contenedor-info2">
  <section class="contacto">
    <font face="Arial Rounded MT Bold">
    <p>Sucursal - CD. DEPORTIVA - VILLAHERMOSA
    RESTAURANTE</p>
    <p>Av. Velódromo de la ciudad deportiva #315 col. Presiones, 86159</p>
    <br>
    <p>(993) 313 7293</p>
    <br>
    <p>(993) 595 3400</p>
    <br>
    <p>(993) 239 3806</p></font>
    </section>
     <section class="video"><iframe width="292" height="260" src="file:///C:/AppServ/www/PAGINA%20FINAL/FOTOS/torta.m4v" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></section>
  </section>

      <br>
      <br>
<section class="contenedor-info">
  <section class="Mapa">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15180.221280688816!2d-92.94672448465576!3d17.97616306133699!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x538a6033e9f51b38!2sA%20Takear%20Deportiva!5e0!3m2!1ses-419!2smx!4v1625207264760!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </section>
   <section class="servicio1">
   <h2 class="info-res">Contamos con:</h2><img src="../FOTOS/AUTOTAKO.png" width="200px">
   <h2 class="info-res">Proximamente...</h2><img src="../FOTOS/TAKOBAR.png" width="180px">
  </section>
</section>
 <br>
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
