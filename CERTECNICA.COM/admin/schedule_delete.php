<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM schedules WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Horario eliminado con exito';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Seleccione el registro que desea eliminar';
	}

	header('location: schedule.php');
	
?>