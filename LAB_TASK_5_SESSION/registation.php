<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation</title>
    <style>
        .reg{
            margin-left: 215px;
            width="200px";
        }
        
        .usname{
            margin-left: 173px;
       }
       .password{
           margin-left:197px;
       }
       .repassword{
           margin-left:140px;
       }
       .first{
          margin:0 auto;
           width: 50%;
       }
    
        </style>
</head>
<body>
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
<div class="first">
<form action="signupcheck.php" method="post">
<fieldset>
                <legend><h3>Registation</h3></legend>
                
					<center>
                    <lebel class="lb">Name:</lebel><input type="text" class="reg" name="name">
                    
                   <br> <br><lebel>Email:</lebel><input type="email" class="reg" name="email">
               
                   <br><br><lebel class="lb"> Userer Name</lebel><input type="text" class="usname" name="username">
              
                   <br><br><lebe class="lb"> password</lebel><input type="password"class="password" name="password">
                
                   <br><br><lebel class="lb"> Confirm password</lebel><input type="password" class="repassword" name="confirm_password">
                   
    </center>

                  <fieldset>
                      <legend>Gender</legend>
                      <input type="radio" name="gender" value="Male"<?php $gender?>"> Male
                          <input type="radio" name="gender" value="Female">Female
                           <input type="radio" name="gender"  value="Other">Other
                   </fieldset>

                   <fieldset>
                   <legend> Date of Birth</legend>
                  <input type="date" name="dob" value="<?php echo $dob; ?>" /><br><br>
                   </fieldset>
                 <br><br>
                <input type="submit" value="Submit" name="submit">
                <input type="reset" value="Reset" name="reset">
</fieldset>


    </form>
    </div>
    <table width="100%">
        <tr>
        <td align="center">
            copy right @2017
    </td>
    <tr>
    </table>
   
</body>
</html>