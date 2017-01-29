

<?php


require("dbconnect.php");

$sql = "select bbs_prod_id,
               prod_name,
               description,
               price,
               item_image
               
               from bbs_tbl_product";

$result = mysql_query($sql, $conn) or die(mysql_error());

echo"<link rel='stylesheet' href='MAINTENANCE.css'>";
echo "<table cellspacing='10'
	cellpadding='2' align='center'>";
echo "<tr>";
echo "<th>Product</th>";
echo "<th>Description</th>";
echo "<th>Long Description</th>";
echo "<th>Price</th>";
echo "<th>Photo</th>";
echo "<tr>";

while($row=mysql_fetch_array($result)) {
    $Item_ID =$row['bbs_prod_id'];
    $Item_Name =$row['prod_name'];
    $Item_Description =$row['description'];
    	$Price =$row['price'];
    $Item_Image =$row['item_image'];
	

	echo "<tr>";
	echo "<th><label>$Item_ID</label></th>";
    echo "<th><label>$Item_Name</label></th>";
    echo "<th><label>$Item_Description</label></th>";
    echo "<th><label>$Price</label></th>";
    echo "<th><img src='$Item_Image' height='100' width='100'></th>";
    echo "<tr>";

    
}


  


?>