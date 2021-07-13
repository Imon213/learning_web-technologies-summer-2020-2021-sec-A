<?php
require('../Model/db.php');
     if(isset($_POST['submit']))
     {
         $name=$_POST['name'];
         $bprice=$_POST['bprice'];
         $sprice=$_POST['sprice'];
         $display="ok";
         if($name!='' && $bprice!='' && $sprice!='' && $display!='')
         {
                 $conn = getConnection();
                  $sql = "insert into products (name,buying price,sellingprice,display) values($name,$bprice,$sprice,$display)";
                $result = mysqli_query($conn, $sql); 
         }
     }
?>