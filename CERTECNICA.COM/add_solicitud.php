<?php

include 'users/includes/conn.php';

include 'users/includes/session.php';

     $empleado  = $_POST['empleado'];
   
    $motivo = $_POST['motivo'];
    
    $fecha_inicio = $_POST['fecha_inicio'];
    
    $fecha_fin = $_POST['fecha_fin'];
    
    $descripcion = $_POST['descripcion'];
   
    $documentos =$_FILES['documento']['name'];

    $tmp_name =$_FILES['documento']['tmp_name'];
    
    if(move_uploaded_file($tmp_name, "admin/solicitudes/" .$documentos)){
    
           $ruta =  "solicitudes/" .$documentos;

           $sql = "INSERT INTO solicitudes (emplead , Motivo ,fecha_inicio , fecha_fin, descripcion ,aprobacion_GH, estado_JF,documento) VALUES ('$empleado','$motivo', '$fecha_inicio', '$fecha_fin', '$descripcion','Pendiente','Pendiente' , '$ruta');";

           if($conn->query($sql)){
            
            $_SESSION['success'] = 'Informacion Corporativa Añadida con exito';
        }
        else{
            $_SESSION['ERROR'] = $conn-> error;
        }
    
    }
    else{
        $_SESSION['error'] = 'Complete el formulario Primero';
    }
    
    header('location: users/home.php');
        

?>

