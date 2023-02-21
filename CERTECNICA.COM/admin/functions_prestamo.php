<?php
   
require ('includes/conn.php');

include 'includes/session.php';

if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
        case 'editar_registro':
            editar_registro();
            break; 
		}
	}

    function editar_registro() {

		$conexion =mysqli_connect("localhost","root","","apsystem");

        extract($_POST);

        $consulta="UPDATE solicitud_prestamo SET comentario_GH = '$motivo_rechazo' , estado_GH = 'Rechazada' WHERE id = '$id' ";

		mysqli_query($conexion, $consulta);

        if($conexion->query($consulta)){

			$_SESSION['success'] = 'Se rechazó la solicitud correctamente';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
        
		header('Location: prestamos_pendientes.php');
}

