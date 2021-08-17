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



$consulta="INSERT INTO usuarios VALUES( null, '$nombre','$fecha','$direccion','$estado','$municipio','$colonia','$correo','$contraseña')";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($resultado){

echo "correcto";
}else{
echo "incorrecto";
}
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
   <title>User Admin Atakear</title>
   </head>
 <body>
   <div class="contenedor">

 <br><br>
 <center>
       <div class="contenido">
         <?php
           if($resultado){
             echo "<h2>Usuario Agregado</h2>";
           } else {
             echo "Error".$conexion->error;
           }
         ?>
         <br><br>
       </div>
           </div>
 <center>
 
 <button class="btn btn-primary" value="Regresar">
  <a  href="../USUARIOS.php" >Regresar</a>
 </button>
 </center>

 </button>
 </center>
     <?php
       $conexion->close();
      ?>
 </body>
 </html>