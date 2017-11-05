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
<title>history</title>
<link rel="stylesheet" href="css/style1.css">
</head>
<body>
<a href="javascript:history.back()"><button class="btn" type="button">Back</button></a>

<?php
$res=mysqli_query($con,"select * from payment where un2='".$_SESSION['username']."'");

   
  if(mysqli_num_rows($res)>0)
   {
   while($row=mysqli_fetch_array($res))
   {
    echo "<div class='music'>";
     $query="select * from img_display where id='".$row["id2"]."'";
     if ($result = mysqli_query($con,$query)) 
	{
       $row2= mysqli_fetch_assoc($result);
        echo "<div class='container'>";
      echo "<p>";?><img src="<?php echo $row2["img"];?>" height="250" width="250"><?php echo "</p>"; 
  
      echo "<p>"; echo $row2["name"];   echo "</p>";
      
   echo "</div>";
         }
        ?></br>
       <h3>Delivered at:<?php echo $row["addr"];?></h3>
       <h3>Payment by:<?php echo $row["pay11"];?></h3>
       <h3>Buy on date:<?php echo $row["date"];?></h3>
       <?php
       echo "</div>";
      }
    }
    else {?>
    <h1>No Purchase yet.</h1>
     <?php }

?>
</body>
</html>
