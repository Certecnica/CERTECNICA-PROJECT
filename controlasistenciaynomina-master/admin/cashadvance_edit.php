<?php
	include 'includes/session.php';

	if(isset($_POST['editar'])){
		$id = $_POST['id'];
		$amount = $_POST['amount'];
	    $edit_Ncuotas = $_POST['edit_Ncuotas'];
		$edit_cuotasMensual = $_POST['edit_cuotasMensual'];
		$edit_fechapago = $_POST['edit_fechapago'];
		$edit_destino = $_POST['edit_destino'];
		
		$sql = "UPDATE cashadvance SET amount = '$amount' , cuotas = '$edit_Ncuotas' , cuota_mensual = '$edit_cuotasMensual' ,
		date_primerpago = '$edit_fechapago' , destino_prestamo = '$edit_destino' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Prestamo Actualizado con exito';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Rellene el formulario de edición primero';
	}

	header('location:cashadvance.php');

?>