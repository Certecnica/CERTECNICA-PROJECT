<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$Tipo_Documento = $_POST['Tdocumento'];
		$documento = $_POST['documento'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$birthdate = $_POST['birthdate'];
		$contact = $_POST['contact'];
		$contraseña = $_POST['contraseña'];
		$gender = $_POST['gender'];
		$position = $_POST['position'];
		$schedule = $_POST['schedule'] ;

		$password_encriptada= password_hash($contraseña,PASSWORD_DEFAULT);
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		
		$sql = "INSERT INTO employees (tipo_documento,employee_id, firstname, lastname, address, birthdate, contact_info,contraseña, gender, position_id, schedule_id, photo, created_on) VALUES ('$Tipo_Documento','$documento	', '$firstname', '$lastname', '$address', '$birthdate', '$contact','$password_encriptada', '$gender', '$position', '$schedule', '$filename', NOW())";
		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Empleado añadido satisfactoriamente';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Complete el formulario completo';
	}

	header('location: employee.php');
?>