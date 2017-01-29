<?php
require("dbconnect.php");

//$search = $_POST['textsearch'];

$search = $_POST['textsearch'];

$sql = "select * from bbs_tbl_position where bbs_pos_id = '$search'";

$result = mysql_query($sql, $conn) or die(mysql_error());

echo "<form action='POSITION_DELETE_PROCESS.php'
			method='POST'>";



echo "<table cellspacing='5'
	cellpadding='2' align='center'>";
echo "<tr>";
echo "<th>Number</th>";
echo "<th>Position Number</th>";
echo "<th>Name</th>";

echo "<tr>";

while($row=mysql_fetch_array($result)) {
    $ID =$row['db_pos_id'];
    $bbsterm_id =$row['bbs_pos_id'];
    $term_name =$row['position'];


	echo "<tr>";
	echo "<td id='txtid'><input type='text' name='txtID' value='$ID' readonly></td>";
    
	echo "<td><input type='text' name='pid' value='$bbsterm_id' readonly></td>";
    
	echo "<td><input type='text' name='txtName' value='$term_name' readonly></td>";
    
    echo "<td><input
		type='submit'
		value='delete'
		</input></td>
		<br>";

}

?>