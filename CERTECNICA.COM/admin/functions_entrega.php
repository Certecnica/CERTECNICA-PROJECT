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
           
           $consulta="UPDATE entrega_dotacion SET empleado = '$empleado' , fecha_entrega = '$fecha_entrega' , elemento = '$elemento' , descripcion = '$descripcion' 
           WHERE id = '$id' ";
    
           mysqli_query($conexion, $consulta);
   
   
           if($conexion->query($consulta)){
   
               $_SESSION['success'] = 'Entrega de dotación actualizado con éxito';
           }
           else{
               $_SESSION['error'] = $conn->error;
           }
       
           header('Location: entregas.php');
   }
   function eliminar_registro() {

       $conexion=mysqli_connect("localhost","root","","apsystem");
       
       extract($_POST);
     
       $id= $_POST['id'];
       
       $consulta= "DELETE FROM entrega_dotacion WHERE id= $id";
   
       mysqli_query($conexion, $consulta);
   
       if($conexion->query($consulta)){
               
           $_SESSION['success'] = 'Entrega eliminada con éxito';
       }
       
       else{
       
           $_SESSION['error'] = $conn->error;
       }

       header('location: entregas.php');
       
   
   }
   