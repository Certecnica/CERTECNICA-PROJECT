<?php

require_once("includes/conn.php");
session_start();

if(!isset($_SESSION["employees"])){
	
	header("Location: comercial_pendientes.php");
  }
else{
	$id = $_GET['id'];
	
	$conexion = mysqli_query($conn,"UPDATE solicitudes  SET estado_JF ='Aprobada' WHERE id='".$id."'");
				
	if($conexion){	
					echo 'Saved!!';
					header("Location: comercial_pendientes.php");
				}
				else{
					echo "Query Error : " . "UPDATE solicitudes SET estado_JF ='Aprobada' WHERE id='".$id."' AND descripcion='".$descr."'" . "<br>" . mysqli_error($conn);
				}
	}

	ini_set('display_errors', true);

	error_reporting(E_ALL);   

?>