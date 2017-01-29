<?php

/*require("dbconnect.php");
session_start();

$user = $_SESSION['bbs_buyer_login'];

$id = $_POST['id'];
$name = $_POST['name'];
$desc = $_POST['desc'];
$price = $_POST['price'];

//$img = $_POST['img'];

//********************//


/*$sql_po = "select max(db_review_id) as po from bbs_review_acc";
$result_po = mysql_query($sql_po, $conn) or die(mysql_error());
while($row=mysql_fetch_array($result_po)) {
    $db_po = $row['po'];
    $try = (int)$db_po;
    //for po number
    $plus = $try + 1;
}







//********************//

/*$sql_id = "select db_acc_id as id from bbs_tbl_accstore where username = '$user'";
$result = mysql_query($sql_id, $conn) or die(mysql_error());


while($row_id=mysql_fetch_array($result)) {
    $db_id=$row_id['id'];

        
    }
        
        echo "PO Number: <input type='hidden' name='po' value='PO-$plus' readonly>";
        echo "<input type='hidden' name='name' value='$name' readonly>";
        echo "<input type='hidden' name='desc' value='$desc' readonly>";
        echo "<input type='hidden' name='price' value='$price' readonly>";

        echo "<input type='text' name='accid' value='PO-$plus' readonly>";
        echo "<input type='text' name='accid' value='$name' readonly>";
        echo "<input type='text' name='accid' value='$desc' readonly>";
        echo "<input type='text' name='accid' value='$price' readonly>";






/*
$sql = "insert into bbs_tbl_accstore
        (bbs_acc_id, company_name,
        address, contact_person, mobile_num,
        pin_num, tin_num, email, username, password)
        values
        ('$ac_id','$store','$addr',
        '$cper','$mnum','$pin',
        '$tin','$email','$user','$pass')";
*/






?>