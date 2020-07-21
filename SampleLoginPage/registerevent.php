<body 
style="background-color:#dff9fb">
	<div id="main-wrapper">
	<center><h2>Registration Form</h2>
		<img src="images/img.png" class="img"></center>
	<form class="myform" action="register.php" method="post">
		<br>
		<label><b>
		name: </b> 
		</label>
		<br>
		<input name="aud_name" type="text" class="inputvalues" placeholder="enter your name" required/><br>
		<label><b><br>
		event id: </b>
		</label><br>
		<input name="e_id" type="number" class="inputvalues" placeholder="enter event id" required/><br><br>
		event name: </b>
		</label><br>
		<input name="e_name" type="text" class="inputvalues" placeholder="enter event name" required/><br>
		<input name="registeraud" type="submit" id="addeventdone_btn" value="registeraud"/><br>
		<a href="homepage.php"> 
		<input type="button" id="back_btn" value="BACK"/><br> </a>
	</form>
	<?php
	if(isset($_POST['registeraud'])) {
		$aud_name =$_POST['aud_name'];
		$e_id =$_POST['e_id'];
        $e_name =$_POST['e_name'];
        $query1="select e_id from event where e_id='$e_id'";
        $query_run1=mysqli_query($con,$query);
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
	?>
	</div>
	</body>
	</html>
