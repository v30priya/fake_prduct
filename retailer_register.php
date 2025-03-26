<?php
include("dbconnect.php");
extract($_POST);

$name=$_REQUEST['name'];
$pass=$_REQUEST['pass'];
$cont=$_REQUEST['cont'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$area=$_REQUEST['area'];
 

$sql = ("select * from retailer_details order by id");
 $sid=0;
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) 
  {
       $sid=$row['id'];
  }
    $sid=$sid+1;
$qrys=("insert into retailer_details values('$sid','$name','$cont','$email','$address','$area','$pass','0','0')");
if ($conn->query($qrys) === TRUE) 
{
echo "success";
}
else
{
echo "failed";
}	
?>