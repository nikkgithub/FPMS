<!DOCTYPE html>
<html>

<head>
<?php include("admin.html"); ?>
	<link rel="stylesheet" type="text/css" href="customer.css">
    <title>Order Details</title>
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
<form action="orderdetails.php" method="POST">
    <div class="container">
        
       <center>     
        <h1>Order Details</h1>
<br>
        <label for="cid"><b>Customer Id</b></label><br>
        <input id="cid" type="text" placeholder="Enter Id" name="cid" required><br>

        <label for="ordno"><b>Order No.</b></label><br>
            <input type="text" placeholder="Enter Order number" name="ordno" required><br>

            <label for="pnme"><b>Product Name</b></label><br>
            <input type="text" placeholder="Enter product name" name="pname" required><br>

            <label for="quan"><b>Quantity </b></label><br>
            <input type="number" placeholder="Quantity" name="quan" min="1" max="5000" required><br><br>

            <label for="amnt"><b>Total Amount</b></label><br>
            <input type="float" placeholder="Enter total amount" name="amnt" required><br><br>

        	<label for="date"><b>Order Date</b></label><br>
        	<input id="date" type="date" name="ordate" required><br><br>

        <div id="lg">
           <!--<button class="lg1" type="submit" class="registerbtn">Submit</button>-->
		   <input type="submit" name="submit" class="button">
        </div>
</center>
</form>

</body>

</html>

<?php 
$con=mysqli_connect('localhost','root','','food');
if($con==false)
{
echo "connection not done";
}

if(isset($_POST['submit']))
{
	$cid=$_POST['cid'];
	$ordno=$_POST['ordno'];
	$pname=$_POST['pname'];
	$quan=$_POST['quan'];
    $amnt=$_POST['amnt'];
	$ordate=$_POST['ordate'];
	
	$qry="INSERT INTO `order` (`cid`, `ordno`, `pname`, `quan`, `amnt`, `ordate`) VALUES (NULL, '$ordno', '$pname', '$quan', '$amnt', '$ordate')";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		
      	header('location:bill.php');
        
    }
    else{
        echo "Error";
    }
    
}
?>
    





<!--
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		?>
		<script>
		alert("Your Order is in Process");

		</script>
		<php 
			header('location:admin.php');
	}
	else
	{
		?>
		<script>
		alert("Data Not Inserted");
		</script>
		<php 
	}

}
?>
-->
