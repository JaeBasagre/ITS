<!doctype html>

<html>
	<head>
		<title>
		LOGIN
		</title>
		
			
		<script type="text/javascript"
				src="jquery-2.1.4.min.js"> </script>
		
	<link rel="stylesheet" href="LOGIN_PROCESS_CSS.css">
		
		<script>
			
			$(function() {
				$("#it_sec").click(function() {
					
					//var search=$("#txtsearch").val();
					
					$.post("ITEMS_FRAME.php",
						  {txtsearch:search},
						  function(data) {
						$("#choose").html(data);
					});
				});
			});
		
		</script>
		
	</head>
	
	<body>
		
		<div id="php_welcome">
			
			
			
		<?php

session_start();



require('dbconnect.php');

// checking ng database
$user_admin      =$_POST['UN'];
$pass_admin      =$_POST['PS'];

$sql="select * from bbs_tbl_admin where username = '$user_admin' and password = '$pass_admin'";

$result=mysql_query($sql, $conn) or die(mysql_error());
$_SESSION['bbs_admin_login'] = $user_admin;
			
if (empty($_SESSION['bbs_admin_login'])) {
	echo "Invalid Username and Password<br>";
	echo "<a href='LOGIN_FORM.php'>Back</a>";
}
			
			
	else { 
		 echo "Welcome Admin <b>$user_admin</b>!";
	
	
	
	
		echo"	</div>";
		echo "<nav>";
			echo"<ul>";
				echo"<a href='#'></a><li>Orders</li>";
				
				echo"<a href='ITEMS_FRAME.php' target='here'><li>Item Section</li></a>";
				echo"<a href='ACC_STORE_FRAME.php' target='here'><li>Accredited Stores</a></li>";
				echo"<a href='#'></a><li>SMS Notification</li>";
				echo"<a href='SETTINGS_FRAME.php' target='here'><li>Settings</li></a>";
				echo"<a href='LOGGED_OUT.php'?logout><li>Logout</li></a>";
			
		echo	"</ul>";
		
	echo	"</nav>";
			
			
		echo"<frameset cols='100%'>";
		echo"<frame name='here' src='#'>";
		echo "</frameset>";
			
			//echo "What are you going to do?";
		echo "<iframe class='iframe' src='' height='500px' width='100%' name='here' frameborder='0' scrolling='no'>";
			//echo "</div>";	
		
		/* if(isset($_GET['logout'])) {
             session_unset();
             session_destroy();
			echo "you've been logged out.";*/
	
	
	
	echo "</body>";



echo "</html>";
		
		

		
	}
	?>
			
			<?php
			
			// if(isset($_GET['logout'])) {
            // session_unset();
            // session_destroy();			
			?>
		

    


