<?php 
	include'conn.php';
	$qry = $conn->query("SELECT * FROM medecin_programme where doctor_id=".$_GET['id']);
?>
