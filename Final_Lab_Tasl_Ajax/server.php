<?php
	require('db.php');
    $conn = getConnection();
     $email = $_GET['email'];

	if($email == null){
		echo 'invalid data';
	}else{
		$sql = "INSERT INTO user(email) VALUES('$email')";
        $result = mysqli_query($conn, $sql); 
        if ($conn->query($sql) === TRUE) {
            echo "Your email ".$email." is successfuly Subscribe";
          }
       
	}

?>