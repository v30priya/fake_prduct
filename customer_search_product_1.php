 
 
<?php
 
 include("dbconnect.php"); 
extract($_POST);

 $id=$_REQUEST['id'];
 
 $qry= ("select * from product_details where id='$id'");
  
		$result = $conn->query($qry);
 
$result1 = array();	 
		
	 	while($row = $result->fetch_assoc())
		  {
 							
array_push($result1,array("id"=>$row['id'],"manufacturer"=>$row['manufacturer'],"product_name"=>$row['product_name'],"description"=>$row['description'],"quantity"=>$row['quantity'],"price"=>$row['price'],"iso_status"=>$row['iso_status'],"status"=>$row['status'],"report"=>$row['report']));
}
echo json_encode(array("result"=>$result1));

?>
 