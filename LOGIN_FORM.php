<!doctype html>
<html>


    <head>
<title>
Admin Panel Login
</title>
<link rel="stylesheet" href="LOGIN_FORM.css">

</head>
    
    
    <body>
    	<header></header>
		
		<div id="logo">
		
		<img src="logo.png" style="width:400px; height=400px;">
		
		</div>
		
		<div id="fill_up">
    <table cellpadding="7">
		<tr>
			<th><form action="LOGIN_FORM_PROCESS.php"
          		method="POST"> 
				
			</th>
        </tr>
        
		<tr>
			<th>
				
				<input type="text"
           		placeHolder = "Username"
           		name="UN"
					   id="txtboxes"/><br>
					
        	</th>
		</tr>
		
		<tr>
			<th>
				<div id="text">
				<input type="password"
					   placeholder="Password"
					   name="PS"
					   id="txtboxes"/><br>
					</div>
				</th>
		</tr>
		
		<tr>
			<th>
				<input type="submit"
					   value="login"
					   id="btlogin"
					   onClick="chk_text()"/>
				</th>
		</tr>
		
		<tr>
			<td align="center">
    	
			</td>			
    </tr>
		
		
        </table>
			</div>
        
        
    </form>
        
        
        
   
    
    
    
    </body>



</html>

