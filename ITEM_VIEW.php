<?php


require("dbconnect.php");

$sql = "select * from bbs_tbl_product";

$result = mysql_query($sql, $conn) or die(mysql_error());

echo"<link rel='stylesheet' href='MAINTENANCE.css'>";
echo "<table cellspacing='5'
	cellpadding='2' align='center'>";
echo "<tr>";
echo "<th>Item ID</th>";
echo "<th>BBS Item ID</th>";
echo "<th>Item Name</th>";
echo "<th>Item Image</th>";
echo "<th>Item Description</th>";
echo "<th>Price</th>";
echo "<th>Category</th>";
echo "<tr>";

while($row=mysql_fetch_array($result)) {
    $Item_ID =$row['db_prod_id'];
    $BBS_Item =$row['bbs_prod_id'];
    $Item_Name =$row['prod_name'];
    $Item_Image =$row['item_image'];
	$Item_Description =$row['description'];
	$Price =$row['price'];
    $Category = $row['Category'];
	
	echo "<tr>";
	echo "<td id='txtid'><input type='text' name='txtID' value='$Item_ID' readonly></td>";
	echo "<td><input type='text' name='txtName' value='$BBS_Item' readonly></td>";
	echo "<td><input type='text' name='txtName' value='$Item_Name' readonly></td>";
	//echo "<td><img src='.$Item_Image.' height='60' width='60'></td>";
	echo "<td><img src='$Item_Image' height='100' width='100'></td>";
	echo"<td><input type='text' name='txtName' value='$Item_Description' readonly></td>";
	echo "<td><input type='text' name='txtName' value='$Price' readonly></td>";
    echo "<td><input type='text' name='txtName' value='$Category' readonly></td>";
//	echo "<tr>";
  //  echo "<td id='txtid'><input type='text' name='txtID' value='$id' disabled></td>";
//    echo "<td><input type='text' name='txtName' value='$name' disabled></td>";
  //   echo "<td><input type='text' name='txtPrice' value='$price' disabled></td>";
    
}


    ?>