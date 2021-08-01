<?php
session_start();
require_once('db.php');
$conn = getConnection();
$id=$_GET['id'];
$pass=$_GET['pass'];

if($id!='' && $pass!='')
{
      $sql= "select * from user where id='{$id}' and password='{$pass}'";
      $result=mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) >0 )
      {
        $_SESSION['user']=$id;
        $_SESSION['flag']='true';
          header('location:home.php');
      }
      else{
          echo 'Invalid';
      }
}

?>