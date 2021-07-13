<?php
	require_once('../Model/db.php');
	
	

		$conn = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($conn, $sql);
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
       <table border="1">
	<thead>
		<tr>
			<th>Name</th>
			<th>Buying Price</th>
			<th>Selling price</th>
            
            <th colspan="2">Action</th>
		</tr>
	</thead>

    <?php while ($row = mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['buying price']; ?></td>
            <td><?php echo $row['sellingprice']; ?></td>
            
			<td>
				<a href="edit.php?edit=<?php echo $row['name']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="delete.php?del=<?php echo $row['name']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>

       </body>
       </html>
       

		
		

    