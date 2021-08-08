<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
        width:20%;
        margin:0 auto;
        margin-top:100px;
        border: solid black 1px;
    }
        </style>
</head>
<body>
    <div class="container">
        <center>
            <form method="post" action="admin_login_check.php">
        <input type="text" id="name" value="" name="name" placeholder="Enter your name"><br><br>
        <input type="password" name="password" value="" placeholder="Enter your password" id="password"><br><br>
       <input type="submit" value="Submit" name="submit"  class="submit">
</form>
</center>
    </div>
</body>
</html>