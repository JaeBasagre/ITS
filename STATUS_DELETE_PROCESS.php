<?php
require("dbconnect.php");

$id = $_POST['txtID'];

$sql = "delete from bbs_tbl_status where bbs_stat_id='$id'";

$result = mysql_query($sql,$conn) or die(mysql_error());
header("Location:STATUS_DELETE.php");


echo "Item Deleted!";



?>