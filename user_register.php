<?php
include("dbconnect.php");
extract($_POST);
$name=$_REQUEST['name'];
$cont=$_REQUEST['cont'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$area=$_REQUEST['area'];
$pass=$_REQUEST['pass'];
 
 
$sql = "select max(id) from customer_details";
$sid=0;
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) 
  {
       $sid=$row['id'];
  }
    $sid=$sid+1;
$qrys1=("insert into customer_details values('$sid','$name','$cont','$email','$area','$address','$pass','0','0')");
if ($conn->query($qrys1) === TRUE)
{
echo "success";
}
else
{
echo "failed";
}	
?>