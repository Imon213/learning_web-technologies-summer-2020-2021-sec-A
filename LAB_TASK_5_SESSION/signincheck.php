<?php
session_start();
if(assert($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username!='' && $password!='')
    {
        if($_SESSION['user']['username']==$username && $_SESSION['user']['password']==$password)
        {
            $_SESSION['flag']='true';
            header('location:loggedin_dashboard.php');

        }
        else
        {
            echo 'Wrong user name or password';
        }
    }
    else{
        echo'null user name or password';
    }
}
else
{
    echo'something went wrong';
}

?>