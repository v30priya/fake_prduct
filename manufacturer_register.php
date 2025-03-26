
<?php
 
include("dbconnect.php");
 include_once('UniqueValues.php');
extract($_POST);

$company_name=strtolower($_REQUEST['company_name']);
$manufacturer_name=strtolower($_REQUEST['manufacturer_name']);
$company_description=$_REQUEST['company_description'];
$contact=$_REQUEST['contact'];
$email=$_REQUEST['email'];
 
$area=$_REQUEST['area'];
$address=$_REQUEST['address'];
$password=$_REQUEST['password'];
$iosid=strtolower($_REQUEST['iosid']);
 
 $sts=0;
 $CSVvar = fopen("dataset.csv", "r");
 
  if ($CSVvar !== FALSE) 
{
    while (! feof($CSVvar)) 
	{
	 $data = fgetcsv($CSVvar, 1000, ",");
	  if (! empty($data)) 
	  {
	   $iso_id1= strtolower($data[0]); 
	   $company_name1= strtolower($data[0]); 
	   $description1= $data[0]; 
	   if($iosid==$iso_id1)
	   {
	   $sts=1;
	   }
	  
	  }
	}
}
 
 
 /////////////
 
  $sql = "SELECT id FROM manufacturer_details order by id ASC";
 
 //////////////
 $sid=0;
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) 
  {
       $sid=$row['id'];
  }
    $sid=$sid+1;
    
   $qrys1="insert into manufacturer_details values($sid,'$company_name','$manufacturer_name','$company_description','$contact','$email','$area','$address','$password','$iosid','$sts','0','0')";
  if ($conn->query($qrys1) === TRUE) {
  echo "success";   
 }
 else
{
    
echo "failed";
}
$conn->close();
?>