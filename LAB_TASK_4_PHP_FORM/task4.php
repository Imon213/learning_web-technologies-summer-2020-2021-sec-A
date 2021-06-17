<?php
$maleStatus="checkemale";
$femaleStatus="checkfemale";
$otherStatus="checkOther";
$gender="";
if(isset($_REQUEST['submit']))
{
	$gender=$_REQUEST['gender'];
	if($gender=="Male")
	{
		echo'male';
	}
	else if($gender=='Female')
	{
		echo 'female';
	}
    else if($gender=='Other')
    {
        echo 'Other';
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
			<legend><h3>Gender</h3></legend>

            
            <input type="radio" name="gender" value="Male"<?php $gender?>"> Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender"  value="Other">Other
       <br>
    
				<input type="submit" name="submit" value="Submit">
</fieldset>
                
	</form>
</body>
</html>
