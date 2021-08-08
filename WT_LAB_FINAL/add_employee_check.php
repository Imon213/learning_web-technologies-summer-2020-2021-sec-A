<?php
require('db.php');
$conn = getConnection();

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $pass=$_POST['password'];
    $phone=$_POST['phone'];
    $comname=$_POST['comname'];
    $uname=$_POST['username'];
    if($name!="" && $comname!="" && $phone!="" && $uname!="" && $pass!="")
    {
        $sql = "INSERT INTO employee(name,companyname,phone,uname,password) VALUES('$name','$comname','$phone','$uname','$pass')";
        $result = mysqli_query($conn, $sql); 
    }
}
?>