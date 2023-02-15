<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['ingresar'])){
		
		$username = $_POST['usuario'];

		$password = $_POST['contraseña'];

		$sql = "SELECT * FROM employees WHERE contact_info = '$username'";
		
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['ERRORES'] = 'No se puede Encontrar la cuenta con el nombre de usuario';
		}
		else{
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['contraseña'])){
				$_SESSION['employees'] = $row['id'];
			}
			else{
				$_SESSION['ERRORES'] = 'Contraseña Incorrecta';
	
			}
		}
		
	}
	else{
		$_SESSION['ERRORES'] = 'Ingrese las Credenciales de Usuario primero';
	}
  
	header ('location: home.php')
?>