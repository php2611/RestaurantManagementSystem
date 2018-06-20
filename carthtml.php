<!DOCTYPE html>
<html>
<head>

	<title>FoodieSwift</title>
	<link rel='stylesheet' type='text/css' href='stylesheet1.css'/>


<div id="order_summary" class="order" align="right">
  <div id="orderSummaryHead" class="order" width="100%">
    <font size="6">Order Summary</font>
  </div>
<form action="update.php" method="post">
  <div id="orderContent">
    <h3><div class="orderHeader3" >Name</div><div class="orderHeader4">Price</div><div class="orderHeader4">Quantity</div><div class="orderHeader4">Total Price</div>
<div class="orderHeader4"><input type="submit" value=" Cancel   "></div></h3> 

	<?php

session_start();

$fdName1 = $_SESSION["fdName"];
$fdPrice1 = $_SESSION["fdPrice"];
$fdId = $_SESSION["fdId"];
$fdQty1 = $_SESSION["fdQty"];

$cnt = sizeof($fdName1);
//echo $cnt;
for($x = 0; $x < $cnt; $x++) {
   // echo $fdName1[$x]."    ".$fdPrice1[$x];

?>
<div class="orderHeader3"><?php echo  $fdName1[$x]?></div>
<div class="orderHeader4"><?php echo  $fdPrice1[$x]?></div>
<div class="orderHeader4"><?php echo  $fdQty1[$x]?></div>
<div class="orderHeader4"><?php echo  ($fdQty1[$x]*$fdPrice1[$x])?></div>
<div class="orderHeader4"><input type="checkbox" name="cancel[]" value="<?php echo $fdId[$x];?>"><!--<input type="submit" value="&#10060">--><br/></div>
<?php
    echo "<br>";
}
$t_price = 0;
$cnt = sizeof($fdPrice1);
for($i=0 ; $i<$cnt; $i++)
{
$t_price = $t_price + ($fdPrice1[$i] * $fdQty1[$i]);
}
$_SESSION["t_price"]=$t_price;
?>

  </div>
</form>
<div class="orderHeader3" >Total= Rs.<?php echo $t_price; ?></div>

  <button id="orderButton" onClick="location.href='order.php'" value="placeOrder">Place Order</button>

<button id="orderButton" onClick="location.href='index1.php'" value="Menu">Go to Menu</button>

</div>


</body>
</html>
