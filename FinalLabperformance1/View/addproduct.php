<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        .div{
            width: 50%;
            margin: 0 auto;
        }
        </style>
</head>
<body>
    <div class="div">
    <fieldset width=>
        <legend>
            Add Product
</legend>
<form method="post" action="../Controller/addprofuctcheck.php">
Name<br>
<input type="text" name="name" value=""><br>
Buying Price<br>
<input type="number" name="bprice" value=""><br>
Selling Price<br>
<input type="number" name="sprice" value=""><br>
<hr>
<input type="checkbox" name="display" value="display">Display<br>
<hr>
<input type="submit" name="submit" value="submit">
</fieldset>
    </form>
</div>
</body>
</html>