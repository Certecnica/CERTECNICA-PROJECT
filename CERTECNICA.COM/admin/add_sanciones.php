<?php        
include 'includes/conn.php';

include 'includes/session.php';

$empleadoSan = $_POST['empleado'];

$falta = $_POST['falta'];

$sancion = $_POST['sancion'];

$motivo = $_POST['motivo'];

$descripcion = $_POST['descripcion'];

$documentos =$_FILES['documento']['name'];

$tmp_name =$_FILES['documento']['tmp_name'];

if(move_uploaded_file($tmp_name, "sanciones/" .$documentos)){

       $ruta =  "sanciones/" .$documentos;

       $insert = $conn -> prepare("INSERT INTO sanciones VALUES (null,'$empleadoSan' ,'$falta', '$sancion','$motivo','$descripcion','$ruta' , NOW() )");
 
       $insert->execute();

    echo '<script language="javascript">alert("Se guardo Correctamente");</script>';

}
else {

    echo '<script language="javascript">alert("Ocurrio un errror");</script>';

}
 header("Location: sanciones.php");


// realizar modificación en la base de datos

// obtener la hora y fecha actual
$timestamp = date ('Y-m-d H:i:s');

// obtener el ID del usuario actual (si estás registrando modificaciones realizadas por usuarios)

$user_id = $_SESSION['admin'];

// crear una descripción de la modificación

$description = "Se Creo una sancion al empleado: " . $empleadoSan ;

$data = "$empleadoSan , $falta , $sancion , $motivo , $descripcion ";

// insertar una entrada en la tabla de log

$sql = "INSERT INTO log_sanciones(timestamp, user_id, description , data ) VALUES ('$timestamp', '$user_id', '$description' , '$data')";

//utilizamos la funcion de mysqli_query para llamar la conexion y la variable en la cual se realizo la consulta del query

mysqli_query($conn, $sql);

?>