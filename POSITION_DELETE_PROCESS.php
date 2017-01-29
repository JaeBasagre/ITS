<?php
require("dbconnect.php");

$id = $_POST['pid'];

$sql = "delete from bbs_tbl_position where bbs_pos_id='$id'";

$result = mysql_query($sql,$conn) or die(mysql_error());

echo "$sql";
header("Location:POSITION_DELETE.php");


echo "Item Deleted!";



?>