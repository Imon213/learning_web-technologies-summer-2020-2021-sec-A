<?php
$maleStatus="checkemale";
$femaleStatus="checkfemale";
$otherStatus="checkOther";
$BG="";
if(isset($_REQUEST['submit']))
{
	$BG=$_REQUEST['BG'];
	if($BG=="A+")
	{
		echo'A+';
	}
	else if($BG=='B+')
	{
		echo 'B+';
	}
    else if($BG=='AB+')
    {
        echo 'AB+';
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

            
            <select name="BG">
            <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option> 
            />
       <br>
    
				<input type="submit" name="submit" value="Submit">
</fieldset>
                
	</form>
</body>
</html>
