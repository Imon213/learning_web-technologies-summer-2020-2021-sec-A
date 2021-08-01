<?php
session_start();
if(isset($_SESSION['flag']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width: 30%;
            margin: 0 auto;
           
        }
        </style>
</head>
<body>
    <div class="container">
    <fieldset>
        <center>
        <h3>Welcome <?=$_SESSION['user']['id']?>!<h3>
            <a href="profile.php">profile</a><br>
            <a href="changepass.php">Change Password</a><br>
            <a href="viewuser.php">View Users</a><br>
            <a href="logout.php">logout</a><br>

    </center>
        </fieldset>
    </div>
</body>
</html>
<?php
}
else{
    header('location:login.php');
  }
?>