<!doctype html>


<html>
	
	<title>Sign Up: Admin</title>
	<head><script type="text/javascript"
				src="jquery-2.1.4.min.js"> </script>
		<link rel="stylesheet" href="MAINTENANCE.css">
		<script>
			
			
		
			$(function() {
				$.post("ADMIN_LIST.php",
					  
					  function(data) {
					$("#display").html(data);
				});
			});
		</script></head>
	
	<body>
		
		<header><div id="titlead">Admin Sign Up</div></header>
		
	
		
		<div id ="fill_up">
			
    <form action="SIGNUP_REGISTER_PROCESS.php" method="post">
       
		<table cellpadding="10">
		
			<tr>
                
                <td>Admin Number:</td>
		<td><input type="text" placeholder="Admin Number" required name="ad_id" id="aID"><br/></td>
       </tr>
			
       <td>First Name:</td>
		<td><input type="text" placeholder="First Name" required name="FNa" id="sgntxt"><br/></td>
       </tr>
				
		<tr>
			<td>Last Name:</td>
			<td><input type="text" placeholder="Last Name" required name="LNa" id="sgntxt"><br /></td>
			</tr>
			
			<tr>
        	<td>User Name:</td>
			<td><input type="text" placeholder="User Name" required name="UNa" id="sgntxt"><br /></td>
        	</tr>
			
			<tr>
				<td>Password:</td>
					<td><input type="password" placeholder="Password" required name="PSa" id="sgntxt"><br/></td>
			</tr>
			
        <tr>
            <td> Position: <td><select name="posi">
        <option value="">--Position---</option>
    
    <?php
        require("dbconnect.php");
        
    $cat = mysql_query("select position from bbs_tbl_position");
        while($que=mysql_fetch_row($cat))
        {
            echo"<option value='$que[0]'> $que[0] </option>";
        }
    ?>
    </select></td>
			</tr>
        
			<tr>
        		<td>Email:</td>
				<td><input type="text" placeholder="Email" required name="EMa" id="sgntxt"><br /></td>
				</tr>
			
			<tr>
				
                    <td>Address:</td>
					<td><input type="text" placeholder="Address" required name="add" id="addr"><br/></td>
        
				
        </tr>
				
				<tr>
				<td>
					<input type="submit" id="buttons" value="submit">
         			<input type="reset" value="reset" id="buttons"/>
				</td>
				</tr>
        
        
    </table>
		</div>
    </form>
		<div id="display"></div>
		</body>

</html>

