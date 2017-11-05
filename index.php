<?php
	session_start();
	require_once('dbconfig/config.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body><br><br><br>
	<div id="main-wrapper">
	<center><h2>Login</h2></center>
		<form action="index.php" method="post">
		
			<div class="inner_container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<center><button class="btn" name="login" type="submit">Login</button>
				<a href="register.php"><button type="button" class="btn">Register</button></a></center>
			</div>
		</form>
		
		<?php
			if(isset($_POST['login']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				$query = "select password from logint where username='$username'";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				$storedpass = $query_run->fetch_assoc();
				if(password_verify($password, $storedpass['password']))
				{
					
					#$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					$_SESSION['password'] = True;
					
					header( "Location: homepage.php");
				}
				else
				{
					echo '<script type="text/javascript">alert("Invalid Credentials")</script>';
				}
				
			}
			else
			{
				#echo "<script>alert('Database error')</script>";
			}
		?>
		
	</div>
</body>
</html>
