 
 
<?php
 
 include("dbconnect.php"); 
extract($_POST);

// $manufacturer=$_REQUEST['manufacturer'];
 
  $qry= ("select * from purchase_details where iso_status='0'  and quantity IN('-')");
  
		$result = $conn->query($qry);
 
$result1 = array();	 
		
	 	while($row = $result->fetch_assoc())
		  {
		  
 							
 							
array_push($result1,array("id"=>$row['id'],"manufacturer"=>$row['manufacturer'],"name"=>$row['name'],"product_name"=>$row['product_name'],"description"=>$row['description'],"quantity"=>$row['quantity'],"price"=>$row['price'],"iso_status"=>$row['iso_status'],"status"=>$row['status'],"reseller"=>$row['reseller'],"rdate"=>$row['rdate']));
}
echo json_encode(array("result"=>$result1));

?>
 