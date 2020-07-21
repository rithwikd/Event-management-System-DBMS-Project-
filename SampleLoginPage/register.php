<?php
require'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body 
style="background-color:#dff9fb">
	<div id="main-wrapper">
	<center><h2>Registration Form</h2>
		<img src="images/img.png" class="img"></center>
	<form class="myform" action="register.php" method="post">
		<br>
		<label><b>
		USERNAME: </b> 
		</label>
		<br>
		<input name="username" type="text" class="inputvalues" placeholder="your username" required/><br>
		<label><b><br>
		PASSWORD: </b>
		</label><br>
		<input name="password" type="password" class="inputvalues" placeholder="your password" required/><br><br>
		<label><b>
		CONFIRM PASSWORD: </b>
		</label><br>
		<input name="cpassword" type="password" class="inputvalues" placeholder="confirm password" required/><br><br>
		<input name="submit_btn" type="submit" id="signup_btn" value="signup"/><br>
		<a href="index.php"> 
		<input type="button" id="back_btn" value="back"/><br> </a>
	</form> 
<?php
if (isset($_POST['submit_btn'])) {
	//echo '<script type="text/javascript"> alert("signup button clicked"); </script>';
	$username =$_POST['username'];
	$password =$_POST['password'];
	$cpassword =$_POST['cpassword'];

	if ($password==$cpassword) {
		$query= "select * from user WHERE username='$username'";

		$query_run =mysqli_query($con,$query);

		if (mysqli_num_rows($query_run)>0){
			//there is already a user with same username
			echo '<script type="text/javascript"> alert("user already exists try another username"); </script>';
		}
		else 
		{
			$query= "insert into user values ('$username','$password')";
			$query_run =mysqli_query($con,$query);

			if ($query_run) {
				echo '<script type="text/javascript"> alert("go to login page"); </script>';
			}
			else {
				echo '<script type="text/javascript"> alert("error"); </script>';
			}
		}
	}
	else{
		echo '<script type="text/javascript"> alert("password does not match"); </script>';
	}
}
?>
</div>
</body>
</html>