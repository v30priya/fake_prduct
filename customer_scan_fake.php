 
 
<?php
 
 include("dbconnect.php"); 
extract($_POST);

 $name=$_REQUEST['name'];
 $pid=$_REQUEST['pid'];
 $quantity=$_REQUEST['quantity'];

 $rdate=date("y-m-d");
 $qry= ("select * from product_details where id='$pid'");
  
		$result = $conn->query($qry);
 
	 	while($row = $result->fetch_assoc())
		  {
 							
			$id=$row['id'];
			$manufacturer=$row['manufacturer'];
			$reseller=$row['report'];
			$product_name=$row['product_name'];
			$description=$row['description'];
			$quantity=$row['quantity'];
			$price=$row['price'];
			$iso_status=$row['iso_status'];
		//	$qq="update  product_details set status='1',report='$name' where id='$id'";
		//	if ($conn->query($qq) === TRUE){}
 }
$sql = "select * from purchase_details order by id";
$sid=0;
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) 
  { 
       $sid=$row['id'];
  }
    $sid=$sid+1;
$qrys1=("insert into purchase_details values('$sid','$name','$pid','$manufacturer','$product_name','$description','-','$price','$iso_status','$rdate','$reseller','0','0')");
if ($conn->query($qrys1) === TRUE)
{
echo "success";
}
else
{
echo "failed";
}
$fname="server/".$rdate."_".$sid.".txt";
$myfile = fopen($fname, "w") or die("Unable to open file!");
$txt = $product_name."-".$manufacturer."-".$reseller."-".$reseller."-".$rdate;
fwrite($myfile, $txt);
fclose($myfile);	
?>
 