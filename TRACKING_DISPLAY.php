<?php
require("dbconnect.php");

$track = $_POST['track'];

$sql = "select * from temp_invoice where tracking_num = '$track'";

$result = mysql_query($sql,$conn) or die(mysql_error());

echo "<table cellspacing='5'
    cellpadding='2' align='center'>";
    
    echo "<tr>";
    
    echo "<th>Number</th>";
    echo "<th>Date</th>";
    echo "<th>Total</th>";
    echo "<th>PO Number</th>";
    echo "<th>Tracking Number</th>";
    echo "<th>Status</th>";

while($row=mysql_fetch_array($result)) {
    $db_id         = $row['db_id'];
    $target_date   = $row['target_date'];
    $net_total     = $row['net_total'];
    $po_number     = $row['po_number'];
    $tracking_num  = $row['tracking_num'];
    $status        = $row['status'];
    
    echo "<tr>";
    echo "<th><label>$db_id</label></th>";
    echo "<th><label>$target_date</label></th>";
    echo "<th><label>$net_total</label></th>";
    echo "<th><label>$po_number</label></th>";
    echo "<th><label>$tracking_num</label></th>";
    echo "<th><label>$status</label></th>";
}


?>