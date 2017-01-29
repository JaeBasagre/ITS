
<html>
    
    <head>
		<title></title>
	
		<script type="text/javascript"
				src="jquery-2.1.4.min.js"> </script>
		<link rel="stylesheet" href="MAINTENANCE.css">
		<script>
			
			
		
			$(function() {
				$.post("ADMIN_LIST.php",
					  
					  function(data) {
					$("#display").html(data);
				});
			});
		</script>
        
        <script>
			
			$(function() {
				$("#btnsearch").click(function() {
					
					var search=$("#txtsearch").val();
					
					$.post("ADMIN_LIST.php",
						  {txtsearch:search},
						  function(data) {
						$("#display").html(data);
					});
				});
			});
		
		</script>
		
	
		
		
	</head>

<form method="post" action="ADMIN_DELETE_ID.php">
	
	Type Category ID key:<input type="text" name="textsearch" id="textsearch">
			<input type="submit" value="Submit">
			
    
    

    <br>
    	<div id = "display"></div>
			
	
</form>

</html>

<?php





?>