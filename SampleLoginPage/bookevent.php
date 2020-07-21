<?php
require'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>BOOK EVENT</title>
<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body 
style="background-color:#dff9fb">
	<div id="main-wrapper">
	<center><h2>ENTER THE DETAILS FOR BOOKING EVENTS</h2>
		<img src="images/img.png" class="img"></center>
	<form class="myform" action="bookevent.php" method="post">
		<br>
		<label><b>
			EVENT NAME: 
		</b>
		</label>
		<select class="e_name" name="e_name">
			<option value="kenny sebastian show">kenny sebastian show</option>
			<option value="kpop concert">kpop concert</option>
			<option value="sunburn festival">sunburn festival</option>
			<option value="kathak recital">kathak recital</option>
			<option value="food festival">food festival</option>
			<option value="photography">photography</option>
			<option value="art workshop">art workshop</option>
			<option value="bollywood dance workshop">bollywood dance workshop</option>
			<option value="yoga workshop">yoga workshop</option>
			<option value="comic con">comic con</option>

		</select><br>
		<label><b>
		name: </b> 
		</label>
		<br>
		<input name="aud_name" type="text" class="inputvalues" placeholder="enter your name" required/><br>
		<label><b><br>
		event id: </b>
		</label><br>
		<input name="e_id" type="number" class="inputvalues" placeholder="enter event id" required/><br><br>
		<input name="done" type="submit" id="addeventdone_btn" value="DONE"/><br>
		<a href="homepage.php"> 
		<input type="button" id="back_btn" value="BACK"/><br> </a>
	</form> 
	<?php
if (isset($_POST['done'])) {
	$aud_name =$_POST['aud_name'];
		$e_id =$_POST['e_id'];
        $e_name =$_POST['e_name'];
        $query1="select e_id from event where e_id='$e_id'";
        $query_run1=mysqli_query($con,$query1);
        if(mysqli_num_rows($query_run1)>0)
		{		
			$query="insert into audience(aud_name,e_id,e_name) values('$aud_name','$e_id','$e_name')";
			$query_run=mysqli_query($con,$query);
		if($query_run){
			echo '<script type="text/javascript"> alert("audience registered successfully")</script>';
		}
 			else{
 				echo '<script type="text/javascript"> alert("failed to register audience") </b>script>';
 			}
	}
}
