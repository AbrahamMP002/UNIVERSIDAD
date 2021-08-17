<?php
  $conexionl=mysqli_connect("localhost","root","12345678","productos");
   if(isset($_GET['user'])){
      $sett=$_GET['user'];


  }
     ?>

<?php
  if(isset($_GET['id_pedido'])){
    $id_pedido= $_GET['id_pedido'];
  }
try {
$conexionl=mysqli_connect("localhost","root","12345678","productos");
$sql="DELETE FROM pedido WHERE `id_pedido`='{$id_pedido}'; ";
$resultado =$conexionl->query($sql);
} catch(Exception $e){
    $error=$e->getMessage();
  }

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
   <link rel="stylesheet" href="css/estilo.css">
   <link rel="stylesheet" href="css/bootstrap.css">
   <title>Iniciando con Agenda php!!!</title>
    <link rel="stylesheet" type="text/css" href="./js/bootstrap.min.css"  >
       <script src="./js/jquery-3.2.1.slim.min.js"></script>
   <script src="./js/popper.min.js"></script>
     <script src="./js/bootstrap.min.js"></script>
   </head>
 <body>
   <div class="contenedor">

 <br><br>
 <center>
       <div class="contenido">

         <?php
           if($resultado){
             echo "<h2>Producto Eliminado</h2>";
           } else {
             echo "Error".$conexionl->error;
           }
         ?>
         <br><br>



       </div>
           </div>

 <center>
  
 <a  href="../PAGINAS_DEMAS/CARRITO.php?user=<?php echo $sett ?>" >
 <input class="btn btn-primary" value="Regresar">
        </a>
 </center>

 </button>
 </center>
     <?php
       $conexion->close();
      ?>





 </body>
 </html>