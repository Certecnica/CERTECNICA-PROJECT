<?php
   
require ('includes/conn.php');

include 'includes/session.php';

if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
        case 'editar_registro':
            editar_registro();
            break; 
            case 'eliminar_registro';
            eliminar_registro();
    
            break;
		
		}
	}
    function editar_registro() {
		$conexion =mysqli_connect("localhost","root","","apsystem");
		
        extract($_POST);
		
        $consulta="UPDATE dotacion SET TALLA_CAMISA = '$TALLA_CAMISA' , TALLA_CALZADO = '$TALLA_CALZADO' , TALLA_CHAQUETA = '$TALLA_CHAQUETA' , TALLA_PANTALON = '$TALLA_PANTALON' WHERE id = '$id' ";

		mysqli_query($conexion, $consulta);


        if($conexion->query($consulta)){

			$_SESSION['success'] = 'Dotación actualizado con éxito';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	
		header('Location: dotacion.php');

}
function eliminar_registro() {
	$conexion=mysqli_connect("localhost","root","","apsystem");
	extract($_POST);
	$id= $_POST['id'];
	$consulta= "DELETE FROM dotacion WHERE id= $id";

	mysqli_query($conexion, $consulta);

	if($conexion->query($consulta)){
			
		$_SESSION['success'] = 'Dotación eliminada con éxito';
	}
	
	else{
	
		$_SESSION['error'] = $conn->error;
	}
	
	
	header('location: dotacion.php');
	

}
