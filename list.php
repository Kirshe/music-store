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
  $("button[name='addcart']").click(function(e){
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "process.php",
      data: {
        'addcart':'',
        'vai':$(this).val()
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
<a href="logout.php"><button class="btn" type="button">Log Out</button></a></div>
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
  
  <button name="addcart" value="<?php echo $row["id"];?>" class="btn" type="submit">Add to Cart</button>
  </div>
  <?php
}
?>
</body>
</html>
