<?php

//ad_id
//FNa
//LNa
//UNa
//PSa
//posi
//EMa
//add

require("dbconnect.php");

$ac_id = $_POST['accid'];
$store = $_POST['sname'];
$addr = $_POST['addr'];
$cper = $_POST['cperson'];
$mnum = $_POST['mnumber'];
$pin = $_POST['pin'];
$tin = $_POST['tin'];
$email = $_POST['email'];
$user = $_POST['UNa'];
$pass = $_POST['PSa'];

$sql = "insert into bbs_tbl_accstore
        (bbs_acc_id, company_name,
        address, contact_person, mobile_num,
        pin_num, tin_num, email, username, password)
        values
        ('$ac_id','$store','$addr',
        '$cper','$mnum','$pin',
        '$tin','$email','$user','$pass')";

mysql_query($sql, $conn) or die(mysql_error());

header('Location:ACC_REG.php');







?>