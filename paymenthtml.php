<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<link rel='stylesheet' type='text/css' href='stylesheet3.css'/>
	<style type="text/css">
		body{
			background-color: #ffe6cc;
		}
	</style>

</head>
<body >
<div id="method_head">
<h2><b><i>Select payment method</i></b></div></h2>
</div>
<form action="payment.php" method="post">
<div id="method_body">
<div>Amount to pay=Rs.<?php session_start(); echo $_SESSION["t_price"];?></div>
<div>
<input type="radio" name="payment_method" id="Online" value="Online">Net Banking
</div>
<br>
<div>
<input type="radio" name="payment_method" id="debitCard" value="debitCard">Debit card
</div>
<br>
<div>
<input type="radio" name="payment_method" id="creditCard" value="creditCard">Credit card
</div>
<br>
<div>
<input type="radio" name="payment_method" id="cashOnDelivery" value="cashOnDelivery">Cash on Delivery
</div>
<div>
<input type="submit" value="Pay" >
</div>
</div>
</form>
</body>
</html>
