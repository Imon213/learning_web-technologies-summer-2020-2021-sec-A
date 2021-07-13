<?php
session_start();
if(isset($_POST['submit']))
{
   $name=$_POST['name'];  
   $email=$_POST['email'];
   $uname=$_POST['username'];
   $password=$_POST['password'];
   $conPass=$_POST['confirm_password'];
   $dob=$_POST['dob'];
   if($name!='' && $email!='' && $uname!='' && $password!='' && $conPass!='')
   {
       $user=['name'=>$name,'email'=>$email,'username'=>$uname,'password'=>$password,'confirmpassword'=>$conPass,'dob'=>$dob];
       $_SESSION['user']=$user;
       header('location:login.php');
   }
   else{
       echo 'null value';
   }
}
else{
    echo 'Something went wrong';
}
?>
