<?php

require_once("includes/conn.php");
session_start();

if(!isset($_SESSION["employees"])){
	
	header("Location: DA_pendientes.php");
  }
else{
	$id = $_GET['id'];
	
	$conexion = mysqli_query($conn,"UPDATE solicitudes  SET estado_DA = 'Aprobada' WHERE id='".$id."'");
				
	if($conexion){	
					echo 'Saved!!';
					header("Location: DA_pendientes.php");
				}
				else{
					echo "Query Error : " . "UPDATE solicitudes SET estado_DA ='Aprobada' WHERE id='".$id."' AND descripcion='".$descr."'" . "<br>" . mysqli_error($conn);
				}
	}

	ini_set('display_errors', true);

	error_reporting(E_ALL);  
         
?>