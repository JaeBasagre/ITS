
<html>
    
    <head>
		<title></title>
	
		<script type="text/javascript"
				src="jquery-2.1.4.min.js"> </script>
		<link rel="stylesheet" href="MAINTENANCE.css">
		<script>
			
			
		
			$(function() {
				$.post("CATEGORY_LIST.php",
					  
					  function(data) {
					$("#display").html(data);
				});
			});
		</script>
		
	
		
		
	</head>

<form method="post" action="CATEGORY_ADD.php">
	
	<input type="text" name="cat_id" value="CAT">
	<input type="text" name="cat_name">
	
	<textarea rows="4" cols ="50" name="desc"></textarea>
    
    
    
    
    <input type="submit" value="oo">
    <br>
    	<div id = "display"></div>
			
	
</form>

</html>

<?php

/*require("dbconnect.php");


$pangalan = $_POST['txtBOX'];
$image=$_FILES['img']['name'];
$path="pics/$image";
echo $path; 


$sql = "insert into tbl_pics(pictures, name) values('$path','$pangalan')";

 @copy($_FILES["img"]
          ["tmp_name"],
          "pics/".$_FILES["img"]
          ["name"]) or die ("Error uploading");

mysql_query($sql, $conn) or die(mysql_error());

   
header('Location: upload.html');.*/



?>