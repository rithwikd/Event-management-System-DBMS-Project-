<?php
session_start();
require'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>TICKET GENERATION</title>
<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body 
style="background-color:#dff9fb">
	<div id="main-wrapper">
	<center><h2>ENTER THE DETAILS FOR BOOKING A TICKET</h2>
	<form class="myform" action="genticket.php" method="post">
		<br>
		<label><b>
		aud id: </b> 
		</label>
		<br>
		<input name="aud_id" type="text" class="inputvalues" placeholder="enter audience id" required/><br>
		<input name="done" type="submit" id="addeventdone_btn" value="DONE"/>
		<a href="homepage.php"> 
		<input type="button" id="back_btn" value="BACK"/><br> </a>
	</form> 
	<?php
		if(isset($_POST['done'])){
			$aud_id= $_POST['aud_id'];
			$query= "insert into tickets(aud_id) values('$aud_id')";
			$query_run= mysqli_query($con,$query);
			if($query_run){
				echo '<script type="text/javascript"> alert("ticket added") </script>';
				}
			else{
				echo '<script type="text/javascript"> alert("   ") </script>';
			}
		}
		?>
	</div>
</body>
</html>
