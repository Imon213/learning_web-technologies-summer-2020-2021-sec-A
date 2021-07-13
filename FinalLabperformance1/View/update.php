<?php
require_once('../Model/db.php');
$conn = getConnection();

if (isset($_POST['save'])) {
	$name = $_POST['name'];
	$bprce = $_POST['bprice'];
	$sprice = $_POST['sprice'];

	mysqli_query($conn, "UPDATE info SET name='$name', buying price='$bprice',sellingprice='sprice' WHERE name=$name");
   

	header('location: display.php');
}

?>