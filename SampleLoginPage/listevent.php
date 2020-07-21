<?php
require'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>listing events</title>
<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body 
style="background-color:#dff9fb">
	<div id="main-wrapper">
	<center><h2>Listing events</h2>
		<img src="images/img.png" class="img"></center>
	<form class="myform" action="listevent.php" method="post">
		<br> 
		<input name="listevents" type="submit" id="addeventdone_btn" value="listevents"/>
		<a href="homepage.php"> 
		<input type="button" id="back_btn" value="back"/><br> </a>
	</form> 
	<table>
		<tr>
			<th>event id</th>
			<th>event name</th>
			<th>event date</th>
			<th>event location</th>
			<th>price</th>
		</tr>
	<?php
		if(isset($_POST['listevents'])){
			
			$query= "CALL `list_events`()";
			$query_run= mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0){
				while($row=$query_run->fetch_assoc()){
					echo "<tr><td>".$row["e_id"]."</td><td>".$row["e_name"]."</td><td>".$row["e_date"]."</td><td>".$row["e_location"]."</td><td>".$row["price"]."</td></tr>";
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