<?php
   
   require ('includes/conn.php');
   
   include 'includes/session.php';
   
   if (isset($_POST['accion'])){ 
       switch ($_POST['accion']){
           //casos de registros
           case 'editar_registro':
               editar_registro();
               break;        
           }
       }
       function editar_registro() {
           $conexion =mysqli_connect("localhost","root","","apsystem");
           
           extract($_POST);
           
           $consulta="UPDATE solicitud_prestamo SET comentario_GH = '$finalizacion' , estado_prestamo = 'FINALIZADO'
           WHERE id = '$id' ";
    
           mysqli_query($conexion, $consulta);
   
   
           if($conexion->query($consulta)){
   
               $_SESSION['success'] = 'Entrega de dotación actualizado con éxito';
           }
           else{
               $_SESSION['error'] = $conn->error;
           }
       
           header('Location: prestamos_curso.php');
   }

   