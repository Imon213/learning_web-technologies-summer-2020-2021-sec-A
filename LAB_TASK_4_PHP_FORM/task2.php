<?php
$email="";
if(isset($_REQUEST['submit']))
{
	$email=$_REQUEST['email'];
	if($email=="")
	{
		echo"Invalid email address";
	}
	else
	{
		echo $email;
	}
}
else
{
	echo "something went wrong";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Data</title>
</head>
<body>
	<form method="post" >
		<fieldset>
			<legend><h3>Email</h3></legend>

	 <input type="email" name="email" value="<?php echo $email; ?>" /><br><br>
    
				<input type="submit" name="submit" value="Submit">
</fieldset>
                
	</form>
</body>
</html>
