<?php
require('db.php');
$conn = getConnection();
$id=$_GET['id'];
$pass=$_GET['pass'];
$repass=$_GET['repass'];
$name=$_GET['name'];
$email=$_GET['email'];
$user=$_GET['user'];
if($id==""){
echo "id is missing";
}
else if($pass=="")
{
    echo "password is missing";
    if($pass.length<6)
    {
        echo "password should be less more then six character";
    }
}
else if($repass=="")
{
    echo"please rewrite password";
    
}
else if($repass!=$pass)
{
    echo "Password incorrect";
}
else if($name=="")
{
    echo "Enter your name";
}
else if($email=="")
{
    echo "Enter your email";
}
else if($user=="")
{
    echo "please select user";
}
else
{
    $sql = "INSERT INTO user VALUES('$id','$pass','$repass','$name','$email','$user'";
    $result = mysqli_query($conn, $sql); 
    if ($conn->query($sql) === TRUE) {
        echo "Successfuly account created";
      }
}


?>