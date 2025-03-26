<?php
 include("dbconnect.php");
 include("qrcode.php"); 
extract($_POST);
$qry=mysql_query("select * from register");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="680" border="0">
    <tr>
      <td>&nbsp;</td>
      <td><div align="center">QR CODE VIWE </div></td>
      <td>&nbsp;</td>
    </tr>
	<?php
	while($row=mysql_fetch_array($qry))
	{
	?>
    <tr>
      <td>&nbsp;</td>
      <td rowspan="8" valign="top"><p>Name:
        <label>
        <input type="text" name="textfield" value="<?php echo $row['name']; ?>" />
        </label>
      </p>
      <p>Address:
        <input type="text" name="textfield2" value="<?php echo $row['address']; ?>" />
      </p>
      <p>Phone number:
        <input type="text" name="textfield3" value="<?php echo $row['pnumber']; ?>" />
      </p>
      <p>QR image:  <?php echo "<img src='uploade/".$row['image']."'width=200 height=200>";?></p></td>
      <td>&nbsp;</td>
    </tr>
	<?php
	}
	?>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
