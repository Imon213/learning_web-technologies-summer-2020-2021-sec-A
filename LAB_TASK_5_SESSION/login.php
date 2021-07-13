<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation</title>
    <style>
    .first{
        margin: 0 auto;
        width: 50%;
       
    }
    </style>
</head>

<body>
<fieldset>
    <table width="100%"  >
        <tr>
            <td width="10%"><img src="download.png"></td>
            <td width="80%"> <h1>Company</h1></td>
            <td><a href="home.php">Home|</td>
            <td><a href="Login.php">Login|</td>
            <td><a href="Registation.php">Registation</td>
           

        </tr>
       
        <br>
       
</table>
<hr>
<div class="first">
<form action="signincheck.php" method="post">
<fieldset>
                <legend><h3>LOGIN</h3></legend>
                
					<center>
                    <lebel class="lb">User Name:</lebel><input type="text" value="" name="username">
                    
                   <br> <br><lebel>Password:</lebel><input type="password" value="" name="password">
                   <hr>
                  <input type="checkbox" name="checkbox" value="remember me"> <lebel>Remember me</lebel><br>
                  <input type="submit" value="Submit" name="submit">
                   <a href="forgotpass.php">Forgot Password?</a>
               
    </center>

    </form>
    </div>
    <table width="100%">
        <tr>
        <td align="center">
            copy right @2017
    </td>
    <tr>
    </table>
    </fieldset>
   
</body>
</html>