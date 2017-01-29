<?php

session_start();


//UN
//PS

require('dbconnect.php');

// checking ng database
$user      =$_POST['UN'];
$pass      =$_POST['PS'];

$sql="select 1 from bbs_tbl_accstore where username = '$user' and password = '$pass'";

$result=mysql_query($sql, $conn) or die(mysql_error());
$_SESSION['bbs_buyer_login'] = $user;
			
/*if (empty($_SESSION['bbs_buyer_login'])) {
	echo "Invalid Username and Password<br>";
	echo "<a href='ACC_STORE_LOGIN.php'>Back</a>";
}*/

if ($result && mysql_num_rows($result) > 0) {
    header('Location:DISPLAY_WITH_BUY.php');
}

else if (empty($_SESSION['bbs_buyer_login'])) {
	echo "Invalid Username and Password<br>";
	echo "<a href='ACC_STORE_LOGIN.php'>Back</a>";
}

else 
{
    echo "customer";
}
			
			

    

	?>