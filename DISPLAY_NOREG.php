
<html>
    
    <head>
		<title></title>
	
		<script type="text/javascript"
				src="jquery-2.1.4.min.js"> </script>
		<link rel="stylesheet" href="MAINTENANCE.css">
		<script>
			
			
		
			$(function() {
				$.post("DISPLAY_PRODUCT.php",
					  
					  function(data) {
					$("#display").html(data);
				});
			});
		</script>
		
	
		
		
	</head>


	
	<a href="ACC_STORE_LOGIN.php">Login</a>
    <a href="#">Sign Up</a>
	

    
    
    
    
    <br>
    	<div id = "display"></div>
			
	
</form>

</html>

<?php





?>