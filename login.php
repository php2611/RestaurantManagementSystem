<?php

$eid = $_POST["email_id"];
$pwd = $_POST["password"];

session_start();

$db_server = "localhost";
$db_name = "Restaurant";
$db_user = "root";
$db_pwd = "php2611";

$con = mysqli_connect($db_server,$db_user,$db_pwd,$db_name);

if(!$con)
{
echo "Connection Error...".mysqli_connect_error();
}
else
{
$sql_query = "select email_id,password from Customer where email_id = '$eid' and password='$pwd';";
$result = mysqli_query($con,$sql_query);
if(mysqli_num_rows($result)===1)
{
$_SESSION['email_id']=$eid; 
$flag=0;
$_SESSION['flag']=$flag;
//header('Location:index1.php');
echo "<script>alert('Login Successful!!');window.location.href='index1.php';</script>";
}
else
{
?>

<script>  alert("Invalid Credentials"); window.location.href='login.html';</script>

<?php
//header('Location:login.html');
}
}
mysqli_close($con);



?>
