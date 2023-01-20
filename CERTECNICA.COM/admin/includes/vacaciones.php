<?php
include 'includes/session.php';
include 'includes/conn.php';
?>

<html>
    <head>
        <body>

       <?php 
        $consulta = "SELECT * FROM ";
        echo "Obtener fecha actual con funcion date() en PHP <br>";
$fechaActual = date('d/m/y');
echo "<br>Fecha con formato (Dia - Mes - Año) <br>";
echo "$fechaActual <br>";
       ?>

        </body>
    </head>

</html>