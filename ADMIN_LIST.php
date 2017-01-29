<?php


require("dbconnect.php");

$sql = "select * from bbs_tbl_admin";

$result = mysql_query($sql, $conn) or die(mysql_error());

echo"<link rel='stylesheet' href='MAINTENANCE.css'>";
echo "<table cellspacing='5'
	cellpadding='2' align='center'>";
echo "<tr>";
echo "<th>Number</th>";
echo "<th>Admin Number</th>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Username</th>";
echo "<th>Password</th>";
echo "<th>Position</th>";
echo "<th>Email</th>";
echo "<th>Address</th>";
echo "<tr>";

while($row=mysql_fetch_array($result)) {
    $db_ID =$row['db_admin_id'];
    $admin_no =$row['bbs_admin_id'];
    $f_Name =$row['first_name'];
    $l_name =$row['last_name'];
	$user =$row['username'];
	$pass =$row['password'];
    $pos = $row['position'];
    $email = $row['email'];
    $add = $row['address'];
	
	echo "<tr>";
	echo "<td id='txtid'><input type='text' name='txtID' value='$db_ID' readonly></td>";
    
	echo "<td><input type='text' name='adid' value='$admin_no' readonly></td>";
	echo "<td><input type='text' name='fName' value='$f_Name' readonly></td>";
	
	echo"<td><input type='text' name='lName' value='$l_name' readonly></td>";
	echo"<td><input type='text' name='user' value='$user' readonly></td>";
	echo "<td><input type='text' name='pass' value='$pass' readonly></td>";
    echo "<td><input type='text' name='pos' value='$pos' readonly></td>";
    echo "<td><input type='text' name='email' value='$email' readonly></td>";
    echo "<td><input type='text' name='add' value='$add' readonly></td>";

    
}


    ?>