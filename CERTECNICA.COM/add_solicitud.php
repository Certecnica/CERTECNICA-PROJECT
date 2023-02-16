<?php

include 'users/includes/conn.php';

include 'users/includes/session.php';

$user_id = $_SESSION['employees'];
     
$empleado  = $_POST['empleado'];
   
    $motivo = $_POST['motivo'];
    
    $fecha_inicio = $_POST['fecha_inicio'];
    
    $fecha_fin = $_POST['fecha_fin'];
    
    $descripcion = $_POST['descripcion'];
   
    $documentos =$_FILES['documento']['name'];

    $tmp_name =$_FILES['documento']['tmp_name'];

    if(move_uploaded_file($tmp_name, "admin/solicitudes/" .$documentos)){
    
           $ruta =  "solicitudes/" .$documentos;

           $sql = "INSERT INTO solicitudes (emplead,id_user, Motivo,fecha_inicio,fecha_fin,descripcion,aprobacion_GH, estado_JF,estado_DA,documento,comentario_GH,comentario_JF) VALUES ('$empleado','$user_id','$motivo', '$fecha_inicio', '$fecha_fin', '$descripcion','Pendiente','Pendiente' , 'Pendiente','$ruta','N/A','N/A');";

           if($conn->query($sql)){
            
            $_SESSION['success'] = 'Solicitud de permiso  Añadida con exito';
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

