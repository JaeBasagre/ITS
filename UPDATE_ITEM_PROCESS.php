<?php
require("dbconnect.php");


//$name = $_POST['txtname'];
//$loc = $_POST['txtloc'];
//$id = $_POST['txthidden'];

$id = $_POST['item_id'];

$bbs_id = $_POST['item_id'];
$bbs_name = $_POST['itemname'];
$img = $_FILES['imag']['name'];
$path = "Item_Images/$img";
$desc = $_POST['itemdesc'];
$pri = $_POST['itemprice'];
$cat = $_POST['it_category'];

$sql = "update bbs_tbl_product 
        set prod_name = '$bbs_name', 
        item_image='$path',
		description = '$desc',
		price = $pri,
        Category = '$cat'
        
        where bbs_prod_id = '$id'";

echo "$sql";

@copy($_FILES["imag"]
	 	["tmp_name"],
	 	"Item_Images/".$_FILES["imag"]
	 	["name"]) or die ("Error uploading");

$result = mysql_query($sql,$conn) or die(mysql_error());
header("Location:UPDATE_ITEM.php");

echo "Updated!";


//$img = $_FILES['imag']['name'];

?>