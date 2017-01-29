<?php


require("dbconnect.php");

$sql = "select * from bbs_tbl_category";
$result = mysql_query($sql, $conn) or die(mysql_error());

echo "<table cellspacing='5'
	cellpadding='2' align='center'>";
echo "<tr>";
echo "<th>Number</th>";
echo "<th>Category ID</th>";
echo "<th>Name</th>";
echo "<th>Description</th>";
echo "<tr>";

while($row=mysql_fetch_array($result)) {
    $ID =$row['db_cat_id'];
    $bbscat_id =$row['bbs_cat_id'];
    $cat_name =$row['cat_name'];
    $cat_desc =$row['cat_desc'];

	echo "<tr>";
	echo "<td id='txtid'><input type='text' name='txtID' value='$ID' readonly></td>";
	echo "<td><input type='text' name='txtName' value='$bbscat_id' readonly></td>";
	echo "<td><input type='text' name='txtName' value='$cat_name' readonly></td>";

	echo"<td><input type='text' name='txtName' value='$cat_desc' readonly></td>";
	
}




?>