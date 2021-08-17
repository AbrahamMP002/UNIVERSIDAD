<?php
$conexion = new mysqli("localhost","root","12345678","productos");

$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['correo']=$correo;

  $resultado2 = $conexion ->query("select * from usuarios where correo='$correo'") or die($conexion -> error);
      while ($fila = mysqli_fetch_array($resultado2)) {
    $sett=$fila['id'];
    }


$consulta="SELECT*FROM usuarios where correo='$correo' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:../PAGINAS_DEMAS/DASHBOARD/PERFIL_ADMIN.php?user=$sett") ;

}else{
    ?>

    <?php   
    include("../PAGINAS_DEMAS/LOGIN_ADMIN.php");

  ?>
  <h1 class="top-bot " >ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
