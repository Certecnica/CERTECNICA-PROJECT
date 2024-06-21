<?php        
include 'includes/conn.php';

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
?>