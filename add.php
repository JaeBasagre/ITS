
<html>
    
    <head>
		<title></title>
	
		<script type="text/javascript"
				src="jquery-2.1.4.min.js"> </script>
		<link rel="stylesheet" href="MAINTENANCE.css">
		<script>
			
			
		
			$(function() {
				$.post("ITEM_VIEW.php",
					  
					  function(data) {
					$("#display").html(data);
				});
			});
		</script>
		
	
		
		
	</head>

<form method="post" action="add2.php" enctype="multipart/form-data">
	
	<input type="text" name="it_ID">
	<input type="text" name="it_name">
	
    <input type="file" name="img">
	<textarea rows="4" cols ="50" name="desc"></textarea>
	<input type="text" name="price">
    
    
    
    <select name="it_category">
        <option value="">--Category---</option>
    
    <?php
        require("dbconnect.php");
        
    $cat = mysql_query("select cat_name from bbs_tbl_category");
        while($que=mysql_fetch_row($cat))
        {
            echo"<option value='$que[0]'> $que[0] </option>";
        }
    ?>
    </select>
    
    
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