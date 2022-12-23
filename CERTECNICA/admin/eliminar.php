<?php 

include 'includes/conn.php';

$id = $_GET['id'];

$consulta = $conexion2 -> prepare("SELECT * FROM documentos where id ='$id'"); ;
$consulta -> execute();

$registro = $consulta ->fetch();

$ruta = $registro['DOCUMENTO'];

unlink($ruta);

$delete = $conexion2 -> prepare("DELETE  FROM documentos  where id = '$id' ") ;
$delete -> execute();

header ('Location: documentos.php');

?>

