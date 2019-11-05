<html>
<head>
<title>User Login</title>
</head>
<body>
  <h2>User Login </h2>
  <form name="login" method="post" action="processaLogin.php">
   Username: <input type="text" name="username"><br>
   Password: <input type="password" name="password"><br>
  
   <input type="submit" name="submit" value="Login!">
  </form>
</body>
<?php
   if(isset($_GET["error"])) {
	  $error=$_GET["error"]; 
	  switch($error) {
		  case 1:
		       echo "Usuari o Password incorrectes";
		  break;
		  
		  default:
			  echo "Error en validar usuari";
      }
  	     
   }

?>
</html>
