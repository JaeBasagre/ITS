<!DOCTYPE html>


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
		
		<script>
			
			$(function() {
				$("#btnsearch").click(function() {
					
					var search=$("#txtsearch").val();
					
					$.post("TERM_LIST.php",
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
		
		<form action="TERM_DELETE_ID.php" method="post">
		
		Type search key:<input type="text" name="textsearch" id="textsearch">
			<input type="submit" value="Submit">
			
			<div id = "display"></div>
			
			</div>
		
		</form>
	
	</body>

</html>






<?php












?>