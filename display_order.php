<?php

session_start();

$db_server = "localhost";
$db_name = "Restaurant";
$db_user = "root";
$db_pwd = "php2611";

$con = mysqli_connect($db_server,$db_user,$db_pwd,$db_name);

if(!$con)
{
die("Connection Error...".mysqli_connect_error());
}

$last_id= $_SESSION['last_id'];
echo $last_id;
$sql_query = "select f.food_name,fi.price,f.food_id,o.quantity from Food f, Food_Info fi,Order1 o where f.food_id = o.food_id and o.order_id = '$last_id' and f.food_id = fi.food_id;";
$res = mysqli_query($con,$sql_query);
$fdId = [];
$fdName = [];
$fdPrice = [];
$fdQty = [];
if($res)
{
while($row=mysqli_fetch_array($res))
{
//echo "<br>".$row[0]."           ".$row[1];

$fdName[] = $row[0];
$fdPrice[] = $row[1];
$fdId[] = $row[2];
$fdQty[] = $row[3];

}
$_SESSION["fdName"] = $fdName;
$_SESSION["fdPrice"] = $fdPrice;
$_SESSION["fdId"] = $fdId;
$_SESSION["fdQty"] = $fdQty;
/*fdName1 = $_SESSION["fdName"];
$fdPrice1 = $_SESSION["fdPrice"];
$fdId = $_SESSION["fdId"];
$fdQty = $_SESSION["fdQty"];

$cnt = sizeof($fdName1);
echo $cnt;
for($x = 0; $x < $cnt; $x++) {
    echo $fdId[$x]."  ".$fdName1[$x]."  ".$fdPrice1[$x]." ".$fdQty[$x];
    echo "<br>";
}*/
}
header('Location:carthtml.php');
mysqli_close($con);

?>

