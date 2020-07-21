<?php
require'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADD EVENT</title>
<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body 
style="background-color:#dff9fb">
	<div id="main-wrapper">
	<center><h2>ENTER THE DETAILS FOR ADDING EVENTS</h2>
		<img src="images/img.png" class="img"></center>
	<form class="myform" action="addevent.php" method="post">
		<br>
		<label><b>
		EVENT NAME: </b> 
		</label>
		<br>
		<input name="e_name" type="text" class="inputvalues" placeholder="enter event name" required/><br>
		<label><b><br>
		EVENT DATE: </b>
		</label><br>
		<input name="e_date" type="text" class="inputvalues" placeholder="enter event date" required/><br><br>
		<label><b>
		EVENT LOCATION: </b>
		</label><br>
		<input name="e_location" type="text" class="inputvalues" placeholder="enter event location" required/><br><br>
		<label><b>
		TICKET PRICE: </b> 
		</label>
		<br>
		<input name="price" type="number" class="inputvalues" placeholder="enter ticket price" required/><br>
		<label><b><br>
		<input name="done" type="submit" id="addeventdone_btn" value="DONE"/><br>
		<a href="homepage.php"> 
		<input type="button" id="back_btn" value="BACK"/><br> </a>
	</form>
	<?php
	if(isset($_POST['done'])) {
		$e_name =$_POST['e_name'];
		$e_date =$_POST['e_date'];
        $e_location =$_POST['e_location'];
		$price =$_POST['price'];
		$query="insert into event (e_name, e_date,e_location,price) values('$e_name','$e_date','$e_location','$price')";
		$query_run=mysqli_query($con,$query);
		if($query_run){
			echo '<script type="text/javascript"> alert("event added successfully")</script>';
		}
 			else{
 				echo '<script type="text/javascript"> alert("failed to add event") </b>script>';
 			}
	}
	?>
	</div>
	</body>
	</html>