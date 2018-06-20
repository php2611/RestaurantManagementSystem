<?php

session_start();

$last_id=$_SESSION['last_id'];
echo "id".$last_id;
$db_server = "localhost";
$db_name = "Restaurant";
$db_user = "root";
$db_pwd = "php2611";


$con = mysqli_connect($db_server,$db_user,$db_pwd,$db_name);

if(!$con)
{
die("Connection Error...".mysqli_connect_error());
}
$sql_query = "select cust_id from Places where order_id='$last_id';";
$res=mysqli_query($con,$sql_query);
 if(mysqli_num_rows($res)===0)
{
  $sql_query = "delete from Order1 where order_id='$last_id';";
mysqli_query($con,$sql_query);
//echo"order canceled";
}


mysqli_close($con);
session_unset();
//unset($_SESSSION['email_id']);
session_destroy();
//echo"Logged out";
header('Location:login.html');

?>
