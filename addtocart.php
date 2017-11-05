<?php
	session_start();
	if(!isset($_SESSION['username'])||!isset($_SESSION['password']))
        {
	   header("Location:redirect.php");
  }
  require_once("dbconfig/config.php");
?>
<html>
<head>
<title>Cart</title>
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script>
$(function(){
  $("button[name=delete]").click(function(e){
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "delete.php",
      data: {
        'delete':'',
        'vai2':$(this).val()
        },
      success: function(a){
        alert("The music was "+a+" from the cart");
        location.reload() }
    });
  });
})
</script>
</head>
<body>
<a href="javascript:history.back()"><button class="btn" type="button">Back</button></a>
<div align="right">
<a href="history.php"><button class="btn" type="button">Payment History</button></a>
<a href="logout.php"><button class="btn" type="button" align="right">Log Out</button></a></div>
<?php
$res=mysqli_query($con,"select * from img_display where id in(select id1 from cart where un='".$_SESSION['username']."')");
if(mysqli_num_rows($res)>0)
  { while($row=mysqli_fetch_array($res))
   {
    ?><div class='container'>
    <img src="<?php echo $row["img"];?>" height="250" width="250">
    <button name="delete" value="<?php echo $row["id"];?>" class="btn" type="submit">Delete from cart</button>
     <form action="payment.php" method="post">
    <input id="pay" type="hidden" name="buy22" value="<?php echo $row["id"];?>">
    <button name="buy" class="btn" type="submit">Buy</button></form>
    </div>
    <?php
   }  
  }
else {?>
    <h1>Nothing in Cart</h1>
     <?php }
?>
</body>
</html>
