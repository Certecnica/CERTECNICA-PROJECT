<?php
   
require ('includes/conn.php');

include 'includes/session.php';

if (isset($_POST['edit'])){ 
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
		$consulta="UPDATE informacion_empleado SET empleado = '$empleado', cargo = '$cargo' ,  correo_corporativo = '$correo_corporativo' , area = '$area' , telefono_corporativo = '$telefono_corporativo' ,
        eps = '$eps' , afp = '$afp' , cesantia = '  $cesantia ' , caja_compensacion = '$caja_compensacion ' , arl = '$arl' , tipo_contrato = '$tipo_contrato' , nivel_escolaridad = '$nivel_escolaridad' ,
         titulo = '$titulo' , matricula_profesional = '$matricula_profesional'
         WHERE id = '$id' ";

		mysqli_query($conexion, $consulta);


        if($conexion->query($consulta)){

			$_SESSION['success'] = 'Empleado actualizado con éxito';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	
		header('Location: emp_info_corporativa.php');

}

