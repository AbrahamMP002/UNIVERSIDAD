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
       

 <div class="container-fluid">
    <div class="page-header">
      <h1 class="text-titles"><i class="fas fa-users-cog"></i> Administrador de Usuarios</h1>
    </div>
    <p class="lead">Alta y Baja clientes</p>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <ul class="nav nav-tabs">
            <strong><li><h4>Nuevo usuario cliente</h4></li></strong>
        </ul>
        <br>
        <form action="procesos/usersave.php" method="post">
                    <div class="form-group label-floating">
                      <label class="control-label">Nombre</label>
                      <input name="nombre" class="form-control" type="text">
                    </div>
        <br>
                    <div class="form-group label-floating">
                      <label class="control-label">Fecha de Nacimiento</label>
                      <input class="crotrols" type="date" name="fecha">
                    </div>            
        <br>
                    <div class="form-group label-floating">
                      <label class="control-label">Dirección</label>
                      <input name="direccion" class="form-control" type="text">
                    </div>
        <br>
                    <div class="form-group label-floating">
                      <label class="control-label">Estado</label>
                      <input name="estado" class="form-control" type="text">
                    </div>
        <br>
                    <div class="form-group label-floating">
                      <label class="control-label">Municipio</label>
                      <input name="municipio" class="form-control" type="text">
                    </div>
        <br>
                    <div class="form-group label-floating">
                      <label class="control-label">Colonia</label>
                      <input name="colonia" class="form-control" type="text">
                    </div>        


        <br>          <div class="form-group label-floating">
                      <label  class="control-label">Correo</label>
                      <input name="correo" class="form-control" type="text">
                    </div>
                    
        <br>         <div class="form-group label-floating">
                      <label class="control-label">Contraseña</label>
                      <input name="contraseña" class="form-control" type="text">
                    </div>

                    <br>
                    <br>
                    <br>
                      <p class="text-center">
                        <button class="btn btn-success btn-raised btn-sm" type="submit">Guardar &nbsp <i class="fas fa-save"></i></button>
                      </p>
                    </form>

                <strong><h4>Lista de usuarios</h4></strong>
        <br>
                 <table class="table">
              <thead>
                <tr class="col-12">
                  <th  class="col-1" scope="col">Nombre</th>
                  <th  class="col-1" scope="col">Fecha</th>
                  <th  class="col-1" scope="col">Dirección</th>
                  <th  class="col-1" scope="col">Estado</th>
                  <th  class="col-1" scope="col">Municipio</th>
                  <th  class="col-1" scope="col">Colonia</th>
                  <th  class="col-1" scope="col">Correo</th>
                  <th  class="col-1" scope="col">Contraseña</th>
                  <th class="col-1" scope="col">Eliminar</th>
                  <th class="col-1" scope="col">Editar</th>
                </tr>
              </thead>
                <?php
    try {
    $conexionl=mysqli_connect("localhost","root","12345678","productos");

    $sql='SELECT * FROM usuarios';
    $resultado=$conexionl->query($sql);

    } catch(Exception $e){
        $error=$e->getMessage();
      }
    ?>
    <?php   while($registros=$resultado->fetch_assoc()){ ?>
                  <tr>
                    <td><?php echo $registros['nombre']; ?> </td>
                    <td><?php echo $registros['fecha']; ?> </td>
                    <td><?php echo $registros['direccion']; ?> </td>
                    <td><?php echo $registros['estado']; ?> </td>
                    <td><?php echo $registros['municipio']; ?> </td>
                    <td><?php echo $registros['colonia']; ?> </td>
                    <td><?php echo $registros['correo']; ?> </td>
                    <td><?php echo $registros['contraseña']; ?> </td>
                    <td class="borrar">
                  <a class="btn btn-danger" href="procesos/borrar_user.php?id=<?php echo $registros['id']; ?>">Borrar <i class="fas fa-times"></i></a>
                </td>
                <td class="modificar">
                  <a class="btn btn-info" href="MODIFICAR_USER.php?id=<?php echo $registros['id']; ?>">Editar <i class="far fa-edit"></i></a>
                </td>
                  </tr>
              <?php } ?>
</tbody>
          </table>


                </div>
              </div>
            </div>
          </div>
       </main>



<!----------------------------------------------------CONTENIDO DE FIN------------------------------------>
                </div>
            </div>
           
       </main> 
    </div>
</div>













    
</body>
<script src="https://kit.fontawesome.com/646c794df3.js" crossorigin="anonymous"></script>
</html>
