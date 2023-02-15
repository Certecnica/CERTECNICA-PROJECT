<?php
   
require ('includes/conn.php');
include ('includes/session.php');


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
		$consulta="UPDATE beneficiarios SET parentesco = '$parentesco' , tipo_documento = '$tipo_documento' , documento_bene = '$numero_documento' , nombre_bene = '$nombres_beneficiarios' , fecha_nacimiento = '$fecha_nacimiento'
         WHERE id = '$id' "; 

		mysqli_query($conexion, $consulta);

        if($conexion->query($consulta)){

			$_SESSION['success'] = 'Beneficiario  actualizado con éxito';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	

		header('Location: listar_beneficiarios.php');
    }

    function eliminar_registro() {
        $conexion=mysqli_connect("localhost","root","","apsystem");
        extract($_POST);
        $id= $_POST['id'];
        $consulta= "DELETE FROM beneficiarios WHERE id= $id";
    
        mysqli_query($conexion, $consulta);
    
    
        header('Location: listar_beneficiarios.php');
    
    }