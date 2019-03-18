<!DOCTYPE html>
<html>
  <head>
    <title>CMART Login</title>
	
	<!-- Skrip CSS -->
   <link rel="stylesheet" href="assets/css/loginn.css"/>
  
  </head>	
  <body>
	<div class="container">
		<div class="login">
	      <form action="login_proses.php" method="post">
			<h2><center>CMART Login</center></h2><hr/>		
			
			<label>Username :</label>
			<input id="username" name="username" placeholder="username" type="text">
			
			<label>Password :</label>
			<input id="password" name="password" placeholder="**********" type="password">
			
			<input type="submit" name="submit" id="submit" value="Login">
		  </form>
		</div>
   </div>
 
  </body>
</html>