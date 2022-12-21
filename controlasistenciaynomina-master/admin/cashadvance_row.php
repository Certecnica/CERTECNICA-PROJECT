<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		
		$id = $_POST['id'];
		
		$sql = "SELECT * cashadvance.id AS caid , amount AS amount_id FROM cashadvance LEFT JOIN employees on employees.id=cashadvance.employee_id WHERE cashadvance.id='$id'";
		
		$query = $conn->query($sql);
		
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>
<?php

include 'includes/conn.php';

include 'includes/navbar.php';

include 'includes/menubar.php';

$query = "SELECT * FROM employees BY ID DESC LIMIT 1";

?>