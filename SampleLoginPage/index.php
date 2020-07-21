<?php
session_start();
require'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body 
style="background-color:#dff9fb">
	<div id="main-wrapper">
	<center><h2>Login Page</h2>
		<img src="images/avatar.png" class="avatar"></center>
	<form class="myform" action="index.php" method="post">
		<br>
		<label><b>
			USERNAME: </b>
		</label>
		<br>
		<input name="username" type="text" class="inputvalues" placeholder="type your username" required/><br>
		<label><b><br>
			PASSWORD: </b>
		</label><br>
		<input name="password" type="password" class="inputvalues" placeholder="type your password" required /><br><br>
		<input name="login" type="submit" id="login_btn" value="login"/><br>
		<a href="register.php">
		<input type="button" id="register_btn" value="register"/><br> </a>
	</form>
	<?php
	if (isset($_POST['login'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query="select * from user where username='$username' AND password='$password'";
		$query_run= mysqli_query($con,$query);
		if (mysqli_num_rows($query_run)>0) {
			//valid
			$_SESSION['username']=$username;
			header('location:homepage.php');
		}
		else{
			//invalid
			echo '<script type="text/javascript"> alert("invalid credentials"); </script>';
		}
	}
	?> 
</div>
</body>
</html>