
<?php
 
include("dbconnect.php");

extract($_POST);

$name=$_REQUEST['name'];
$cont=$_REQUEST['cont'];
$email=$_REQUEST['email'];
$area=$_REQUEST['area'];
$address=$_REQUEST['address'];
 
$pass=$_REQUEST['pass'];
 
 
 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
 /////////////
 
  $sql = "SELECT id FROM health_inspector_details order by id ASC";
 
 //////////////
 $sid=0;
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) 
  {
       $sid=$row['id'];
  }
    $sid=$sid+1;
    
   $qrys1="insert into health_inspector_details values($sid,'$name','$cont','$email','$area','$address','$pass','0','0')";
  if ($conn->query($qrys1) === TRUE) {
  echo "success";   
 }
 else
{
    
echo "failed";
}
$conn->close();
?>