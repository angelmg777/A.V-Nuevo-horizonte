<?php session_start(); ?>

<?php
$id=$_GET['id'];
$connection = mysqli_connect('localhost', 'root', '', 'AV2');

$sql="delete from paquetes where IDPaquete='".$id."'";
$resultado=mysqli_query($connection,$sql);

if($resultado){
    echo "<script language='JavaScript'>
    alert('Los datos se eliminaron correctamente de la Base de Datos');
    location.assign('paquetes.php');
    </script>";
}else{
    echo "<script language='JavaScript'>
    alert('Los datos no se eliminaron correctamente de la Base de Datos');
    location.assign('usuarios.php/#cursos');
    </script>";
}
?>
