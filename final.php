<!DOCTYPE html>
<html>

<head>
<?php include("admin.html"); ?>
	<link rel="stylesheet" type="text/css" href="customer.css">
    <title>BILL INVOICE</title>
</head>

<style>
	.room{
		margin: 10px;
		padding: 10px;
		color: #000;
		overflow: hidden;
		box-shadow: 0px 5px 15px rgba(0,0,0,0.7);
	}
    </style>
    
<body>


    <?php
   // include("admin.html");
    $id=$_POST['cid'];
    $con=mysqli_connect('localhost','root','','food');
    if($con==false)
    {
      echo "error";
    }

    $qry="SELECT * FROM `order` WHERE `cid`='$id'";
    $run=mysqli_query($con,$qry);
    $row=mysqli_fetch_assoc($run);
    if($run==false)
    {
        ?><script>
            alert("DATA NO INSERTED");
            </script>
            <?php
    }
    else{
        
        echo "<center>";
        echo "<div style='margin-top:100px; background: rgba(211, 211, 211, 0.5); box-shadow: 0px 5px 15px rgba(0,0,0,0.7); width:40%; height:250px; border-radius:20px;'><h1>Bill Invoice</h1><br>";
       
        echo "Order Number  :".$row['ordno']."<br><br><hr>";
        echo "Product Name  :".$row['pname']."<br><br><hr>";
        echo "Quantity :".$row['quan']."<br><br><hr>";
        echo "Order Date :".$row['ordate']."<br><br><hr>";
        echo "<b>Billing Amount :".$row['amnt'];
    
        echo "</div>";
        echo "</center>";
        
        
    }


?>

</body>
</html>