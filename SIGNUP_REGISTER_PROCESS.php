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

$ad_id = $_POST['ad_id'];
$first = $_POST['FNa'];
$last = $_POST['LNa'];
$user = $_POST['UNa'];
$pass = $_POST['PSa'];
$pos = $_POST['posi'];
$email = $_POST['EMa'];
$addr = $_POST['add'];

$sql = "insert into bbs_tbl_admin
        (bbs_admin_id, first_name,
        last_name, username, password,
        position, email, address)
        values
        ('$ad_id','$first','$last',
        '$user','$pass','$pos',
        '$email','$addr')";

mysql_query($sql, $conn) or die(mysql_error());

header('Location: SIGNUP_REGISTER.php');








?>