<?php

require_once("includes/conn.php");

session_start();

if(!isset($_SESSION["admin"])){
	
	header("Location: admin_solicitudes.php");
  }
else{
	$id = $_GET['id'];
	
	$conexion = mysqli_query($conn,"UPDATE solicitud_prestamo  SET estado_GH ='Aceptado' , estado_prestamo = 'EN CURSO' WHERE id='".$id."'");
				
	if($conexion){	
					echo 'Saved!!';
					header("Location: prestamos_pendientes.php");
				}
				else{
					echo "Query Error : " . "UPDATE solicitud_prestamo SET estado_GH ='Aceptado' , estado_prestamo = 'EN CURSO' WHERE id='".$id."' AND descripcion='".$descr."'" . "<br>" . mysqli_error($conn);
				}
	}
	ini_set('display_errors', true);
	error_reporting(E_ALL);      
?>