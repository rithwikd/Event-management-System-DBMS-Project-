<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body 
style="background-color:#dff9fb">
	<div id="main-wrapper">
	<center><h2>Home Page</h2>
		<h3>Welcome
			<?php echo $_SESSION['username']?>
		</h3>
		<img src="images/avatar.png" class="avatar"></center>
		<form class="myform" action="homepage.php" method="post">
			<input name="add" type="submit" id="add_btn" value="add event"/><br>
			<input name="delete" type="submit" id="del_btn" value="delete event"/><br>
			<input name="book" type="submit" id="book_btn" value="book event"/><br>
			<input name="search" type="submit" id="search_btn" value="search event"/><br>
			<input name="genticket" type="submit" id="search_btn" value="genticket"/><br>
			<input name="displayartist" type="submit" id="logout_btn" value="displayartist"/><br>
			<input name="logout" type="submit" id="logout_btn" value="logout"/><br>
		</form>
		<?php
		if(isset($_POST['logout'])){
			session_destroy();
			header('location:index.php');
		}
		if(isset($_POST['add'])){
	
			header('location:addevent.php');
		}if(isset($_POST['delete'])){
			
			header('location:delevent.php');
		}if(isset($_POST['search'])){
			
			header('location:searchevent.php');
		}if(isset($_POST['list'])){
			
			header('location:listevent.php');
		}
		if(isset($_POST['genticket'])){
	
			header('location:genticket.php');
		}if(isset($_POST['book'])){
			
			header('location:bookevent.php');
		}
		if(isset($_POST['displayartist'])){
			
			header('location:displayartist.php');
		}
	?>
	</div>
</body>	
</html>