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
<title>list</title>
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
        history.go(-1); }
    });
  });
})
</script>
</head>
<body>

<a href="javascript:history.back()"><button class="btn" type="button">Back</button></a>
<div align="right">
<a href="index.php"><button class="btn" type="button">Log Out</button></a></div>
<div align="right">
<a href="addtocart.php"><button class="btn" type="button">Cart</button></a></div>
<?php
$artist1=$_POST['artist'];
$res=mysqli_query($con,"select * from img_display where artist like '$artist1'");
$temp=$_SESSION['username'];
$password=$_SESSION['password'];  
while($row=mysqli_fetch_array($res))
{
    ?>
  <div class='container'>
  <img src="<?php echo $row["img"];?>" height="250" width="250">
  <input id="vai" type="hidden" name="vai" value="<?php echo $row["id"];?>">
  <button id="atc" name="addcart" class="btn" type="submit">Add to Cart</button>
  </div>
  <?php
}
?>
</body>
</html>
