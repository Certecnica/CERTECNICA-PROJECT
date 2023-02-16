<?php

require_once("includes/conn.php");
session_start();

if(!isset($_SESSION["admin"])){
	
	header("Location: admin_solicitudes.php");
  }
else{
	$id = $_GET['id'];
	
	$conexion = mysqli_query($conn,"UPDATE solicitudes  SET aprobacion_GH ='Aceptado' WHERE id='".$id."'");
				
	if($conexion){	
					echo 'Saved!!';
					header("Location: admin_solicitudes.php");
				}
				else{
					echo "Query Error : " . "UPDATE solicitudes SET aprobacion_GH ='Aceptado' WHERE id='".$id."' AND descripcion='".$descr."'" . "<br>" . mysqli_error($conn);
				}
	}

	ini_set('display_errors', true);
	error_reporting(E_ALL);  
         
?>