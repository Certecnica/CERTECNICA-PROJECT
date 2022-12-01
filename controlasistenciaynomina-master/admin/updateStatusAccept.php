<?php

require_once("includes/conn.php");
session_start();

if(!isset($_SESSION["admin"])){
	header("Location: admin_solicitudes.php");
  }
else{

	$eid = $_GET['eid'];
	$descr = $_GET['descr'];

	$conexion = mysqli_query($conn,"UPDATE leaves SET status='Aceptado' WHERE eid='".$eid."' AND descr='".$descr."'");

				if($conexion){	
					echo 'Saved!!';
					header("Location: admin_solicitudes.php");
				}
				else{
					echo "Query Error : " . "UPDATE leaves SET status='Aceptado' WHERE eid='".$eid."' AND descr='".$descr."'" . "<br>" . mysqli_error($conn);
				}
	}

	ini_set('display_errors', true);
	error_reporting(E_ALL);  
         
?>