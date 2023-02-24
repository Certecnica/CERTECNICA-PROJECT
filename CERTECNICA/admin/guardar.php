<?php        
include 'includes/conn.php';

$empleadoDoc = $_POST['empleado'];
$tipo_doc = $_POST['Tdocumento'];
$documento =$_FILES['documento']['name'];

$tmp_name =$_FILES['documento']['tmp_name'];



if(move_uploaded_file($tmp_name, "documentos/" .$documento)){


       $ruta =  "documentos/" .$documento;

       $insertar = $conn -> prepare("INSERT INTO documentos VALUES (null,'$empleadoDoc' ,'$tipo_doc', '$ruta', NOW() )");
 
       $insertar ->execute();


    echo '<script language="javascript">alert("Se guardo Correctamente");</script>';


}
else {

    echo '<script language="javascript">alert("Ocurrio un errror");</script>';

}
 header("Location: documentos.php");
?>