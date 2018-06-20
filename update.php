<?php

session_start();

$fid = $_SESSION["fdId"];
$last_id=$_SESSION['last_id'];
$cancel = $_POST['cancel'];

//echo " Last id is $last_id";
/*foreach($cancel as $i)
echo " ".$i;*/
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
foreach($cancel as $i)
{
$sql_query = " DELETE FROM Order1 where order_id = '$last_id' and food_id = '$i';";
if(mysqli_query($con,$sql_query))
{
  header('Location:display_order.php');
}
else
{
  echo "Error:".mysqli_error($con);
}

}

}
mysqli_close($con);
?>
