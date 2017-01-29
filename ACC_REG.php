<!doctype html>


<html>
	
	<title>Sign Up: Admin</title>
	<head><script type="text/javascript"
				src="jquery-2.1.4.min.js"> </script>
	
		<link rel="stylesheet" href="MAINTENANCE.css">
		<script>
			
			
		
			$(function() {
				$.post("ACC_STORE_VIEW.php",
					  
					  function(data) {
					$("#display").html(data);
				});
			});
		</script>
        
        
        
        
        
		</head>
	
	<body>
		
		<header><div id="titlead">Accredited Store Sign Up</div></header>
		
	
		
		<div id ="fill_up">
			
    <form action="ACC_REG_PROCESS.php" method="post">
       
		<table cellpadding="10">
		
			<tr>
                
               
                
                <?php
                
                require("dbconnect.php");



                $sql = "select max(db_acc_id) as acc from bbs_tbl_accstore";
                $result = mysql_query($sql, $conn) or die(mysql_error());

                while($row=mysql_fetch_array($result)) {
    
                $db_id =$row['acc'];
    
                    if ($db_id == null)
                        {
                            echo "Your ID:<input type='text' name='accid' value='ACCSTORE-1' readonly>";
    
                        }
    
    else
{
    
    $try = (int)$db_id;
    $plus = $try + 1;
   
    
    echo "<input type='text' name='accid' value='ACCSTORE-$plus' readonly>";
}
}
                
                
                ?>
                
		
       </tr>
            
		<tr>	
       <td>Store Name:</td>
		<td><input type="text" placeholder="Store Name" required name="sname" id="sgntxt"><br/></td>
       </tr>
				
		<tr>
			<td>Address:</td>
			<td><input type="text" placeholder="Last Name" required name="addr" id="sgntxt"><br /></td>
			</tr>
            
            <tr>
			<td>Contact Person:</td>
			<td><input type="text" placeholder="Last Name" required name="cperson" id="sgntxt"><br /></td>
			</tr>
            
              <tr>
			<td>Mobile Number:</td>
			<td><input type="text" placeholder="Last Name" required name="mnumber" id="sgntxt"><br /></td>
			</tr>
            
              <tr>
			<td>PIN:</td>
			<td><input type="text" placeholder="Last Name" required name="pin" id="sgntxt"><br /></td>
			</tr>
            
              <tr>
			<td>TIN:</td>
			<td><input type="text" placeholder="Last Name" required name="tin" id="sgntxt"><br /></td>
			</tr>
            
              <tr>
			<td>Email:</td>
			<td><input type="text" placeholder="Last Name" required name="email" id="sgntxt"><br /></td>
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

