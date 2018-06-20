

<?php

session_start();

$pay_meth = $_POST["payment_method"];
//echo $pay_meth;

$t_price = $_SESSION["t_price"];

$db_server = "localhost";
$db_name = "Restaurant";
$db_user = "root";
$db_pwd = "php2611";

$con = mysqli_connect($db_server,$db_user,$db_pwd,$db_name);

if(!$con)
{
die("Connection Error...".mysqli_connect_error());
}
$last_id=$_SESSION['last_id'];
//echo $last_id;
$sql_query = "insert into PaymentMethod values($last_id,'$pay_meth',$t_price);";
if(mysqli_query($con,$sql_query))
{
?>
<script>
  alert("Payment Done Successfully!!");
</script>
<?php
}
else
{
  echo "Error:".mysqli_error($con);
}

//}
mysqli_close($con);
header('Location:logouthtml.php');
?>

