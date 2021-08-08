<?php
require_once('db.php');
$conn = getConnection();
$name=$_POST['name'];
$pass=$_POST['password'];

if($name!='' && $pass!='')
{
      $sql= "select * from admin where name='{$name}' and password='{$pass}'";
      $result=mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) >0 )
      {
         echo "Success";
      }
      else{
          echo 'Invalid';
      }
}

?>