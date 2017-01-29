<?php



session_start();
$user = $_SESSION['bbs_buyer_login'];

require("dbconnect.php");







// get bbs info

$sql_bbs = "select * from bbs_information";
$result_bbs = mysql_query($sql_bbs, $conn) or die(mysql_error());
while($row=mysql_fetch_array($result_bbs)) {
    $bid = $row['bbs_id'];
    $cname = $row['company_name'];
    $address = $row['address'];
    $cper = $row['contact_person'];
    $cnum = $row['contact_number'];
    $phone = $row['phone'];
    $fax = $row['fax'];
}

// get status
$sql_stat = "select status from bbs_tbl_status where db_stat_id = 1";
$result_stat = mysql_query($sql_stat, $conn) or die(mysql_error());
while($row=mysql_fetch_array($result_stat)) {
    $stat = $row['status'];
    
}

// get term




// get acc store id
$sql_aid = "select db_acc_id from bbs_tbl_accstore where username='$user'";

$result_aid = mysql_query($sql_aid, $conn) or die(mysql_error());
while($row=mysql_fetch_array($result_aid)) {
    $db_aid = $row['db_acc_id'];
}

// get po date
$sql_podate = "select placed_date from bbs_review_acc where db_acc_id = $db_aid";
$result_date = mysql_query($sql_podate, $conn) or die(mysql_error());
while($row=mysql_fetch_array($result_date)) {
    $db_pod = $row['placed_date'];
}

//get address
$sql_addr = "select company_name as comp,
            address as addr
            from bbs_tbl_accstore
            where db_acc_id = $db_aid";
$result_addr= mysql_query($sql_addr, $conn) or die(mysql_error());
while($row=mysql_fetch_array($result_addr)) {
    $db_comp = $row['comp'];
    $db_addr = $row['addr'];
}


//get quantities

$sql_sum_quant = "select sum(quantity) as quantsum from bbs_review_acc where db_acc_id =$db_aid";
$result_quant = mysql_query($sql_sum_quant, $conn) or die(mysql_error());
while($row=mysql_fetch_array($result_quant)) {
    $db_quant_sum = $row['quantsum'];
}


//get sum(subtotal)
$sql_sum_sub = "select sum(subtotal) as subt from bbs_review_acc where db_acc_id =$db_aid";
$result_subt = mysql_query($sql_sum_sub, $conn) or die(mysql_error());
while($row=mysql_fetch_array($result_subt)) {
    $db_subt = $row['subt'];
}




// vat 
$sql_vat = "select vat_amount as vat from bbs_tbl_vat where db_vat_id = 1";
$result_vat = mysql_query($sql_vat, $conn) or die(mysql_error());  
while($row=mysql_fetch_array($result_vat)) {
    $db_vat = $row['vat'];
}

echo "vatttttttttttttt$db_vat";
$get12 = $db_vat/100;
echo "<br>$get12";


// get po and tracking
$sql_pt = "select po_number, tracking_num  from bbs_review_acc where db_acc_id = $db_aid";
$result_pt = mysql_query($sql_pt, $conn) or die(mysql_error());  
while($row=mysql_fetch_array($result_pt)) {
    $db_po = $row['po_number'];
    $db_track = $row['tracking_num'];
}


echo"<link rel='stylesheet' href='MAINTENANCE.css'>";
echo "<table  align='left'>";
echo "<tr>";
    echo "<td>Purchase Order:</td>";
echo "<td> $db_po</td>";
    
echo "</tr>";

echo "<tr>";
   
    echo "<td>Tracking Number: </td>";
echo "<td>$db_track</td>";
echo "</tr>";


echo "<tr>";
echo "<td>Supplier:</td>";
echo "<td>$cname</td>";

echo "</tr>";

echo "<tr>";
echo "<td></td>";
echo "<td>$address</td>";

echo "</tr>";

echo "<tr>";
echo "<td></td>";
echo "<td>Phone: $phone Fax: $fax</td>";
echo "</tr>";

echo "<tr>";
echo "<td></td>";
echo "<td>Contact Person: $cper($cnum)</td>";
echo "</tr><br>";



echo "<tr>";

echo "<td>Deliver to:</td>";
echo "<td>$db_comp</td>";
echo "<th></th>";
echo "</tr>";



echo "<tr>";
echo "<td></td>";
echo "<td> $db_addr</td>";
echo "</tr>";

