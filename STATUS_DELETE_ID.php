<?php
require("dbconnect.php");

//$search = $_POST['textsearch'];

$search = $_POST['textsearch'];

$sql = "select * from bbs_tbl_status where bbs_stat_id = '$search'";

$result = mysql_query($sql, $conn) or die(mysql_error());

echo "<form action='STATUS_DELETE_PROCESS.php'
			method='POST'>";



while($row=mysql_fetch_array($result)) {
    $db_id =$row['db_stat_id'];
    $stat_id =$row['bbs_stat_id'];
    $stat =$row['status'];
    
    echo "<table cellspacing='5'
	cellpadding='2' align='center'>";

echo "<tr>";

echo "<th>Number</th>";
echo "<th>Status ID</th>";
echo "<th>Status</th>";

echo "</tr>";
 
	
	echo "<tr>";
	echo "<td id='txtid'><input type='text' name='txtID' value='$db_id' readonly></td>";
	
 
	echo "<td id='txtid'><input type='text' name='txtID' value='$stat_id' readonly></td>";
    
  
	echo "<td id='txtid'><input type='text' name='txtstat' value='$stat' readonly></td>";

	
	echo "<td><input
		type='submit'
		value='delete'
		</input></td>
		<br>";
}

?>