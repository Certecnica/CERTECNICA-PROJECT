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
           
           $consulta="UPDATE admin SET username = '$usuario' , firstname  = '$firstname' , lastname = '$lastname' , created_on = '$fecha_creacion'WHERE id = '$id' ";
    
           mysqli_query($conexion, $consulta);
   
   
           if($conexion->query($consulta)){
   
               $_SESSION['success'] = 'Administrador actualizado con éxito';
           }
           else{
               $_SESSION['error'] = $conn->error;
           }
       
           header('Location: admin.php');
   }
   function eliminar_registro() {
       $conexion=mysqli_connect("localhost","root","","apsystem");
      
       extract($_POST);
      
       $id= $_POST['id'];
      
      
       $consulta= "DELETE FROM admin WHERE id= $id";
   
       mysqli_query($conexion, $consulta);
   
       if($conexion->query($consulta)){       
           $_SESSION['success'] = 'Administrador eliminado con éxito';
       }
       else{
       
           $_SESSION['error'] = $conn->error;
       }

       header('location: admin.php');

   }
   