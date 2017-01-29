

<?php

session_start();

$user = $_SESSION['bbs_buyer_login'];

require("dbconnect.php");

//$count = "select count(db_prod_id) as items from bbs_review acc "


$sql_aid = "select db_acc_id from bbs_tbl_accstore where username='$user'";

$result_aid = mysql_query($sql_aid, $conn) or die(mysql_error());
while($row=mysql_fetch_array($result_aid)) {
    $db_aid = $row['db_acc_id'];
}

$count = "select count(db_prod_id) as items from bbs_review_acc where db_acc_id = $db_aid";
$result_count = mysql_query($count, $conn) or die(mysql_error());
while($row=mysql_fetch_array($result_count)) {
    $db_count = $row['items'];
}

echo "hello <b>$user<b><br>";
echo "<a href='ACC_REVIEW_CART.php'>Review Your Cart Here![$db_count]</a>";

require("dbconnect.php");


$sql = "select db_prod_id,
                bbs_prod_id,
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
echo "<th>Quantity</th>";
echo "<tr>";





while($row=mysql_fetch_array($result)) {
    $dib = $row['db_prod_id'];
    $Item_ID =$row['bbs_prod_id'];
    $Item_Name =$row['prod_name'];
    $Item_Description =$row['description'];
    	$Price =$row['price'];
    $Item_Image =$row['item_image'];
	
    
    echo "<form action='ACC_BUY.php'
			method='POST'>";
    
    echo "<input type='hidden' name='dib' value='$dib'>";
    echo "<input type='hidden' name='id' value='$Item_ID'>";
    echo "<input type='hidden' name='name' value='$Item_Name'>";
    echo "<input type='hidden' name='desc' value='$Item_Description'>";
    echo "<input type='hidden' name='price' value='$Price'>";
    echo "<input type='hidden' name='img' value='$Item_Image'>";

	echo "<tr>";
	echo "<th><label>$Item_ID</label></th>";
    echo "<th><label>$Item_Name</label></th>";
    echo "<th><label>$Item_Description</label></th>";
    echo "<th><label>$Price</label></th>";
    echo "<th><img src='$Item_Image' height='100' width='100'></th>";
    echo "<th><input type='text' value='' placeholder='how many' name='quantity'>";
    
    echo "<th><input type='submit' value='Add to Cart'></th>";
    echo "</tr>";
    
    echo"</form>";
    
    

    
}


  


?>