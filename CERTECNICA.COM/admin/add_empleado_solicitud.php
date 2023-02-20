<?php

include 'includes/conn.php';

 
    $empleado  = $_POST['empleado_solicitud'];
   
    $motivo = $_POST['motivo_solicitud'];
    
    $fecha_inicio = $_POST['fecha_inicio'];
    
    $fecha_fin = $_POST['fecha_fin'];
    
    $descripcion = $_POST['descripcion'];
   
    $documentos = $_FILES['documento_solicitud']['name'];

    $tmp_name = $_FILES['documento_solicitud']['tmp_name'];

    if(move_uploaded_file($tmp_name, "solicitudes/" .$documentos)){
    
           $ruta =  "solicitudes/" .$documentos;

           $sql = "INSERT INTO solicitudes (emplead, Motivo,fecha_inicio,fecha_fin,descripcion,aprobacion_GH, estado_JF,estado_DA,documento,comentario_GH,comentario_JF) VALUES ('$empleado','$motivo', '$fecha_inicio', '$fecha_fin', '$descripcion','Pendiente','Pendiente' , 'Pendiente','$ruta','N/A','N/A');";

           if($conn->query($sql)){
            
            $_SESSION['success'] = 'Solicitud de permiso Añadida con exito';
        }
        else{
            $_SESSION['ERROR'] = $conn-> error;
      }   
    }
    else{
        $_SESSION['error'] = 'Complete el formulario Primero';
    }
    
    header('location: historia_solicitudes.php');
    ?>

