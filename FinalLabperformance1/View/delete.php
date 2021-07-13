<?php 
require_once('../Model/db.php');
$conn = getConnection();
	if (isset($_GET['del'])) {
		$name = $_GET['del'];
		$update = true;
		$result = mysqli_query($conn, "SELECT * FROM info WHERE name=$name");

		if (count($result) == 1) {
			$n = mysqli_fetch_array($result);
			$name = $n['name'];
			$bprice = $n['buying price'];
            $sprice = $n['sellingprice'];
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="delcon.php"> 
<input type="text" name="name" value="<?php echo $id; ?>">
<input type="number" name="bprice" value="<?php echo $name; ?>">
<input type="number" name="sprice" value="<?php echo $address; ?>">
<input class="btn" type="submit" name="del" >Delete</button>
<form>
</body>
</html>
