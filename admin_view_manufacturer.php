 
 
<?php
 
 include("dbconnect.php"); 
extract($_POST);

// $manufacturer=$_REQUEST['manufacturer'];
 
  $qry= ("select * from manufacturer_details");
  
		$result = $conn->query($qry);
 
$result1 = array();	 
		
	 	while($row = $result->fetch_assoc())
		  {
		  
 							
 							
array_push($result1,array("id"=>$row['id'],"company_name"=>$row['company_name'],"manufacturer_name"=>$row['manufacturer_name'],"company_description"=>$row['company_description'],"contact"=>$row['contact'],"email"=>$row['email'],"area"=>$row['area'],"address"=>$row['address'],"iosid"=>$row['iosid']));
}
echo json_encode(array("result"=>$result1));

?>
 