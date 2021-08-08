
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation</title>
    <style>
    .title{
        font-family:Fantasy;
        
    }
    .link{
        font-size:20px;
        text-decoration:none;
    }
    .upperlink{
        font-size:20px;
        text-decoration:none;
        margin-left:10px;
    }
    

    }
    .border{
        border-right: 1px solid black;
        height:150px;
    }
    .section{
       margin: auto 0;
    }
    </style>
</head>
<body>
    <table width="100%" border="2" rules="rows">
    
    <tr>
    <td width="20%">
        
    </td>
    <td width="50%" align="center">
    <h3 class="title">Where every thing is at your hand</h3>
    </td>
    <td align="center">
    <a href="Home.php" class="upperlink">Home</a>
    <a href="../Controller/logout.php" class="upperlink">Logout</a>
    </td>
    </tr>
    <tr>
    <td>
    <div class="border">
         <ul>
         <li>
        <a href="home.php" class="link">Home</a>
         </li>
         <li>
        <a href="addemployee.php" class="link">Add Employee</a>
         </li>
         <li>
       
         </ul>
         
         </div>
    </td>
    <td colspan="2" align="center">
        <?php 
               if(isset($_GET['message']))
               {
                   $message=$_GET['message'];
                   if($message=='done')
                   {
                      echo ' <span class="done"> Successfuly Added </span> <br> <br>';
                   }
               }

               if(isset($_GET['error_message']))
               {
                   $mes=$_GET['error_message'];
                   if($mes=='info_missing')
                   {
                      echo ' <span class="done"> Information missing. please check..... </span> <br> <br>';
                   }
               }
               ?>
        
        <fieldset align="center">
        <legend>Add Accountant</legend>
        <form method="post" action="add_employee_check.php">
        <input type="text" name="name" class="name" value="" placeholder="Enter Employeer name"><br><br>
        <input type="Number" name="phone" class="phone" value="" placeholder="Enter Contact Number"><br><br>
        <input type="text" name="comname" class="comname" value="" placeholder="Enter company name"><br><br>
        <input type="text" name="username" class="username" value="" placeholder="Enter User Name"><br><br>
        <input type="password" name="password" class="password" value="" placeholder="Enter Password"><br><br>
        
        <input type="submit" name="submit" value="Submit">

                           </form>
        </fieldset>
        
    </td>
    </tr>
    </table>
</body>
</html>
