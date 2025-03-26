 
 
<?php
 
 include("dbconnect.php"); 
extract($_POST);

 $product=$_REQUEST['product'];
 
 $qry= ("select * from product_details where product_name='$product' or manufacturer='$product'");
  
		$result = $conn->query($qry);
 
$result1 = array();	 
		
	 	while($row = $result->fetch_assoc())
		  {
 							
array_push($result1,array("id"=>$row['id'],"name"=>$row['name'],"pid"=>$row['pid'],"manufacturer"=>$row['manufacturer'],"product_name"=>$row['product_name'],"description"=>$row['description'],"quantity"=>$row['quantity'],"price"=>$row['price'],"iso_status"=>$row['iso_status'],"rdate"=>$row['rdate'],"reseller"=>$row['report']));
}
echo json_encode(array("result"=>$result1));

?>
 