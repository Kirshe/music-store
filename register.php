<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body background="imgs/bg1.jpg"><br><br><br>
	<div id="main-wrapper">
	<center><h2>Sign Up</h2></center>
		<form action="register.php" method="post">
			<div class="inner_container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<label><b>Confirm Password</b></label>
				<input type="password" placeholder="Enter Password" name="cpassword" required>
				<center><button name="register" class="btn" type="submit">Sign Up</button>
				
				<a href="index.php"><button type="button" class="btn">Back to Login</button></a></center>
			</div>
		</form>
		
		<?php
			if(isset($_POST['register']))
			{
				$username=$_POST['username'];
				$password=password_hash($_POST['password'], PASSWORD_DEFAULT);
				$cpassword=$_POST['cpassword'];
				
				if(password_verify($cpassword, $password))
				{
					$query = "select * from logint where username='$username'";
				$query_run = mysqli_query($con,$query);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
							$query = "insert into logint values('$username','$password')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								header( "Location: homepage.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
			}
		?>
	</div>
</body>
</html>
