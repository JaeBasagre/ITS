
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
		
	
		
		
	</head>

<form method="post" action="STATUS_ADD.php" enctype="multipart/form-data">
	
	<input type="text" name="stat_ID">
	<input type="text" name="status_name">
	

    
    
    <input type="submit" value="add">
    <br>
    	<div id = "display"></div>
			
	
</form>

</html>

