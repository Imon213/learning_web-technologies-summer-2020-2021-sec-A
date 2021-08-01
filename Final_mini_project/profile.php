<?php 
session_start();
require('db.php');
$id=$_SESSION['user']['id'];
$conn=getConnection();
$sql="select * from user where id='{$id}'";
$result= mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table border="1">\
            <tr>
                <th colospan="2">Profile</th>
</tr>
<?php while($row=mysqli_fetch_array($result)){?>
<tr>
    <td>ID</td>
    <td><?php echo $row['id'];?></td>
    <tr>
        <tr>
            <td>Name</td>
            <td>  <td><?php echo $row['name'];?></td></td>
        </tr>
        tr>
            <td>Email</td>
            <td>  <td><?php echo $row['email'];?></td></td>
        </tr>
        tr>
            <td>User Type</td>
            <td>  <td><?php echo $row['user'];?></td></td>
        </tr>
    <?php } ?>
        </table>
    </div>
</body>
</html>