<?php
	session_start();
	include 'includes/conn.php';

	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
		header('location: index.php');
	}
	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();

	if(isset($_SESSION['tiempo']) ) {
		//Tiempo en segundos para dar vida a la sesión.
		$inactivo = 2000;//20min en este caso.
		//Calculamos tiempo de vida inactivo.
		$vida_session = time() - $_SESSION['tiempo'];
			//Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
			if($vida_session > $inactivo)
			{
				//Removemos sesión.
				session_unset();
				//Destruimos sesión.
				session_destroy();              
				//Redirigimos pagina.
				header("Location: ../index.php");
				exit();
			} else {  // si no ha caducado la sesion, actualizamos
				$_SESSION['tiempo'] = time();
			}
	} else {
		//Activamos sesion tiempo.
		$_SESSION['tiempo'] = time();
	}
?>