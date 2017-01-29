<?php


require("dbconnect.php");

$sql = "select * from bbs_tbl_accstore";
$result = mysql_query($sql, $conn) or die(mysql_error());

echo "<table cellspacing='5'
	cellpadding='2' align='center'>";
echo "<tr>";
echo "<th>Number</th>";
echo "<th>Accredited Store ID</th>";
echo "<th>Name</th>";
echo "<th>Address</th>";
echo "<th>Contact Person</th>";
echo "<th>Mobile Number</th>";
echo "<th>PIN no.</th>";
echo "<th>TIN no.</th>";
echo "<th>Email</th>";
echo "<th>Username</th>";
echo "<th>Password</th>";
echo "</tr>";

while($row=mysql_fetch_array($result)) {
    $ID =$row['db_acc_id'];
    $bbsacc_id =$row['bbs_acc_id'];
    $name =$row['company_name'];
    $address =$row['address'];
    $conper =$row['contact_person'];
    $mobnum =$row['mobile_num'];
    $pin =$row['pin_num'];
    $tin =$row['tin_num'];
    $email=$row['email'];
    $user=$row['username'];
    $pw =$row['password'];

	echo "<tr>";
	echo "<td id='txtid'><input type='text' name='txtID' value='$ID' readonly></td>";
	echo "<td><input type='text' name='aid' value='$bbsacc_id' readonly></td>";
    
	echo "<td><input type='text' name='tname' value='$name' readonly></td>";

	echo"<td><input type='text' name='address' value='$address' readonly></td>";
    
    echo"<td><input type='text' name='conper' value='$conper'
    readonly></td>";
    
    echo "<td id='txtid'><input type='cel' name='txtID' value='$mobnum' readonly></td>";
	echo "<td><input type='text' name='pin' value='$pin' readonly></td>";
    
	echo "<td><input type='text' name='tin' value='$tin' readonly></td>";

	echo"<td><input type='text' name='email' value='$email' readonly></td>";
    
    echo"<td><input type='text' name='pw' value='$user' readonly></td>";
    
    echo"<td><input type='text' name='pw' value='$pw' readonly></td>";
    echo "</tr>";
	
}




?>