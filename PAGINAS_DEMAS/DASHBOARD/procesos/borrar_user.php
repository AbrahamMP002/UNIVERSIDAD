<?php
  if(isset($_GET['id'])){
    $id= $_GET['id'];
  }
try {
include ('conexion2.php');
$sql="DELETE FROM `usuarios` WHERE `id`='{$id}'; ";
$resultado =$conexion->query($sql);
} catch(Exception $e){
    $error=$e->getMessage();
  }
?>
<?php
          if($resultado){
            echo "<center><h2>Usuario eliminado</h2><center>";
          }  else {
            echo "Error 404".$conexion->error;
          }
        ?>
        <br><br>
      </div>
 <center>
    <button class="btn btn-primary col-6">
        <a  href="../USUARIOS.php" >
          Regresar
       </a>
    </center>
<?php
      $conexion->close();
     ?>