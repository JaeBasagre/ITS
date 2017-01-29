<?php
require("dbconnect.php");



$sql = "select * from bbs_tbl_vat";

$result = mysql_query($sql,$conn) or die(mysql_error());

echo "<form action='VAT_UPDATE.php' method='POST'>";

while($row=mysql_fetch_array($result)) {
	$db_id 	 = 		$row['db_vat_id'];
	$vat_id = 	$row['bbs_vat_id'];
	$vat_name 	 =		$row['vat_name'];
	$vat_amount  =  	$row['vat_amount'];
	$vat_description =	$row['vat_description'];
	
	echo "<table cellspacing='5'
	cellpadding='2' align='center'>";
	
	echo "<tr>"; 

echo "<th>Number</th>";
echo "<th>VAT ID</th>";
echo "<th>Vat Name</th>";
echo "<th>Amount</th>";
echo "<th>Description</th>";

echo "<tr>";
	
	//echo "<tr>";
	echo "<td><input
		type='text'
		name='txthidden'
		value='$db_id'
        readonly/></td>";
	
	
	echo "<td><input
		type='text'
		name='vatid'
		value='$vat_id'
		>
		</input></td>
		<br>";
	
	echo "<td><input
		type='text'
		name='vatname'
		value='$vat_name'
		></td>
		</input>
		<br>";
	

	
	echo "<td><input
		type='text'
		name='vatamount'
		value='$vat_amount'
		></td>
		</input>
		<br>";
	
	echo "<td><input
		type='text'
		name='vatdesc'
		value='$vat_description'
		></td>
		</input>
		<br>";
    
    
	echo "<td><input
		type='submit'
		value='Update'
		</input></td>
		<br>";
}

?>