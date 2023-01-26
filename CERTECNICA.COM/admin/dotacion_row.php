<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];

		$sql = "SELECT *, dotacion.id as dotacion FROM dotacion WHERE dotacion.id = '$id'";
		
		$query = $conn->query($sql);
		
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>