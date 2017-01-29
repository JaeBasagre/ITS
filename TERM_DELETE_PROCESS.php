<?php
require("dbconnect.php");

$id = $_POST['tid'];

$sql = "delete from bbs_tbl_term where bbs_term_id='$id'";



$result = mysql_query($sql,$conn) or die(mysql_error());
header("Location:TERM_DELETE.php");


echo "Item Deleted!";




?>