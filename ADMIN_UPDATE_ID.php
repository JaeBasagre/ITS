<?php
require("dbconnect.php");


$search = $_POST['textsearch'];

$sql = "select * from bbs_tbl_admin where bbs_admin_id = '$search'";

$result = mysql_query($sql,$conn) or die(mysql_error());

echo "<form action='ADMIN_UPDATE_PROCESS.php'
			method='POST' enctype='multipart/form-data'>";

while($row=mysql_fetch_array($result)) {
	 $db_id =$row['db_admin_id'];
    $admin_no =$row['bbs_admin_id'];
    $f_Name =$row['first_name'];
    $l_name =$row['last_name'];
	$user =$row['username'];
	$pass =$row['password'];
    $pos = $row['position'];
    $email = $row['email'];
    $add = $row['address'];
	
	echo "<table cellspacing='5'
	cellpadding='2' align='center'>";
	
	echo "<tr>"; 


echo "<tr>";

echo "<th>Admin Number</th>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Username</th>";
echo "<th>Password</th>";
echo "<th>Position</th>";
echo "<th>Email</th>";
echo "<th>Address</th>";
echo "<tr>";

	
	//echo "<tr>";
	echo "<input
		type='hidden'
		name='txthidden'
		value='$db_id'/>";
	
	
	echo "<td><input type='text' name='adid' value='$admin_no' readonly></td>";
	echo "<td><input type='text' name='fName' value='$f_Name' ></td>";
	
	echo"<td><input type='text' name='lName' value='$l_name' ></td>";
	echo"<td><input type='text' name='user' value='$user'></td>";
	echo "<td><input type='text' name='pass' value='$pass' ></td>";
    
      echo "<td>";
    echo "<select name='posi'>";
    echo "<option value''>---Position---</option>";
?>
    
    <?php
        require("dbconnect.php");
        
    $cat = mysql_query("select position from bbs_tbl_position");
        while($que=mysql_fetch_row($cat))
        {
            echo"<option value='$que[0]'> $que[0] </option>";
        }
    ?>
<?php
    echo "</select>";
    echo "</td>";
    echo "<br>";
    ?>
    
    <?php
    echo "<td><input type='text' name='email' value='$email' readonly></td>";
    echo "<td><input type='text' name='add' value='$add' readonly></td>";
    
     echo "<td><input
		type='submit'
		value='update'
		</input></td>
		<br>";
	
}

?>