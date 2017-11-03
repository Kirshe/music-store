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
<title>details</title>
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script>
$(function(){
  $("#atc").click(function(e){
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "process.php",
      data: {
        'addcart':'',
        'vai':$("#vai").val()
        },
      success: function(a){
        alert(a);
        //window.location.href = "music.php";
        history.go(-1); }
    });
  });
})
</script>
</head>
<body>
<form action="details.php" method="post">
<a href="javascript:history.back()"><button class="btn" type="button">Back</button></a>
<div align="right">
<a href="index.php"><button class="btn" type="button">Log Out</button></a></div>
<div align="right">
<a href="addtocart.php"><button class="btn" type="button">Cart</button></a></div>
<?php
@$trick1=$_POST['trick'];
$res=mysqli_query($con,"select * from img_display where id='$trick1'");
$temp=$_SESSION['username'];
$password=$_SESSION['password'];  
$row=mysqli_fetch_array($res);
?>
  <div class='container'>
  <img src="<?php echo $row["img"];?>" height="250" width="250">
  <p><?php echo $row["name"];?></p>
  <input id="vai" type="hidden" name="vai" value="<?php echo $row["id"];?>">
  <button id="atc" name="addcart" class="btn" type="submit">Add to Cart</button>
  </div>
</form>
<?php
$req = mysqli_query($con,"select * from music_details where name like '".$row['name']."'");
$fetch = mysqli_fetch_array($req);
?>
  <div class="video"><?php echo $fetch["link"]; ?></div>
  <div class="details">
  <h2><?php echo $fetch["name"]; ?></h2>
  <p><?php echo $fetch["text"]; ?></p>
  </div>
</body>
</html>
