<?php

$query="select * from cusdetails";
$result = mysql_query($query);
?>



<!DOCTYPE html>
<html>

<head>
<?php include("admin.html"); ?>
	<link rel="stylesheet" type="text/css" href="customer.css">
    <title>Reports</title>
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

<table align="center" border="1px" style="width:600px; line-height:40px;">
		<tr>
			<th colspan="10"><h2>Customer Reports</h2></th>
		</tr>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Number</th>
			<th>Email</th>
			<th>Address</th>
			<th>Delivery Address</th>
			<th>Order Date</th>
		</tr>

<?php
while($rows=mysql_fetch_assoc($result))
{
	?>
	<tr>
		<td><?php echo $rows.['cid'] ?></td>
		<td><?php echo $rows.['cname'] ?></td>
		<td><?php echo $rows.['cno'] ?></td>
		<td><?php echo $rows.['cemail'] ?></td>
		<td><?php echo $rows.['cadd'] ?></td>
		<td><?php echo $rows.['cdeladd'] ?></td>
		<td><?php echo $rows.['ordate'] ?></td>
	</tr>

	<?php
	
	}
	?>


</table>
</body>


</html>

