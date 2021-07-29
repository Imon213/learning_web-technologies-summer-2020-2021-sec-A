<?php
require('db.php');
$conn=getConnection();
$email=$_GET['email'];

if($email!="")
{
    $sql2="select * from user where email='{$email}'";
    $result2=mysqli_query($conn, $sql2);
    if(mysqli_num_rows($result2)<=0 )
{
          echo("You have not yet subcscribe. After completing your subscribtin then you can Unsubscribe");
}
else
{
    $sql1="delete from user where email='{$email}'";
    $result1= mysqli_query($conn,$sql1);
    if ($conn->query($sql1) === TRUE) {
        echo "Successfuly unsubscribed";
      }
}
}
else
{
    echo 'Please provide your email first';
}

?>