<?php
	require('db.php');
    $conn = getConnection();
     $search = $_GET['search_item'];

	if($search == null){
		echo 'invalid data';
	}else{
		$sql= "select * from employee where name='{$search}'";
        $result = mysqli_query($conn, $sql); 
        while($row=mysqli_fetch_array($result))
        {
            echo "$row['name']"
        }
       
	}

?>