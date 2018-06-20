<html>
<body>
<link rel='stylesheet' type='text/css' href='stylesheet1.css'/>
<?php

session_start();

$last_id=$_SESSION['last_id'];

/*echo " Last id is $last_id";
foreach($fid as $i)
echo " ".$i;
echo $t_price;*/
//$qty = $_POST["quantity"];
//$pay_meth = $_POST["payment_method"];

$db_server = "localhost";
$db_name = "Restaurant";
$db_user = "root";
$db_pwd = "php2611";

$con = mysqli_connect($db_server,$db_user,$db_pwd,$db_name);

if(!$con)
{
die("Connection Error...".mysqli_connect_error());
}


$sql_query = "select e.emp_name from Employee e,TakenBy tb where e.emp_id = tb.emp_id and tb.order_id = '$last_id' ;";
$result = mysqli_query($con,$sql_query);

if($result)
{
$row = mysqli_fetch_array($result);
}
?>
<div id="orderSummaryHead">Your order will be delivered by <?php echo $row[0];?></div>
<?php

mysqli_close($con);
?>


<button id="basketButton" onClick="location.href='logout.php'" value="placeOrder">Log Out</button>

<div id="default">
            <h1 style="color:#ff3366; text-align:center"><b><i>Thank You! </i></b>Visit Again!!</h1>
        </div>


</body>
</html>

