<?php

session_start();

$fid = $_SESSION["fdId"];
$last_id=$_SESSION['last_id'];
$t_price = $_SESSION["t_price"];
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
else
{
$eid = $_SESSION['email_id'];

//places
$sql_query = "select cust_id from Customer where email_id = '$eid' ;";
$result = mysqli_query($con,$sql_query);

if($result)
{
$row = mysqli_fetch_array($result);
}
$sql_query = "insert into Places values($last_id,$row[0]);";
mysqli_query($con,$sql_query);


//taken by
$sql_query = "select pincode from Address where cust_id = '$row[0]';";
$result2 = mysqli_query($con,$sql_query);

if($result2)
{
$row2 = mysqli_fetch_array($result2);
}
//echo $row2[0];
$sql_query = "select emp_id from Employee where pin_assigned = '$row2[0]' ;";
$result3 = mysqli_query($con,$sql_query);

if($result3)
{
$row3 = mysqli_fetch_array($result3);
}
//echo $row3[0];

$sql_query = "insert into TakenBy values('$last_id','$row3[0]');";
mysqli_query($con,$sql_query);
/*
//payment method
$sql_query = "insert into PaymentMethod values('$last_id','$pay_meth','$t_price');";
mysqli_query($con,$sql_query);*/
}
header('Location:paymenthtml.php');
mysqli_close($con);
?>
