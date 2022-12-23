
<?php
include 'includes/conn.php';
include 'includes/session.php';

	if(isset($_POST['CreateAdmin'])){

		$PrimerNombre = $_POST['PrimerNombre'];

		$apellidos = $_POST['apellidos'];

		$username = $_POST['usuario'];

		$password = $_POST['contraseña'];

		$filename = $_FILES['foto']['name'];
	

		$pass_fuerte= password_hash($password,PASSWORD_DEFAULT);
		
		if(!empty($filename)){

			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		
		$sql = "INSERT INTO admin (username, password , firstname, lastname, photo, created_on) VALUES ('$username', '$pass_fuerte', '$PrimerNombre', '$apellidos','$filename', NOW())";

            
		
		if($conn->query($sql)){

			$_SESSION['success'] = 'Administrador  añadido satisfactoriamente';
		}
		else{

			$_SESSION['error'] = $conn->error;
		}

	}
	else{

		$_SESSION['error'] = 'Complete el formulario Primero';
	}

	header('location: Admin.php');


?>

