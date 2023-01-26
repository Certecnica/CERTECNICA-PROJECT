
<?php


require 'includes/conn.php';

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
		$conexion=mysqli_connect("localhost","root","","apsystem");
		extract($_POST);

         
        $sql = " UPDATE informacion_empleado SET empleado = '$edit_empleado', cargo = '$edit_cargo', area = '$edit_area', correo_corporativo = '$edit_correo_corporativo', telefono_corporativo = '$edit_numero', eps = '$edit_eps', afp = '$edit_afp', cesantia = '$edit_cesantias', caja_compensacion = '$edit_caja_compensacion', arl = '$edit_arl' , arl = '$edit_arl', tipo_contrato = '$edit_Tcontrato' , nivel_escolaridad = '$edit_escolaridad' , titulo = '$edit_titulo' 
         WHERE id = '$id'";
		mysqli_query($conexion, $consulta);


		header('Location: index.php');

}
 
?>