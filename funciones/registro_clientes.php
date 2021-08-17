<?php

include("conexion2.php");

$nombre=$_POST['nombre'];
$fecha=$_POST['fecha'];
$direccion=$_POST['direccion'];
$estado=$_POST['estado'];
$municipio=$_POST['municipio'];
$colonia=$_POST['colonia'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

session_start();
$_SESSION['correo']=$correo;

  $resultado2 = $conexion ->query("select * from usuarios where correo='$correo'") or die($conexion -> error);
      while ($fila = mysqli_fetch_array($resultado2)) {
    $sett=$fila['id'];
    }

$consulta="INSERT INTO usuarios VALUES( null, '$nombre','$fecha','$direccion','$estado','$municipio','$colonia','$correo','$contraseña')";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:../PAGINAS_DEMAS/PERFIL_CLIENTE.php?user=$sett") ;

}else{
    ?>

    <?php   
    include("../PAGINAS_DEMAS/REGISTER.php");

  ?>
  <h1 class="top-bot " >REGISTRO COMPLETADO</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
