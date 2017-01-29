<?php
require("dbconnect.php");

//$search = $_POST['textsearch'];

$search = $_POST['textsearch'];

$sql = "select * from bbs_tbl_term where bbs_term_id = '$search'";

$result = mysql_query($sql, $conn) or die(mysql_error());

echo "<form action='TERM_DELETE_PROCESS.php'
			method='POST'>";

echo "<table cellspacing='5'
	cellpadding='2' align='center'>";
echo "<tr>";
echo "<th>Number</th>";
echo "<th>Term Number</th>";
echo "<th>Name</th>";
echo "<th>Description</th>";
echo "<th>Amount</th>";
echo "<tr>";

while($row=mysql_fetch_array($result)) {
    $ID =$row['db_term_id'];
    $bbsterm_id =$row['bbs_term_id'];
    $term_name =$row['term_name'];
    $term_desc =$row['term_description'];
    $term_amount =$row['term_amount'];

	echo "<tr>";
	echo "<td id='txtid'><input type='text' name='txtID' value='$ID' readonly></td>";
    
	echo "<td><input type='text' name='tid' value='$bbsterm_id' readonly></td>";
    
	echo "<td><input type='text' name='txtName' value='$term_name' readonly></td>";

	echo"<td><input type='text' name='txtdesc' value='$term_desc' readonly></td>";
    
    echo"<td><input type='text' name='txtamount' value='$term_amount' readonly></td>";
	
	echo "<td><input
		type='submit'
		value='delete'
		</input></td>
		<br>";
}

?>