<?php

require("dbconnect.php");
//stat_ID
//status_name

$s_id = $_POST['stat_ID'];
$s_name = $_POST['status_name'];

$sql = "insert into bbs_tbl_status (bbs_stat_id, status) values ('$s_id', '$s_name')";

mysql_query($sql, $conn) or die(mysql_error());
header('Location: STATUS.php');
?>