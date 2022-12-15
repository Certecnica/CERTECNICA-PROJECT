<?php
	include 'includes/session.php';
     
	if(isset($_GET['return'])){
		$return = $_GET['return'];		
	}
	else{
		$return = 'home.php';
	}
	if(isset($_POST['guardar'])){
		$curr_contraseña = $_POST['curr_password'];
		$username = $_POST['username'];
		$contraseña = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$photo = $_FILES['photo']['name'];
		if(password_verify($curr_contraseña, $user['password'])){
			if(!empty($photo)){
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$photo);
				$filename = $photo;	
			}
			else{
				$filename = $user['photo'];
			}
			if($contraseña == $user['password']){
				$contraseña= $user['password'];
			}
			else{
				$contraseña = password_hash($contraseña, PASSWORD_DEFAULT);
			}
			$sql = " UPDATE employees SET contact_info = '$username', contraseña = '$contraseña', firstname = '$firstname', lastname = '$lastname', photo = '$filename' WHERE id = '".$user['id']."'";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Perfil de administrador actualizado correctamente';
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
		}
		else{
			$_SESSION['error'] = 'Contraseña Incorrecta';
		}
	} else {
	$_SESSION['error'] = 'Rellene los detalles requeridos primero';
}
	header('location:'.$return);
?>