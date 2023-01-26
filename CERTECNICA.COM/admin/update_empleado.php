<?php
include 'includes/conn.php';
$id = $_GET['id'];

$sql = "SELECT * FROM usuers WHERE id = $id";
$query = mysqli_query($conn , $sql);
$fila = mysqli_fetch_array($query);


?>