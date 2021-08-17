<?php
  if(isset($_GET['id_productos'])){
    $id_productos= $_GET['id_productos'];
  }
try {
include ('conexion2.php');
$sql="DELETE FROM `menu` WHERE `id_productos`='{$id_productos}'; ";
$resultado =$conexion->query($sql);
} catch(Exception $e){
    $error=$e->getMessage();
  }
?>
<?php
          if($resultado){
            echo "<center><h2>Producto eliminado</h2><center>";
          }  else {
            echo "Error 404".$conexion->error;
          }
        ?>
        <br><br>
      </div>
 <center>
    <button class="btn btn-primary col-6">
        <a  href="../PRODUCTOS.php" >
          Regresar
       </a>
    </center>
<?php
      $conexion->close();
     ?>