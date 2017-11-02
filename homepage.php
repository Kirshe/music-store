<?php
	session_start();
	if(!isset($_SESSION['username'])||!isset($_SESSION['password']))
        {
	   header("Location:redirect.php");
	}
	require_once('dbconfig/config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body background="imgs/bg1.jpg"><br><br><br>
	<div id="main-wrapper">
		<center><h2>Home Page</h2></center>
		<center><h3>Welcome <?php echo $_SESSION['username']; ?></h3></center>
		
		<form>
			<div class="imgcontainer">
				<img src="imgs/user.jpg" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container" align="center">
			      <a href="music.php"><button class="btn" type="button">Albums</button></a>
				  <a href="artists.php"><button class="btn" type="button">Artists</button></a>
				  <a href="singles.php"><button class="btn" type="button">Singles</button></a>
			</div>
		</form>
	</div>
</body>
</html>
