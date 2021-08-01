<?php
require('db.php');
$conn=getConnection();
$sql="select * from user";
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
    <div class="contaier">
        <table border="1">
            <tr> 
                <th colspan="4">Users</th>   
            </tr>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>User Type</td>
</tr>
</tr>
</thead>
<?php while($row=mysqli_fetch_array($result)){?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td ><?php echo $row['user'];?></td>
</tr>
    <?php } ?>

</table>
    </div>
</body>
</html>