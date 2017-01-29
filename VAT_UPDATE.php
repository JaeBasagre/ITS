<?php


require("dbconnect.php");

$id = $_POST['txthidden'];
$vat = $_POST['vatid'];
$name = $_POST['vatname'];
$amount = $_POST['vatamount'];
$desc = $_POST['vatdesc'];

$sql = "update bbs_tbl_vat
        set bbs_vat_id = '$vat',
        vat_name = '$name',
        vat_amount= $amount,
        vat_description = '$desc'
        where db_vat_id = $id";

$result = mysql_query($sql,$conn) or die(mysql_error());
echo"updated!";

?>