<?php
	
    
    include 'includes/session.php';

	if(isset($_POST['add'])){
		
        $empleado = $_POST['empleado'];
		
        $fecha_entrega = $_POST['fecha_entrega'];

        $elemento =$_POST['elemento'];

        $descripcion = $_POST['descripcion'];

		$sql = "INSERT INTO entrega_dotacion (empleado,fecha_entrega ,elemento , descripcion) VALUES ('$empleado','$fecha_entrega', '$elemento' , '$descripcion')";
		
        if($conn->query($sql)){
			$_SESSION['success'] = 'Entrega añadida con exito';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: entregas.php');

?>