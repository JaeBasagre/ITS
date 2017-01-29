<?php
require("dbconnect.php");

//$search = $_POST['textsearch'];

$search = $_POST['textsearch'];

$sql = "select * from bbs_tbl_product where bbs_prod_id = '$search'";
echo "$sql";
$result = mysql_query($sql,$conn) or die(mysql_error());

echo "<form action='DELETE_ITEM_PROCESS.php'
			method='POST'>";

while($row=mysql_fetch_array($result)) {
	$item_id 	 = 		$row['db_prod_id'];
	$bbs_item_id = 	$row['bbs_prod_id'];
	$item_name 	 =		$row['prod_name'];
	$item_image  =  	$row['item_image'];
	$item_description =	$row['description'];
	$price			 =	$row['price'];
    $category =         $row['Category'];
	
	echo "<table cellspacing='5'
	cellpadding='2' align='center'>";
	
	echo "<tr>"; 

echo "<th>BBS Item ID</th>";
echo "<th>Item Name</th>";
echo "<th>Item Image</th>";
echo "<th>Item Description</th>";
echo "<th>Price</th>";
echo "<th>Category</th>";
echo "<tr>";
	
	//echo "<tr>";
	echo "<input
		type='hidden'
		name='txthidden'
		value='$item_id'/>";
	
	
	echo "<td><input
		type='text'
		name='itemid'
		value='$bbs_item_id'
		readonly>
		</input></td>
		<br>";
	
	echo "<td><input
		type='text'
		name='itemname'
		value='$item_name'
		readonly></td>
		</input>
		<br>";
	
	echo "<td><img src='$item_image' height='100' width='100 readonly'></td>
		<br>";
	
	echo "<td><input
		type='text'
		name='itemdesc'
		value='$item_description'
		readonly></td>
		</input>
		<br>";
	
	echo "<td><input
		type='text'
		name='itemprice'
		value='$price'
		readonly></td>
		</input>
		<br>";
    
    	echo "<td><input
		type='text'
		name='itemprice'
		value='$category'
		readonly></td>
		</input>
		<br>";
	
	echo "<td><input
		type='submit'
		value='delete'
		</input></td>
		<br>";
}

?>