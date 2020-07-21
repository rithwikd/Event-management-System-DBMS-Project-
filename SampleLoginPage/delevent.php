<?php
require'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>DELETE EVENT</title>
<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body 
style="background-color:#dff9fb">
	<div id="main-wrapper">
	<center><h2>ENTER THE DETAILS FOR DELETING EVENTS</h2>
		<img src="images/img.png" class="img"></center>
	<form class="myform" action="delevent.php" method="post">
		<br>
		<label><b>
			EVENT id: 
		</b>
		<input name="e_id" type="number" class="inputvalues" placeholder="enter event id" required/><br>
		<input name="done" type="submit" id="addeventdone_btn" value="DONE"/><br>
		<a href="homepage.php"> 
		<input type="button" id="back_btn" value="BACK"/><br> </a>
	</form> 
	<?php
	if(isset($_POST['done'])) {
		$e_id =$_POST['e_id'];
		$query="delete from event where e_id=$e_id";
		$query_run=mysqli_query($con,$query);
		if($query_run){
			echo '<script type="text/javascript"> alert("event deleted successfully")</script>';
			$query2="delete from artist where e_id=$e_id";
		$query_run2=mysqli_query($con,$query2);
		if($query_run2){
			echo '<script type="text/javascript"> alert("event artist deleted successfully")</script>';
			$query3="delete from audience where e_id=$e_id";
		$query_run3=mysqli_query($con,$query3);
		if($query_run3){
			echo '<script type="text/javascript"> alert("audience of that deleted successfully")</script>';
			
		}
	}
}
 			else{
 				echo '<script type="text/javascript"> alert("failed to add event") </b>script>';
 			}
	}
	?>
	</div>
	</body>
	</html>