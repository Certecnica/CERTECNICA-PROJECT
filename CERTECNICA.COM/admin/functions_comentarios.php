
<?php

require 'includes/conn.php';

if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
        case 'editar_registro':
            editar_registro();
            break; 
		}

	}

function editar_registro() {
		$conexion=mysqli_connect("localhost","root","","apsystem");
		
        extract($_POST);   
        
        $sql = " UPDATE solicitudes SET comentario_GH = '$comentarios' , aprobacion_GH = 'Rechazada' 
         WHERE id = '$id'";
		
        mysqli_query($conexion,$sql);


		header('Location: index.php');

}
 
?>