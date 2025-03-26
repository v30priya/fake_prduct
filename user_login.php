<?php
  include("dbconnect.php"); 
  extract($_POST);
  
 $uname=$_REQUEST['uname'];
$pword=$_REQUEST['pword'];

 


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
   $qry="select * from  customer_details where email='$uname' and password='$pword'";
$result = mysqli_query($conn, $qry);
 if (mysqli_num_rows($result)) 
  {
echo "success";
}  
else
{
echo "failed";    
}
  
}
 
$conn->close();
 
?>