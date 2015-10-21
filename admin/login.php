<?php
  session_start();
?>
<html>
  <head>
    <title>Login</title>
    <!--#include virtual="include.html" -->

    <style type="text/css">
    	input{
    		width: 200px;
    		text-align: center;
    		margin: 0 auto;
    	}
    </style>
  </head>
  <body>

  <div class="centerText">
  	<div class="spacer"></div>
  	<h1 class="centerText">LOG IN FORM</h1>
    <form method="POST">
  		<p>Username: <input type="text" name="username"/></p>
  		<p>Password: <input type="password" name="password"/></p>
  		<div class="spacerTiny"></div>
  		<input type="submit" value="Login">
    </form>
  </div>
	
    <?php
	include "scripts/db.php";
	
    if (isset($_POST['username']) && isset($_POST['password'])) {
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];

		$request = "SELECT * FROM Users WHERE username = '" . $_SESSION['username'] . "' AND password = '" . $_SESSION['password'] . "';";
		
		$result = mysqli_query($db_connection, $request);
		
		if($result === FALSE) {
			die(mysql_error());
		}
		
		if (mysqli_num_rows($result) > 0) {
			echo "login successful";
			$_SESSION['valid'] = true;
			header("Location: index.php");
			exit();
		}
		else {
			echo "<div class='error'>Invalid username and password combination. <br /></div>";
		}
    }
  ?>
  </body>
</html>