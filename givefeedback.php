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
<title>feedback</title>
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script>
$(function(){
    $(".estar").click(function(){
        var x = $(this).find("input");
        var r = x.val();
        $(".estar input[type='radio']").each(function(){
            if($(this).val()<=r){
                $(this).parent().addClass("star");
            }
            else{
                $(this).parent().removeClass("star");
            }
            
        });
    });
})
</script>
</head>
<body>
<div class="menu">
  <a href="music.php"><button class="btn" type="button">Albums</button>
  <a href="artists.php"><button class="btn" type="button">Artists</button>
  <a href="singles.php"><button class="btn" type="button">Singles</button>
  <a href="search.php"><button class="btn" type="button">Search</button>
  <a href="feedback.php"><button class="btn" type="button">Feedback</button>
</div>
<a href="javascript:history.back()"><button class="btn" type="button">Back</button></a>
<div align="right">
<a href="logout.php"><button class="btn" type="button">Log Out</button></a></div>
<div align="right">
<a href="addtocart.php"><button class="btn" type="button">Cart</button></a></div>
<form action="givefeedback.php" method="post">
<div class="comment">
    <label><b>Music name</b></label><br>
	<input type="text" placeholder="Enter Music" name="name" required>
    <br><br>
    <div class="stars">
    <label><b>Rate</b></label><br>
    <div class="estar">
	<input type="radio" name="rate" value="1"> 
    </div>
    <div class="estar">
	<input type="radio" name="rate" value="2"> 
    </div>
    <div class="estar">
	<input type="radio" name="rate" value="3"> 
    </div>
    <div class="estar">
	<input type="radio" name="rate" value="4"> 
    </div>
    <div class="estar">
	<input type="radio" name="rate" value="5"> 
    </div></div>
    <br>
    <label><b>Comment</b></label><br>
	<input type="text" placeholder="Enter Comment" name="comment" required>
    <br><br>
	<center><button name="post" id="feed" class="btn" type="submit">Post</button></center>
</div>
</form>
</body>
</html>
<?php
if(isset($_POST['post'])){
    $music = $_POST['name'];
    $comment = $_POST['comment'];
    $user = $_SESSION['username'];
    $rating = $_POST['rate'];
    $sql = "select id from img_display where name like '$music'";
    $res = mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
        $row = mysqli_fetch_array($res);
        $id = $row['id'];
        $sql = "insert into feedback(music_id,username,rating,comment) values('$id','$user','$rating','$comment')";
        $res = mysqli_query($con,$sql);
        if($res){
            echo "<script>alert('Feedback posted')</script>";
        }
    }
    else{
        echo "<script>alert('Wrong name')</script>";
    }
}