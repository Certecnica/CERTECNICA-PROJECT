<?php
	$conn = new mysqli('localhost', 'root', '', 'apsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>


<?php 
 $conexion2 = new PDO('mysql:host=localhost;dbname=apsystem', 'root', '');
?>
