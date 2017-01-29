<?php
require("dbconnect.php");


require("dbconnect.php");

$ad_id = $_POST['adid'];
$first = $_POST['fName'];
$last = $_POST['lName'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$pos = $_POST['posi'];
$email = $_POST['email'];
$addr = $_POST['add'];

$sql = "update bbs_tbl_admin 
        set first_name = '$first', 
        last_name = '$last',
        username = '$user',
        password = '$pass',
        position = '$pos',
        email = '$email',
        address = '$addr'
        
        where bbs_admin_id = '$ad_id'";

echo "$sql";



$result = mysql_query($sql,$conn) or die(mysql_error());
header("Location:ADMIN_UPDATE.php");

echo "Updated!";


//$img = $_FILES['imag']['name'];

?>