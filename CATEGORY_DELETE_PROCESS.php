<?php
require("dbconnect.php");

$id = $_POST['itemid'];

$sql = "delete from bbs_tbl_category where bbs_cat_id='$id'";

$result = mysql_query($sql,$conn) or die(mysql_error());
header("Location:CATEGORY_DELETE.php");


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