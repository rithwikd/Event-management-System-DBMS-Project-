<?php
session_start();
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
	<center><h2>ENTER THE EVENT NAME FOR DISPLAYING ARTIST OF THAT EVENT</h2>
		<img src="images/img.png" class="img"></center>
	<form class="myform" action="displayartist.php" method="post">
		<br>
		<label><b>
		EVENT NAME: </b> 
		</label>
		<br>
		<input name="e_name" type="text" class="inputvalues" placeholder="enter event name" required/><br>
		<input name="done" type="submit" id="addeventdone_btn" value="DONE"/>
		<a href="homepage.php"> 
		<input type="button" id="back_btn" value="BACK"/><br> </a>
	</form> 
	<table>
		<tr>
			<th>artist name</th>
			<th>event name</th>
		</tr>
	<?php
		if(isset($_POST['done'])){
			$e_name= $_POST['e_name'];
			$query= "select a_name,e_name from artist where e_name='$e_name'";
			$query_run= mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0){
				while($row=$query_run->fetch_assoc()){
					echo "<tr><td>".$row["a_name"]."</td><td>".$row["e_name"]."</td></tr>";
				}
				echo"</table>";
			}
			else{
				echo '<script type="text/javascript"> alert("invalid event name") </script>';
			}
		}
		?>
	</table>
	</div>
</body>
</html>

