<?php 
  include("conexion2.php");
      if(isset($_GET['user'])){
      $sett=$_GET['user'];
  }
     ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard A takear!</title>
    <!-------------------------------------------CSS----------------------------------------------->
     <link rel="stylesheet" href="css/NAVADMIN.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <!--BOOSTRAP--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
   
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<!--------------------------------------------Barra--del--nav-------------------------------------------->
<header class="encabezado">
    <div class="logo-contenedor"> 
      <nav class="navegacion">
        <ul>
        <li><a href="../../ATAKEAR_INICIO.php?user= <?php echo $sett ?>" class="navbar-brand"><img src="../../FOTOS/LOGO.png" alt="" width="80" height="45"></a></li>
        <li><a href="#" class="navbar-brand"><i class="fas fa-user-circle"></i></a>
        <ul>
        <li><a href="procesos/cerrar_sesion.php?user= <?php echo $sett ?>" class="navbar-brand"><i class="fas fa-power-off"></i>Cerrar Sesión</a></li>
        </ul>
        </li>
      </ul>
      </nav>
    </div>
  </header>

<body>
<!------------------------------------------------Contenido de la pagina------------------------------->
<div class="container-fluid">
    <div class="row">
       <div class="barra-lateral col-12 col-sm-auto">
           <nav  class="menu d-flex d-sm-block justify-content-center flex-wrap">
            <a href="PERFIL_ADMIN.php?user= <?php echo $sett ?>"><i class="fas fa-home"></i><span>Inicio</span></a>
               <a href="USUARIOS.php?user= <?php echo $sett ?>"><i class="fas fa-user-friends"></i><span>Usuarios</span></a>
               <a href="PRODUCTOS.php?user= <?php echo $sett ?>"><i class="fas fa-hamburger"></i><span>Productos</span></a>
               <a href="PEDIDOS.php?user= <?php echo $sett ?>"><i class="fas fa-truck-moving"></i><span>Pedidos</span></a>
           </nav>
       </div>
<!--------------------------------------CONTENIDO DE INICIO------------------------------------------------>
       <main class="main col">
            <div class="row justify-content-center align-content-center">
                <div class="columna col-1g-6">
       <center><strong><h4><ion-icon name="fast-food-outline"></ion-icon>&nbsp  Historial de pedidos</h4></strong></center>
        <br><br>

       <table class="table" >
              <thead  >
                <tr class="col-12">
                  <th  class="col-1" >No.pedido.</th>
                  <th  class="col-1" >Id producto.</th>
                  <th  class="col-1" >Id Cliente.</th>
                  <th  class="col-2" >Cliente.</th>
                  <th  class="col-2" >Producto.</th>
                  <th  class="col-1" >Precio.</th>
                  <th  class="col-1" >Cantidad.</th>
                  <th  class="col-1" >Total.</th>
                  <th  class="col-1">Eliminar</th>

                </tr>
              </thead>
              <tbody>
                <?php

    try {
    $conexionl=mysqli_connect("localhost","root","12345678","productos");



    $sql='select U.nombre as cliente,U.id,Z.nombre,Z.id_productos,P.id_pedido,P.precio,P.cantidad,P.total
        from pedido AS P,menu AS Z,usuarios AS U
        where Z.id_productos=P.id_productos and P.id=U.id';
    $resultado=$conexionl->query($sql);

    } catch(Exception $e){
        $error=$e->getMessage();
      }
    ?>

    <?php   while($registros=$resultado->fetch_assoc()){ ?>
                  <tr>
                    <td><?php echo $registros['id_pedido']; ?> </td>
                    <td><?php echo $registros['id_productos']; ?> </td>
                    <td><?php echo $registros['id']; ?> </td>
                    <td><?php echo $registros['cliente']; ?> </td>
                    <td><?php echo $registros['nombre']; ?> </td>
                      <td><?php echo $registros['precio']; ?> </td>
                    <td><?php echo $registros['cantidad']; ?> </td>
                    <td><?php echo $registros['total']; ?> </td>


                    <td >
                        <center>
                      <a href="procesos/borra_pedido.php?id_pedido=<?php echo $registros['id_pedido']; ?>"><i class="fas fa-trash"></i></a></center>
                    </td>

                  </tr>
                <?php } ?>
              </tbody>
            </table>




       
<!----------------------------------------------------CONTENIDO DE FIN------------------------------------>
                </div>
            </div>
           
       </main> 
    </div>
</div>













    
</body>
<script src="https://kit.fontawesome.com/646c794df3.js" crossorigin="anonymous"></script>
</html>
