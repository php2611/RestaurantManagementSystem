<?php

$cn = $_POST["cust_name"];
$phn = $_POST["phone"];
$eid = $_POST["email_id"];
$pwd = $_POST["password"];

$lmark = $_POST["land_mark"];
$city = $_POST["city"];
$pcode = $_POST["pincode"];

//echo "name:".$cn." ".$phn;

$db_server = "localhost";
$db_name = "Restaurant";
$db_user = "root";
$db_pwd = "php2611";

$con = mysqli_connect($db_server,$db_user,$db_pwd,$db_name);

if(!$con)
{
die("Connection Error...".mysqli_connect_error());
}

$sql_query = "select email_id from Customer where email_id = '$eid';";
$result = mysqli_query($con,$sql_query);
if(mysqli_num_rows($result)>0)
{
 echo "
  <script>alert('E-mail ID already Exists.'); window.location.href='login.html';</script>'";
}
else
{
$sql_query = "insert into Customer(cust_name,phone,email_id,password) values('$cn','$phn','$eid','$pwd');";
if(mysqli_query($con,$sql_query))
{
  echo "Yeah!";
}
else
{
  echo "Error:".mysqli_error($con);
}
$sql_query = "select cust_id,email_id from Customer where email_id = '$eid';";
$res = mysqli_query($con,$sql_query);
if($res)
{
if($row=mysqli_fetch_array($res))
{
$cid = $row[0];
$sql_query = "insert into Address values($cid,'$lmark','$city','$pcode');";

if(mysqli_query($con,$sql_query))
{
  echo "
  <script>alert('Sign up Successful!! Please Log in to continue.'); window.location.href='login.html';</script>'";
//header('Location:login.html');
}
else
{
  echo "Error:".mysqli_error($con);
}

}
}
}
mysqli_close($con);

?>
