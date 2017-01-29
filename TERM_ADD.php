<?php

require("dbconnect.php");

//bbsid
//term_name
//desc
//amount

$id = $_POST['bbsid'];
$name = $_POST['term_name'];
$desc = $_POST['desc'];
$amnt = $_POST['amount'];

$sql = "insert into bbs_tbl_term (bbs_term_id, term_name, term_description, term_amount) values ('$id', '$name', '$desc',$amnt)";

echo "$sql";

mysql_query($sql, $conn) or die(mysql_error());
    

header('Location: TERM.php');

?>