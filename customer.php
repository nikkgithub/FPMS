<!DOCTYPE html>
<html>

<head>
<?php include("admin.html"); ?>
	<link rel="stylesheet" type="text/css" href="customer.css">
    <title>Customer</title>
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

    <div class="container">
        <form action="customer.php" method="POST">
       <center>     
        <h1>Customer Details</h1>

        <label for="cid"><b>Customer Id</b></label><br>
        <input id="cid" type="text" placeholder="Enter Id" name="cid" required><br>

        <label for="cname"><b> Name</b></label><br>
        <input id="cname" type="text" placeholder="Enter Full Name" name="cname" required><br>

        <label for="phno"><b>Phone No.</b></label><br>
        <input id="phno" type="text" placeholder="Phone" name="phno" required><br>

        <label for="email"><b>Email</b></label><br>
        <input id="email" type="text" placeholder="Enter email" name="email" required><br>

        <label for="cadd"><b>Address</b></label><br>
        <input id="cadd" type="text" placeholder="Enter address" name="cadd" required><br>

        <label for="dadd"><b>Delievery Address</b></label><br>
        <input id="dadd" type="text" placeholder="Enter Delievery Address" name="cdeladd" required><br>

        <label for="date"><b>Order Date</b></label><br>
        <input id="date" type="date" name="ordate" required><br><br>

        <div id="lg">
            <!--<button class="lg1" type="submit" class="registerbtn">Submit</button>-->
            <input type="submit" name="submit" class="button">
		</div>
	</div>
	</center>
	</form>
</body>
</html>

<?php 
$con=mysqli_connect('localhost','root','','food');
if($con==false)
echo "connection not done";

if(isset($_POST['submit']))
{
	$cname=$_POST['cname'];
	$cno=$_POST['phno'];
	$cemail=$_POST['email'];
    $cadd=$_POST['cadd'];
    $cdeladd=$_POST['cdeladd'];
    $ordate=$_POST['ordate'];
	$qry="INSERT INTO `cusdetails` (`cid`, `cname`, `cno`, `cemail`, `cadd`, `cdeladd`, `ordate`) VALUES ('NULL', '$cname', '$cno', '$cemail', '$cadd', '$cdeladd', '$ordate');";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		?>
		<script>
		alert("Your Order is in Process");
		
		</script>
		<?php 
		header('location:orderdetails.php');
	}
	else
	{
		?>
		<script>
		alert("Data Not Inserted");
		</script>
		<?php 
	}
	
}
?>