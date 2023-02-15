<?php
	include 'includes/session.php';

	include 'includes/conn.php';

	if(isset($_POST['delete'])){

		$id = $_POST['id'];

	
		$sql = "DELETE FROM beneficiarios WHERE id = '$id'";
		
		if($conn->query($sql)){
			
			$_SESSION['success'] = 'Empleado eliminado con éxito';
		}

		else{

			$_SESSION['error'] = $conn->error;
		}
	}
	else{

		$_SESSION['error'] = 'Seleccione el elemento para eliminar primero';
	}

	header('location: listar_beneficiarios.php');
