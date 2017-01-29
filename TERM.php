
<html>
    
    <head>
		<title></title>
	
		<script type="text/javascript"
				src="jquery-2.1.4.min.js"> </script>
		<link rel="stylesheet" href="MAINTENANCE.css">
		<script>
			
			
		
			$(function() {
				$.post("TERM_LIST.php",
					  
					  function(data) {
					$("#display").html(data);
				});
			});
		</script>
		
	
		
		
	</head>

<form method="post" action="TERM_ADD.php">
	
	<input type="text" name="bbsid" >
	<input type="text" name="term_name">
    <textarea rows="4" cols="50" name="desc"></textarea>
    <input type="text" name="amount">
	
	
    
    
    
    
    <input type="submit" value="oo">
    <br>
    	<div id = "display"></div>
			
	
</form>

</html>

<?php





?>