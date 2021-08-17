<?php 
  include("procesos/conexion2.php");
      if(isset($_GET['user'])){
      $sett=$_GET['user'];
  }
     ?>
<?php
  if(isset($_GET['id'])){
    $id=$_GET['id'];
  }
try {
$conexion = new mysqli("localhost","root","12345678","productos");
$sql="SELECT * FROM `usuarios` WHERE `id`={$id}";
$resultado=$conexion->query($sql);

} catch(Exception $e){
    $error=$e->getMessage();
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
       

 <div class="container-fluid">
    <div class="page-header">
      <h1 class="text-titles"><i class="fas fa-users-cog"></i> Administrador de Usuarios</h1>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <ul class="nav nav-tabs">
            <strong><li><h4>Modifica los datos del usuario</h4></li></strong>
        </ul>
        <br>
        <form action="procesos/editar_user.php" method="post">
                    <?php while($registro=$resultado->fetch_assoc()) { ?>


                    <div class="form-group label-floating">
                      <label class="control-label">Id</label>
                      <input name="id" class="form-control" type="number" value="<?php echo $registro['id'];?>">
                    </div>
        <br>
                    <div class="form-group label-floating">
                      <label class="control-label">Nombre</label>
                      <input name="nombre" class="form-control" type="text" value="<?php echo $registro['nombre'];?>">
                    </div>
        <br>
                    <div class="form-group label-floating">
                      <label class="control-label">Fecha de Nacimiento</label>
                      <input class="crotrols" type="date" name="fecha" value="<?php echo $registro['fecha'];?>">
                    </div>            
        <br>
                    <div class="form-group label-floating">
                      <label class="control-label">Dirección</label>
                      <input name="direccion" class="form-control" type="text" value="<?php echo $registro['direccion'];?>">
                    </div>
        <br>
                    <div class="form-group label-floating">
                      <label class="control-label">Estado</label>
                      <input name="estado" class="form-control" type="text" value="<?php echo $registro['estado'];?>">
                    </div>
        <br>
                    <div class="form-group label-floating">
                      <label class="control-label">Municipio</label>
                      <input name="municipio" class="form-control" type="text" value="<?php echo $registro['municipio'];?>">
                    </div>
        <br>
                    <div class="form-group label-floating">
                      <label class="control-label">Colonia</label>
                      <input name="colonia" class="form-control" type="text" value="<?php echo $registro['colonia'];?>">
                    </div>        


        <br>          <div class="form-group label-floating">
                      <label  class="control-label">Correo</label>
                      <input name="correo" class="form-control" type="text" value="<?php echo $registro['correo'];?>">
                    </div>
                    
        <br>         <div class="form-group label-floating">
                      <label class="control-label">Contraseña</label>
                      <input name="contraseña" class="form-control" type="text" value="<?php echo $registro['contraseña'];?>">
                    </div>

                    <br>
                    <br>
                    <br>
                      <p class="text-center">
                        <button class="btn btn-success btn-raised btn-sm" type="submit">Sobrescribir &nbsp <i class="fas fa-save"></i></button>
                      </p>
     <?php  }?>

                    </form>


                </div>
              </div>
            </div>
          </div>
        </div>
       </main>
</div>
  </div>


<!----------------------------------------------------CONTENIDO DE FIN------------------------------------>
                












    
</body>
<script src="https://kit.fontawesome.com/646c794df3.js" crossorigin="anonymous"></script>
</html>
