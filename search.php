<?php
	session_start();
	if(!isset($_SESSION['username'])||!isset($_SESSION['password']))
        {
	   header("Location:redirect.php");
  }
  require_once('dbconfig/config.php');

?>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="menu">
<a href="music.php"><button class="btn" type="button">Albums</button>
<a href="artists.php"><button class="btn" type="button">Artists</button>
<a href="singles.php"><button class="btn" type="button">Singles</button>
<a href="search.php"><button class="btn" type="button"  style="border-style:inset; background-color:white">Search</button>
<a href="feedback.php"><button class="btn" type="button">Feedback</button>
</div>

<div align="right">
<a href="logout.php"><button class="btn" type="button">Log Out</button></a></div>
<div align="right">
<a href="addtocart.php"><button class="btn" type="button">Cart</button></a></div>
<center><form action="search.php" method="post">
   <input type="text" placeholder="Search" name="search">
  <button class="btn" type="button">Search</button></form></center>
<?php
if(isset($_POST['search'])){
@$search=$_POST['search'];
$res=mysqli_query($con,"select * from img_display where name like '%$search%'");
if(mysqli_num_rows($res)>0)
  {
  echo "<div class='music'>"; 
   while($row=mysqli_fetch_array($res))
   {
   echo "<div class='container'>";
   echo "<p>";?><img src="<?php echo $row["img"];?>" height="250" width="250"><?php echo "</p>"; 
  
   echo "<p>"; echo $row["name"];   echo "</p>";
   echo "<p>";?> 
    <form action="details.php" method="post">
    <input type="hidden" name="trick" value="<?php echo $row["id"];?>"> 
    <button name="detail" class="btn" type="submit">Details</button>
     </form>
   <?php echo "</p>";
   echo "</div>";
   }
echo "</div>";
    }
else echo "<h1>Not Found</h1>";
  }
?>

</body>
</html>
