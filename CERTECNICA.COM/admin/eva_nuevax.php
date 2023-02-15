<?php
include 'includes/conn.php';

?>
<?php 

// desde aqui es el guardar
$autor = $_SESSION['id'];
$categoria=$_POST['categoria'];
$autor=$_POST['autor'];
$estado=$_POST['estado'];
$gestion=$_POST['gestion'];
$fecha=$_POST['fecha_final'];
$tiempo=$_POST['tiempo'];
$fecha2=date("Y-m-d",strtotime($fecha));

$insertar="INSERT INTO examen (autor,categoria,estado,gestion,fecha_final,tiempo) VALUES('$autor','$categoria','$estado','$gestion','$fecha2','$tiempo') ";
if ($resultado=$conn->query($insertar)) {
echo "<script> alert (\"LOGIN:: Correcto: Autorizado para Crear Nueva Evaluación \"); </script>"; 
      echo "<script language=Javascript> location.href=\"evaluacion.php?categoria=$categoria&titulo=$titulo\"; </script>"; 
      echo "Creación CORRECTA";      
//header("Location: eva1.php?categoria=$categoria&titulo=$titulo");
}else{
  echo "Error al crear la CATEGORÍA ";
  echo "<a href ='entrada_examen.php'> REGRESAR </a>";
}


?> 

</div>
