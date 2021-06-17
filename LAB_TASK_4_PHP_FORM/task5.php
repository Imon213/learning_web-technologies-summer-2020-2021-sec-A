<?php
$maleStatus="checkemale";
$femaleStatus="checkfemale";
$otherStatus="checkOther";
$degree="";
if(isset($_REQUEST['submit']))
{
	$degrerr=$_REQUEST['degree'];
	if($degree=="SSC")
	{
		echo"SSC";
	}
	else if($degree=='HSC')
	{
		echo 'HSC';
	}
    else if($degree=='Bsc')
    {
        echo 'Bsc';
    }
	else if($degree=='Msc')
	{
		echo 'Msc';
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

            
			<input type="checkbox" name="degree" value="SSC">SSC
                <input type="checkbox" name="degree" value="HSC">HSC
                <input type="checkbox" name="degree" value="Bsc">Bsc.
                <input type="checkbox" name="degree" value="Msc">Msc.
       <br>
    
				<input type="submit" name="submit" value="Submit">
</fieldset>
                
	</form>
</body>
</html>
