<!DOCTYPE html>


<html>
	<head>
		<title></title>
	
		<script type="text/javascript"
				src="jquery-2.1.4.min.js"> </script>
		<link rel="stylesheet" href="MAINTENANCE.css">
		<script>
			
			
		
			$(function() {
				$.post("STATUS_LIST.php",
					  
					  function(data) {
					$("#display").html(data);
				});
			});
		</script>
		
		<script>
			
			$(function() {
				$("#btnsearch").click(function() {
					
					var search=$("#txtsearch").val();
					
					$.post("STATUS_LIST.php",
						  {txtsearch:search},
						  function(data) {
						$("#display").html(data);
					});
				});
			});
		
		</script>
		
		
		
	</head>
	
	<body>
		
		<div id = "body_main">
		
		<form action="STATUS_DELETE_ID.php" method="post">
		
		Type search key:<input type="text" name="textsearch" id="textsearch">
			<input type="submit" value="Submit">
			
			<div id = "display"></div>
			
			</div>
		
		</form>
	
	</body>

</html>






<?php





/*

require("dbconnect.php");


$id = $_POST['txtsearch'];

$sql = "select * from tbl_category where catID=$id";
$result = mysql_query($sql, $conn) or die(mysql_error());




/** table

echo "<table border='1'
    cellpadding='5'>";

echo "<tr>";
echo "<th>Category ID</th>";
echo "<th>Category Name</th>";





/** Mag search sa database 



while($row=mysql_fetch_array($result)) {
    $id = $row['catID'];
    $bname=$row['catName'];
    
   
    
/** mag print ng result    

    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$bname</td>";
   
    echo "</tr>";
    
    echo "<td><form action='categoryDELETE.php' method='POST'>";
   echo "<input type='hidden' value='$id' name='txthidden'>";
    //echo"<input type='text' value='$id' name='txtsearch'>";
    echo"<input type='submit' value='Delete' name='btndelete'>";
    
    echo"</form>";
    
    
    
    
    
    /*echo "<input type='text' value='$bname' name='txtname'>";
    
    echo "<input type='text' value='$category' name='txtcat'>";
    
    echo "<input type='text' value='$author' name='txtauthor'>";*/
    
    
    
  






?>