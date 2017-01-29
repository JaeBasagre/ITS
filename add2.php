<?php

require("dbconnect.php");

$it_ID = $_POST['it_ID'];
$it_name = $_POST['it_name'];


$img = $_FILES['img']['name'];
$desc = $_POST['desc'];
$Category = $_POST['it_category'];
$price = $_POST['price'];
$path = "Item_Images/$img";
echo $path;

$sql = "insert into bbs_tbl_product(bbs_prod_id,prod_name,item_image,description,price,Category) values ('$it_ID','$it_name','$path','$desc','$price','$Category')";

@copy($_FILES["img"]
	 	["tmp_name"],
	 	"Item_Images/".$_FILES["img"]
	 	["name"]) or die ("Error uploading");

mysql_query($sql, $conn) or die(mysql_error());

header('Location: add.php');

?>