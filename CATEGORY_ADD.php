<?php

require("dbconnect.php");

//cat_id
//cat_name
//desc

$cid = $_POST['cat_id'];
$name = $_POST['cat_name'];
$descr = $_POST['desc'];

$sql = "insert into bbs_tbl_category (bbs_cat_id, cat_name, cat_desc) values ('$cid', '$name', '$descr')";

mysql_query($sql, $conn) or die(mysql_error());
    

header('Location: CATEGORY.php');

?>