



<!doctype html>

<html>
	<head>
		<title>
		LOGIN
		</title>
	<link rel="stylesheet" href="LOGIN_PROCESS_CSS.css">
	</head>
	
	<body>
		
		<div id="php_welcome">
		<?php

session_start();



require('dbconnect.php');

// checking ng database
$user_admin      =$_POST['UN'];
$pass_admin      =$_POST['PS'];

$sql="select * from bbs_admin_login where user_admin = '$user_admin' and pass_admin = '$pass_admin'";

$result=mysql_query($sql, $conn) or die(mysql_error());
 $_SESSION['bbs_admin_login'] = $user_admin;
			
//if (empty($_SESSION['bbs_admin_login'])) {
//	echo "You are not an admin yet.";
//	echo "<a href='SIGN_UP.php'>Sigh Up here</a>";
//}
	//else {
	
		

// kapag may match sa database
/*if(mysql_numrows($result)>0) {
   */
    echo "Welcome Admin <b>$user_admin</b>!";
	
	
	
	//?>
			</div>
		<nav>
			<ul>
				<a href="#"></a><li>Orders</li>
				<a href="ITEM_MENU%20(FRAME).php"><li>Item Section</li></a>
				<a href="#"></a><li>Accredited Stores</li>
				<a href="#"></a><li>SMS Notification</li>
				<a href="#"></a><li>Settings</li>
				<a href="LOGGED_OUT.php"?logout><li>Logout</li></a>
			
			</ul>
		
		</nav>
			
			
		<div id="choose">
			
			What are you going to do?
			</div>	
	
	
	
	</body>



</html>




<?php



	
	
	 $dbName = "bathbasics";
        $dbPass = "";
        if(isset($_GET['logout'])) {
             session_unset();
             session_destroy();
			echo "you've been logged out.";
        }
	
	
	
//}


//else {
  //  echo "NOT A MEMBER. <br>";
	//echo "<a href='SIGN_UP.php'>Sign up here!</a>";
	
//}
//}

    
    ?>


