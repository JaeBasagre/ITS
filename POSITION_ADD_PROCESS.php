<?php

require("dbconnect.php");

//pos_id
//pos_name

$s_id = $_POST['pos_id'];
$s_name = $_POST['pos_name'];

$sql = "insert into bbs_tbl_position (bbs_pos_id, position) values ('$s_id', '$s_name')";

mysql_query($sql, $conn) or die(mysql_error());
header('Location: POSITION_ADD.php');
?>