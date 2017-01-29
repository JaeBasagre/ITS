<?php
require("dbconnect.php");

$id = $_POST['adid'];

$sql = "delete from bbs_tbl_admin where bbs_admin_id='$id'";

$result = mysql_query($sql,$conn) or die(mysql_error());
header("Location:ADMIN_DELETE.php");


echo "Item Deleted!";


/*

require("dbconnect.php");

 
$id = $_POST['txthidden'];




$sql = "delete from tbl_category where catid=$id";

mysql_query($sql, $conn) or die(mysql_error());

header('Location: categoryDELETE.html');

//mysql_query($sql, $conn) or die(mysql_error());


header('Location: categoryDELETE.html')

*/

?>