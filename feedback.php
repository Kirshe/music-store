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
<title>comments</title>
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
<div class="menu">
<a href="music.php"><button class="btn" type="button">Albums</button>
<a href="artists.php"><button class="btn" type="button">Artists</button>
<a href="singles.php"><button class="btn" type="button">Singles</button>
<a href="search.php"><button class="btn" type="button" >Search</button>
<a href="feedback.php"><button class="btn" type="button" style="border-style:inset; background-color:white">Feedback</button>
</div>
<a href="javascript:history.back()"><button class="btn" type="button">Back</button></a>
<div align="right">
<a href="logout.php"><button class="btn" type="button">Log Out</button></a></div>
<div align="right">
<a href="addtocart.php"><button class="btn" type="button">Cart</button></a></div>
  <a href="givefeedback.php"><button class="btn" type="button">Give Feedback</button></a>
<?php
  $res = mysqli_query($con,"select * from feedback");
  while($row=mysqli_fetch_array($res))
  {
      ?>
      <div class="feedback">
      <p><?php $musicid=$row['music_id'];
            $name = mysqli_query($con,"select name,img from img_display where id='$musicid'");
            $result = $name->fetch_assoc();
            echo $result['name']."</p>"; 
            echo "<p><img src=".$result['img']." height='90px' width='90px'>";
            ?></p>
        <?php for($i=0; $i < $row['rating']; $i++){
           echo  "<img src='imgs/star.ico' height='30px' width='30px'>";
        }?>
      <p><?php echo $row['comment']?></p>
      <p align="right"><?php echo "-".$row['username'];?></P>
      </div>
      <?php
  }
  ?>
</body>
</html>