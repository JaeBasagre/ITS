<?php
require("dbconnect.php");


$search = $_POST['textsearch'];

$sql = "select * from bbs_tbl_product where bbs_prod_id = '$search'";

$result = mysql_query($sql,$conn) or die(mysql_error());

echo "<form action='UPDATE_ITEM_PROCESS.php'
			method='POST' enctype='multipart/form-data'>";

while($row=mysql_fetch_array($result)) {
	$item_id 	 = 		$row['db_prod_id'];
	$bbs_item_id = 	    $row['bbs_prod_id'];
	$item_name 	 =		$row['prod_name'];
	$item_image  =  	$row['item_image'];
	$item_description =	$row['description'];
	$price			 =	$row['price'];
    $category =         $row['Category'];
	
	echo"UPDATE";
	echo "<table cellspacing='5'
	cellpadding='2' align='center'>";
	
	echo "<tr>";

echo "<th>BBS Item ID</th>";
echo "<th>Item Name</th>";
echo "<th>Change Image</th>";
echo "<th>Item Image</th>";
echo "<th>Item Description</th>";
echo "<th>Price</th>";
echo "<th>Category</th>";
echo "<tr>";
	
	//echo "<tr>";
	echo "<input
		type='hidden'
		name='txthidden'
		value='$item_id'/>";
	
	
	echo "<td><input
		type='text'
		name='item_id'
		value='$bbs_item_id'
		readonly>
		</input></td>
		<br>";
	
	echo "<td><input
		type='text'
		name='itemname'
		value='$item_name'
		readonly</td>
		</input>
		<br>";
	
	echo "<td><input type='file' name='imag'></td>";
	
	echo "<td><img src=$item_image name='itemimage' height='100' width='100'></input></td>
		<br>";
	
	echo "<td><input
		type='text'
		name='itemdesc'
		value='$item_description'></td>
		</input>
		<br>";
	
	echo "<td><input
		type='text'
		name='itemprice'
		value='$price'></td>
		</input>
		<br>";
    
    /*echo "<td><input
		type='text'
		name='itemprice'
		value='$category'
		readonly></td>
		</input>*/
    echo "<td>";
    echo "<select name='it_category'>";
    echo "<option value''>---Category---</option>";
?>
    
    <?php
        require("dbconnect.php");
        
    $cat = mysql_query("select cat_name from bbs_tbl_category");
        while($que=mysql_fetch_row($cat))
        {
            echo"<option value='$que[0]'> $que[0] </option>";
        }
    ?>
<?php
    echo "</select>";
    echo "</td>";
    echo "<br>";
    ?>


<?php
	
	echo "<td><input
		type='submit'
		value='update'
		</input></td>
		<br>";
}

?>