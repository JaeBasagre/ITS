<?php


require("dbconnect.php");



$sql = "select max(db_buyer_id) as buyer from bbs_tbl_buyertype";
$result = mysql_query($sql, $conn) or die(mysql_error());

while($row=mysql_fetch_array($result)) {
    
     $db_id =$row['buyer'];
    
    if ($db_id == null)
    {
    echo "<input type='text' name='hehe' value='REG-1'>";
    
}
    
    else
{
    
    $try = (int)$db_id;
    $plus = $try + 1;
   
    
    echo "<input type='text' name='hehe' value='REG-$plus'>";
}
}


?>