
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


// realizar modificación en la base de datos

// obtener la hora y fecha actual
$timestamp = date ('Y-m-d H:i:s');

// obtener el ID del usuario actual (si estás registrando modificaciones realizadas por usuarios)
$user_id = $_SESSION['admin'];

// crear una descripción de la modificación
$description = "Se creo al admin  " . $PrimerNombre . " " . $apellidos;

$data = "$PrimerNombre , $apellidos , $username , $password , $filename";

// insertar una entrada en la tabla de log
$sql = "INSERT INTO log_admin(timestamp, user_id, description , data ) VALUES ('$timestamp', '$user_id', '$description' , '$data')";

//utilizamos la funcion de mysqli_query para llamar la conexion y la variable en la cual se realizo la consulta del query
mysqli_query($conn, $sql);

//Todo con el proposito de lograr tener un control sobre los usuarios en caso de modificar , eliminar , editar lo  podremos saber atravez de esta variable 

?>

