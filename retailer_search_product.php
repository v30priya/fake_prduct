 <?php
include("dbconnect.php");
extract($_POST);
$product=$_REQUEST['product'];
 

 $qry=("select * from product_details where product_name='$product' and status='0'");
$rt=$qry;
$result = array();
$result1 = $conn->query($qry);
 
	 
		
	 	while($res = $result1->fetch_assoc())
		  {
		  
array_push($result,array("id"=>$res['id'],"manufacturer"=>$res['manufacturer'],"product_name"=>$res['product_name'],"description"=>$res['description'],"quantity"=>$res['quantity'],"price"=>$res['price'],"iso_status"=>$res['iso_status'],"status"=>$res['status'],"report"=>$res['report']));
}
echo json_encode(array("result"=>$result));
 
?>
 
 