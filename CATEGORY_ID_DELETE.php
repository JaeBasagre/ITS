<?php
require("dbconnect.php");

//$search = $_POST['textsearch'];

$search = $_POST['textsearch'];

$sql = "select * from bbs_tbl_category where bbs_cat_id = '$search'";
echo "$sql";
$result = mysql_query($sql,$conn) or die(mysql_error());

echo "<form action='CATEGORY_DELETE_PROCESS.php'
			method='POST'>";

while($row=mysql_fetch_array($result)) {
	$db_id 	 = 		$row['db_cat_id'];
	$bbs_cat_id = 	$row['bbs_cat_id'];
	$cat_name 	 =		$row['cat_name'];
	$cat_desc  =  	$row['cat_desc'];
	
	echo "<table cellspacing='5'
	cellpadding='2' align='center'>";
	
	echo "<tr>"; 


echo "<th>Category ID</th>";
echo "<th>Name</th>";
echo "<th>Description</th>";
echo "<tr>";
	
	//echo "<tr>";
	echo "<input
		type='hidden'
		name='txthidden'
		value='$db_id'/>";
	
	
	echo "<td><input
		type='text'
		name='itemid'
		value='$bbs_cat_id'
		readonly>
		</input></td>
		<br>";
	
	echo "<td><input
		type='text'
		name='itemname'
		value='$cat_name'
		readonly></td>
		</input>
		<br>";
	

	
	echo "<td><input
		type='text'
		name='itemdesc'
		value='$cat_desc'
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