echo "<tr>";
echo "<td>PO Date:</td>";
echo "<td> $db_pod</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Target Date:</td>";
echo "<td>
<select name='month'>
<option value='1'>January</option>
	<option value='2'>February</option>
	<option value='3'>March</option>
	<option value='4'>April</option>
	<option value='5'>May</option>
	<option value='6'>June</option>
	<option value='7'>July</option>
	<option value='8'>August</option>
	<option value='9'>September</option>
	<option value='10'>October</option>
	<option value='11'>November</option>
	<option value='12'>December</option>
</select>

<select name='day'>
<option value='1'>1</option>
	<option value='2'>2</option>
	<option value='3'>3</option>
	<option value='4'>4</option>
	<option value='5'>5</option>
	<option value='6'>6</option>
	<option value='7'>7</option>
	<option value='8'>8</option>
	<option value='9'>9</option>
	<option value='10'>10</option>
	<option value='11'>11</option>
	<option value='12'>12</option>
    <option value='13'>13</option>
	<option value='14'>14</option>
	<option value='15'>15</option>
	<option value='16'>16</option>
	<option value='17'>17</option>
	<option value='18'>18</option>
	<option value='19'>19</option>
	<option value='20'>20</option>
	<option value='21'>21</option>
	<option value='22'>22</option>
	<option value='23'>23</option>
	<option value='24'>24</option>
    <option value='25'>25</option>
	<option value='26'>26</option>
	<option value='27'>27</option>
	<option value='28'>28</option>
	<option value='29'>29</option>
	<option value='30'>30</option>
	<option value='31'>31</option>
</select>

<select name='year'>
<option value='1'>2017</option>
	<option value='2'>2018</option>
	<option value='3'>2019</option>
	<option value='4'>2020</option>
	<option value='5'>2021</option>
	<option value='6'>2022</option>
	<option value='7'>2023</option>
	<option value='8'>2024</option>
	<option value='9'>2025</option>
	<option value='10'>2026</option>
	<option value='11'>2027</option>
	<option value='12'>2028</option>
    <option value='13'>2029</option>
	<option value='14'>2030</option>
	<option value='15'>2031</option>
	<option value='16'>2032</option>
	<option value='17'>2033</option>
	<option value='18'>2034</option>
	<option value='19'>2035</option>
	<option value='20'>2036</option>
	<option value='21'>2037</option>
	<option value='22'>2038</option>
	<option value='23'>2039</option>
	<option value='24'>2040</option>

</select>


</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Status:</td>";
echo "<td> $stat</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Term:</td>";
echo "<td><select name='term'>
<option value=''>Choose TERMS (Discount %)</option>";


$term = mysql_query("select term_amount from bbs_tbl_term");
while($result=mysql_fetch_row($term))
{
    echo "<option value=$result[0]'> $result[0] </option>";
}
echo "</select>";




    
    
echo "</td>";
echo "</tr>";

///inner join show table

$sql_review = " select bbs_review_acc.quantity as quant,
 bbs_tbl_product.prod_name as name,
 bbs_tbl_product.price as price
 from bbs_review_acc
 inner join bbs_tbl_product
 on bbs_review_acc.db_prod_id = bbs_tbl_product.db_prod_id
 where db_acc_id = $db_aid;";
$result_rev = mysql_query($sql_review, $conn) or die(mysql_error());


echo"<link rel='stylesheet' href='MAINTENANCE.css'>";
echo "<table cellspacing='10'
	cellpadding='2' align='center'>";
echo "<tr>";
echo "<th></th>";
echo "<th>Quantity</th>";
echo "<th>Product Name</th>";
echo "<th>Price</th>";
echo "<th></th>";
echo "<th>Subtotal</th>";



while($row=mysql_fetch_array($result_rev)) {
    $db_quant = $row['quant'];
    $db_name = $row['name'];
    $db_price = $row['price'];


$multiply = $db_quant * $db_price;

echo "<br>";
    
echo "<tr>";
    echo "<td></td>";
	echo "<td><label>$db_quant</label></td>";
    echo "<td><label>$db_name</label></td>";
    echo "<td><label>$db_price</label></td>";
    echo "<td>    </td>";
    echo "<td><label>$multiply</label></td>";
   

echo "</tr>";
//echo "$db_quant";


}




echo "<tr>";
echo "<th>Total Quantity:</th>";
echo "<th>$db_quant_sum</th>";
echo "<th></th>";
echo "<th></th>";
echo "<th></th>";
echo "<th>$db_subt</th>";
echo "<th>Gross Total</th>";
echo "</tr>";

$vat_int = (int)$db_vat;
//$int_total = (int)$db_total;

//$total_withvat = $int_total * $vat_int;
//echo "$vat_int";
//echo "$total_withvat";
//echo "<form"




?>