<?php
//include 'display_order.php'
session_start();

$fid = $_POST["food_id"];
$flag=$_SESSION['flag'];
//echo "hello";
//echo $flag;

$quantity = $_POST["quantity"];
/*$cnt = sizeof($quantity);
echo $cnt;
foreach($quantity as $i)
echo " ".$i;*/

$db_server = "localhost";
$db_name = "Restaurant";
$db_user = "root";
$db_pwd = "php2611";


$con = mysqli_connect($db_server,$db_user,$db_pwd,$db_name);

if(!$con)
{
die("Connection Error...".mysqli_connect_error());
}
//else
//{
echo "hello";

if($flag===0)
{
$idx = $fid[0];
$idx = $idx-1;
//echo $idx;
$sql_query = "insert into Order1(food_id,quantity) values('$fid[0]','$quantity[$idx]');";
mysqli_query($con,$sql_query);
$flag=1;
$_SESSION['flag']=$flag;
$last_id = mysqli_insert_id($con);
$_SESSION['last_id']=$last_id;
$last_id=$_SESSION['last_id'];
//echo " Last id is $last_id";
//$cnt = array_count_values($fid);
//echo "count".$cnt
$cnt = sizeof($fid);
//echo "count".$cnt;
for($j=1; $j<$cnt; $j++)    //$_POST['food_id'] as $v and $_POST['quantity'] as $q)
{
//echo $j;
$idx = $fid[$j];
$idx = $idx-1;
//echo $idx;
$sql_query = "insert into Order1(order_id,food_id,quantity) values('$last_id','$fid[$j]','$quantity[$idx]');";
mysqli_query($con,$sql_query);
}
}

else
{
$last_id=$_SESSION['last_id'];
echo " Last id is $last_id";
//$cnt = array_count_values($fid);
//echo "count".$cnt
$cnt = sizeof($fid);
//echo "count".$cnt;
for($j=0; $j<=$cnt; $j++)    //$_POST['food_id'] as $v and $_POST['quantity'] as $q)
{
//echo $j;
$idx = $fid[$j];
$idx = $idx-1;
//echo $idx;
$sql_query = "insert into Order1(order_id,food_id,quantity) values('$last_id','$fid[$j]','$quantity[$idx]');";
mysqli_query($con,$sql_query);
}
//echo $_SESSION['flag'];
}

//}
mysqli_close($con);

header('Location:display_order.php');
?>
