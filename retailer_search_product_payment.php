<?php
extract($_POST);
include("dbconnect.php");
$id=$_REQUEST['id'];
$retailer=$_REQUEST['retailer'];
//$pass=$_REQUEST['pass'];
//$time=$_REQUEST['time'];
$qrys1=("update product_details set status='1',report='$retailer' where id='$id'");
if ($conn->query($qrys1) === TRUE) {
echo "success";
}
else
{
echo "failed";
} 
?>
 