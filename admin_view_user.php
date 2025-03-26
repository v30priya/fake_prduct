 
 
<?php
 
 include("dbconnect.php"); 
extract($_POST);

// $manufacturer=$_REQUEST['manufacturer'];
 
  $qry= ("select * from customer_details");
  
		$result = $conn->query($qry);
 
$result1 = array();	 
		
	 	while($row = $result->fetch_assoc())
		  {
		  
 							
 							
array_push($result1,array("id"=>$row['id'],"name"=>$row['name'],"contact"=>$row['contact'],"email"=>$row['email'],"area"=>$row['area'],"address"=>$row['address']));
}
echo json_encode(array("result"=>$result1));

?>
 