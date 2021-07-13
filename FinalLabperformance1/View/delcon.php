<?php
require_once('../Model/db.php');
$conn = getConnection();
if (isset($_GET['del'])) {
	$name = $_POST['name'];
	$bprce = $_POST['bprice'];
	$sprice = $_POST['sprice'];
	mysqli_query($conn, "DELETE FROM info WHERE id=$id");
	
}
?>