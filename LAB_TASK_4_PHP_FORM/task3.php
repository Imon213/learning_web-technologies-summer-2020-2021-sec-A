<?php
$dob="";
if(isset($_REQUEST['submit']))
{
	$dob=$_REQUEST['dob'];
	if($dob=="")
	{
		echo"Invalid date of birth";
	}
	else
	{
		echo $dob;
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
			<legend><h3>Date of Birth</h3></legend>

	 <input type="date" name="dob" value="<?php echo $dob; ?>" /><br><br>
    
				<input type="submit" name="submit" value="Submit">
</fieldset>
                
	</form>
</body>
</html>
