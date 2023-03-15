<!DOCTYPE html>
<html>

<head>
<?php include("admin.html"); ?>
	<link rel="stylesheet" type="text/css" href="customer.css">
    <title>Raw Material</title>
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
        <form action="rawmaterial.php" method="POST">
       <center>     
        <h1>Raw Material Purchased</h1>

<br>
        <label for="mname"><b>Product Name</b></label><br>
        <input type="text" placeholder="Enter Id/name" name="mname" required><br>

        <label for="quan"><b>Quantity </b></label><br>
        <input type="number" placeholder="Quantity" name="quan" min="1" max="5000" required><br><br>

        <label for="cst"><b>Cost per Unit</b></label><br>
        <input type="float" placeholder="Enter the cost" name="cst" required><br><br>

       <!-- <label for="serv"><b>Service tax</b></label><br>
        <input type="float" placeholder="Enter service tax" name="serv" required><br><br>

        <label for="tran"><b>Transportation charge</b></label><br>
        <input type="float" placeholder="Enter transp.charge" name="tran" required><br><br>
-->
        <label for="amnt"><b>Total Amount</b></label><br>
        <input type="float" placeholder="Enter total amount" name="amnt" required><br><br>

        <label for="date"><b>Purchased Date</b></label><br>
        <input id="date" type="date" name="pdate" required><br><br>


        <div id="lg">
            <!--<button class="lg1" type="submit" class="registerbtn">Submit</button>-->
		   <input type="submit" name="submit" class="button">
        </div>
</center>
</form>
<hr>
</body>

</html>

<?php 
$con=mysqli_connect('localhost','root','','food');
if($con==false)
echo "connection not done";
if(isset($_POST['submit']))
{
	
	$mname=$_POST['mname'];
	$quan=$_POST['quan'];
	$cst=$_POST['cst'];
	$amnt=$_POST['amnt'];
    $pdate=$_POST['pdate'];
   
	$qry="INSERT INTO `rawmaterialdetails` (`mname`, `quan`, `cst`, `amnt`, `pdate`) VALUES (`$mname`, `$quan`, `$cst`, `$amnt`, `$pdate`)";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		?>
		<script>
		alert("Your Order is in Process");
		</script>
		<?php 
	}
	else
	{
		?>
		<script>
		alert("Data Not Inserted");
		</script>
		<?php 
	}
	header('location:admin.php');
}
?>

