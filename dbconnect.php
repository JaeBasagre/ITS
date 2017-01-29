<?php


$conn = mysql_connect("localhost","root","") or die(mysql_error());

/*if ($conn) {
    echo "Connection Established!";
}*/

/*$db = mysql_select_db ("db_batch16", $conn) or die (mysql_error());*/

$db = mysql_select_db ("bathbasics",$conn) or die (mysql_error());


?>