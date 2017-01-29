<?php



session_start();

$user = $_SESSION['bbs_buyer_login'];

require("dbconnect.php");

//$quantity = $_POST['quantity']; 
//$price = $_POST['price'];
//echo "$quantity<br>";
//echo "$price";

$sql_po = "select max(db_po_acc_id) as pid from bbs_po_acc";
$result = mysql_query($sql_po, $conn) or die(mysql_error());
while($row=mysql_fetch_array($result)) {
    
     $db_id =$row['pid'];
    
    if ($db_id == null)
    {
    $ponum = "PO_NUM-1";
        
    $track = md5($ponum);
    
}
    
    else
{
    
    $try = (int)$db_id;
    $plus = $try + 1;
   
    
   $ponum = "PO_NUM-$plus";
    $track = md5($ponum);
}
}



$dib = $_POST['dib'];
//date today
$date = date("Y/m/d");

//prod id
$id = $_POST['id'];


$name = $_POST['name'];
$desc = $_POST['desc'];
$price = $_POST['price'];
//quantity
$quantity = $_POST['quantity'];


$int_price = (int)$price;
$int_quantity = (int)$quantity;

$subtotal = $int_price * $int_quantity;
$subtot = round($subtotal,2); 


$sql_aid = "select db_acc_id from bbs_tbl_accstore where username='$user'";

$result_aid = mysql_query($sql_aid, $conn) or die(mysql_error());
while($row=mysql_fetch_array($result_aid)) {
    $db_aid = $row['db_acc_id'];
}
echo "acc id: $db_aid<br>";

//vat
/*$sql_vat = "select db_vat_id as vat from bbs_tbl_vat where db_vat_id = 1;";
$result_vat = mysql_query($sql_vat, $conn) or die(mysql_error());
while($row=mysql_fetch_array($result_vat)) {
    $db_vat = $row['vat'];
}
echo "vat: $db_vat<br>";*/

//term
/*$sql_term = "select db_term_id as term from bbs_tbl_term where db_term_id = 1;";
$result_term = mysql_query($sql_term, $conn) or die(mysql_error());
while($row=mysql_fetch_array($result_term)) {
    $db_terms = $row['term'];
}
echo "term id: $db_terms<br>";*/


//prod

$sql_prod = "select db_prod_id as prod from bbs_tbl_product where prod_name='$name';";
//echo"$sql_prod<br>";

$result_prod = mysql_query($sql_prod, $conn) or die(mysql_error());
while($row=mysql_fetch_array($result_prod)) {
    $db_prod = $row['prod'];
}
echo "prod id: $db_prod<br>";

echo "date: $date<br>";






$try = (int)$quantity * (int)$price;
echo "try: $try<br>";

$sql = "insert into bbs_review_acc(quantity,subtotal,placed_date,db_acc_id,db_prod_id, po_number, tracking_num) values ('$quantity','$subtot','$date','$db_aid','$db_prod','$ponum','$track')";
mysql_query($sql, $conn) or die(mysql_error());

header('Location:DISPLAY_WITH_BUY.php');

//echo "$ponum";






?>

<?php
/*
session_start();

$user = $_SESSION['bbs_buyer_login'];

echo "hello <b>$user<b>";

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
echo "<th>Quantity</th>";
echo "<tr>";

echo "<form action='ACC_BUY.php'
			method='POST'>";


while($row=mysql_fetch_array($result)) {
    $Item_ID =$row['bbs_prod_id'];
    $Item_Name =$row['prod_name'];
    $Item_Description =$row['description'];
    	$Price =$row['price'];
    $Item_Image =$row['item_image'];
	
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
    echo "<tr>";
    







}
*/




?>