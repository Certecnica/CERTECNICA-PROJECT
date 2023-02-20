<?php    
   require ('includes/conn.php');   
   include 'includes/session.php';
   
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
           $conexion =mysqli_connect("localhost","root","","apsystem");
           
           extract($_POST);
           
           $consulta="UPDATE solicitudes SET fecha_inicio = '$fecha_inicio' , fecha_fin = '$fecha_fin' , descripcion = '$descripcion' WHERE id = '$id' ";
    
           mysqli_query($conexion, $consulta);
   
           if($conexion->query($consulta)){
   
               $_SESSION['success'] = 'Solicitud actualizado con éxito';
           }
           else{
               $_SESSION['error'] = $conn->error;
           }
           header('Location: solicitudes_pendientes.php');
   }

   function eliminar_registro() {
    
    $conexion=mysqli_connect("localhost","root","","apsystem");
    
    extract($_POST);
    
    $id= $_POST['id'];
    
    $consulta= "DELETE FROM solicitudes WHERE id= $id";

    mysqli_query($conexion, $consulta);


    header('Location: solicitudes_pendientes.php');

}
