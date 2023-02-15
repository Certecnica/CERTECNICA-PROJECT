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
           
           $consulta="UPDATE salarios SET EMPLEADO = '$empleado' , SALARIO_BASICO = '$salario_basico' , AUX_NO_SALARIAL = '$aux_no_salarial' WHERE id = '$id' ";
    
           mysqli_query($conexion, $consulta);
   
   
           if($conexion->query($consulta)){
   
               $_SESSION['success'] = 'Salario actualizado con éxito';
           }
           else{
               $_SESSION['error'] = $conn->error;
           }
       
           header('Location: salarios.php');
   }
   function eliminar_registro() {
       $conexion=mysqli_connect("localhost","root","","apsystem");
       extract($_POST);
       $id= $_POST['id'];
       $consulta= "DELETE FROM salarios WHERE id= $id";
   
       mysqli_query($conexion, $consulta);
   
       if($conexion->query($consulta)){
               
           $_SESSION['success'] = 'Salario eliminado con éxito';
       }
       
       else{
       
           $_SESSION['error'] = $conn->error;
       }

       header('location: salarios.php');
       
   
   }
   