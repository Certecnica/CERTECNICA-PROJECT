<?php

include 'includes/session.php';

if (isset($_POST['id'])) {

$id =$_POST['id'];

    $sql = "SELECT * , informacion_empleado as empid FROM informacion_empleado LEFT JOIN position ON position.id = informacion_empleado.cargo";
		$query = $conn->query($sql);
		
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>