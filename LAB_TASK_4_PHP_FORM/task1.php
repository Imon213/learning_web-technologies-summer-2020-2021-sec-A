<?php
	
	$username = "";
	
	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		if($username == ""){
			echo "invalid username!";
		}
       
        else{
            echo "Successfuly submitted";
        }
	}else{
		echo 'invalid request';
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
			<legend><h3>Name</h3></legend>

	 <input type="text" name="username" value="<?php echo $username; ?>" /><br><br>
    
				<input type="submit" name="submit" value="Submit">
</fieldset>
                
	</form>
</body>
</html>