<!DOCTYPE html>


<html>
	<head>
		<title>UPDATE</title>
	
		<script type="text/javascript"
				src="jquery-2.1.4.min.js"> </script>
		<script>
		
			$(function() {
				$.post("ITEM_VIEW.php",
					  
					  function(data) {
					$("#display").html(data);
				});
			});
		</script>
		
		<script>
			
			$(function() {
				$("#btnsearch").click(function() {
					
					var search=$("#txtsearch").val();
					
					$.post("UPDATE_ITEM.php",
						  {txtsearch:search},
						  function(data) {
						$("#display").html(data);
					});
				});
			});
		
		</script>
	</head>
	
	<body>
		<label>UPDATE</label>
		<form action="UPDATE_ITEM_ID.php" method="post">
		
		Type search key:<input type="text" name="textsearch">
			<input type="submit" value="Submit">
			
			<div id = "display"></div>
		
		</form>
	
	</body>

</html>


