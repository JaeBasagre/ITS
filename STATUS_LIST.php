<?php


require("dbconnect.php");


$sql = "select * from bbs_tbl_status";

$result = mysql_query($sql, $conn) or die(mysql_error());

echo "<table cellspacing='5'
	cellpadding='2' align='center'>";

echo "<tr>";

echo "<th>Number</th>";
echo "<th>Status ID</th>";
echo "<th>Status</th>";

echo "</tr>";

while($row=mysql_fetch_array($result)) {
    $db_id =$row['db_stat_id'];
    $stat_id =$row['bbs_stat_id'];
    $stat =$row['status'];
 
	
	echo "<tr>";
	echo "<td id='txtid'><input type='text' name='txtID' value='$db_id' readonly></td>";
	
 
	echo "<td id='txtid'><input type='text' name='txtID' value='$stat_id' readonly></td>";
    
  
	echo "<td id='txtid'><input type='text' name='txtID' value='$stat' readonly></td>";

}


?>