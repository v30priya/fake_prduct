<?php
include("dbconnect.php");
extract($_POST);
 
$manufacturer=$_REQUEST['manufacturer'];
$product_name=$_REQUEST['product_name'];
$description=$_REQUEST['description'];
$quantity=$_REQUEST['quantity'];
$price=$_REQUEST['price'];
 
$sts=0;
 $sql = "SELECT iso_status FROM manufacturer_details where company_name='$manufacturer'";

 $sid=0;
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) 
  {
       $iso_status=$row['iso_status'];
  }
    

 

$sql = "SELECT id FROM product_details order by id ASC";


  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) 
  {
       $sid=$row['id'];
  }
    $sid=$sid+1;

  $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';

    include "qrlib.php";    
  
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    $fn=$sid.''.'.png';
    $filename = $PNG_TEMP_DIR.''.$sid.''.'.png';
  
    $errorCorrectionLevel = 'L';
   
        $errorCorrectionLevel ="M";    

    $matrixPointSize = 4;
   
      


   // if (isset($_REQUEST['btn'])) { 
    
     
       // if (trim($_REQUEST['data']) == '')
          //  die('data cannot be empty! <a href="?">back</a>');
			
             //$name='Name : '.$_REQUEST['data'];
		 ///$cont='Contact : '.$_REQUEST['cont'];
            ///$email='Email :'.$_REQUEST['email'];
// $total=$name;
       
      // QRcode::png($total, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
   // } 
	//else {    
    
        //default data
    //echo 'You can provide data in GET parameter: <a href="?data=like_that">like that</a><hr/>';    
       QRcode::png($sid, $filename, $errorCorrectionLevel, $matrixPointSize, 2);  


$qrys=("insert into product_details values('$sid','$manufacturer','$product_name','$description','$quantity','$price','$iso_status','0','0')");
if ($conn->query($qrys) === TRUE) 
{
echo "success";
}
else
{
echo "failed";
}	
?>