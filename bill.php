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
    
<body align="center">
<form action="final.php" method="POST" class="container">
        <label style="width:40%;"><b>Customer Id</b></label><br>
        <input id="cid" type="text" placeholder="Enter Id" name="cid" required><br>
        <div id="lg">
		   <input type="submit" name="submit" class="button">
        </div>

</form>