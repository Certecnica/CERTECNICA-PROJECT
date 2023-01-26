<?php
	include 'includes/session.php';

	if(isset($_POST['CreateSalario'])){
		
		$empleado = $_POST['empleado'];
        $salario_basico = $_POST['salario'];
        $aux_no_salarial = $_POST['aux'];
        $total= $salario_basico+$aux_no_salarial;
        number_format($total);

		$sql = "INSERT INTO salarios (EMPLEADO, SALARIO_BASICO,AUX_NO_SALARIAL, TOTAL) VALUES ('$empleado', '$salario_basico', '$aux_no_salarial', '$total')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Se añadio Correctamente ';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Ocurrio un error intente de nuevo por favor ';
	}

	header('location: salarios.php');
?>