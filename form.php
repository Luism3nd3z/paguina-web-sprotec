<?php
//abro la conexion
$con = mysqli_connect("localhost","luis","","form") or die ('Error en la conexion de servidor');

//Le pido algo a la base de datos
$sql="INSERT INTO usuarios
VALUES (
    '".$_POST['nombre']."',
    '".$_POST['apellido_paterno']."',
    '".$_POST['usuario']."',
    '".$_POST['contraseña']."',
    '".$_POST['correo']."' )";


$resultado=mysqli_query($con,$sql);
if(!$resultado){
    echo"ocurrio algun error con la base de datos ";
}else{
    echo"Datos guardados exitosamente <br><a href='form.html'> REGRESAR </a>";
 }
?>

