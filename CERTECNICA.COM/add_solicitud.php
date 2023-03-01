juanc.sofi@gmail.com
<?php
include 'users/includes/conn.php';

include 'users/includes/session.php';

    $user_id = $_SESSION['employees'];
     
    $empleado  = $_POST['empleado'];
   
    $motivo = $_POST['motivo'];
    
    $fecha_inicio = $_POST['fecha_inicio'];
    
    $fecha_fin = $_POST['fecha_fin'];
    
    $descripcion = $_POST['descripcion'];

    $area = $_POST['area'];

    $position_id = $_POST['position_id'];
   
    
   // Comprobar si el archivo se ha subido
if(isset($_FILES['documento']) && $_FILES['documento']['error'] === UPLOAD_ERR_OK) {
    // El archivo se ha subido correctamente
    $documentos = $_FILES['documento']['name'];
    $tmp_name = $_FILES['documento']['tmp_name'];
    if(move_uploaded_file($tmp_name, "admin/solicitudes/" .$documentos)){
        $ruta =  "solicitudes/" .$documentos;
        
    } else {
        // Error al mover el archivo
        $_SESSION['error'] = 'Error al subir el archivo';
        header('location: users/home.php');
        exit;
    }
} else {
    // El archivo no se ha subido o ha ocurrido un error
    $ruta = null;
}

$sql = "INSERT INTO solicitudes (emplead, id_user, Motivo,fecha_inicio, fecha_fin, descripcion , area , position_id ,  aprobacion_GH , estado_JF,estado_DA,documento,comentario_GH,comentario_JF,comentario_DA) VALUES ('$empleado','$user_id','$motivo', '$fecha_inicio', '$fecha_fin', '$descripcion','$area', '$position_id','Pendiente','Pendiente' , 'Pendiente',";

if($ruta !== null){
    // Si se ha subido un archivo, agregar la ruta al SQL
    $sql .= "'$ruta',";
} else {
    // Si no se ha subido un archivo, agregar un valor nulo al SQL
    $sql .= "NULL,";
}

$sql .= "'N/A','N/A','N/A');";

if($conn->query($sql)){
    $_SESSION['success'] = 'Solicitud de permiso Añadida con exito';
} else {
    $_SESSION['ERROR'] = $conn-> error;
}

header('location: users/home.php');    