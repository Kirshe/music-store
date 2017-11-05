<?php
session_start();
	if(!isset($_SESSION['username'])||!isset($_SESSION['password']))
        {
	   header("Location:redirect.php");
  }
	require_once('dbconfig/config.php');
$temp=$_SESSION['username'];
@$buy22=$_POST['buy22'];
?>
<html>
<head>
<title>Payment</title>
<link rel="stylesheet" href="css/style1.css">
</head>
<body><br><br><br>
	<div id="main-wrapper">
	<center><h2>Enter payment details </h2></center>
        <form  method="post">
                                <div class="inner_container">
				<center><label><b>Username</b></label>
                                 <input type="text" name="username1" value="<?php echo "$temp"?>"></br></br>
				<input type="hidden" name="buy2" value="<?php echo "$buy22"?>">
				<label><b>Email</b></label>
				<input type="email" placeholder="Enter Email" name="email" required></br></br>
				<label><b>Address</b></label>
				<textarea name="comment" rows="2" cols="40" required></textarea></br></br>

                                <label><b>Pay by</b></label>
 			 <input type="radio" name="pp" value="cash" ><label><b>cash</b></label>
			 <input type="radio" name="pp" value="card" ><label><b>card</b></label></center></br>
				<center><button name="payment" class="btn" type="submit">Pay</button>
                                  <a href="addtocart.php"><button name="cancel" class="btn" type="button">Cancel</button></a></center>
        </div>
	</form>

         <?php
		     
                        if(isset($_POST['payment']))
			{       
                                 
                                @$buy2=$_POST['buy2'];
				$temp=$_SESSION['username'];
				@$email=$_POST['email'];
				@$comment=$_POST['comment'];
				@$pp=$_POST['pp'];
                               $query = "insert into payment(un2,id2,email,addr,pay11,date) values('$temp','$buy2','$email','$comment','$pp',now())";
                                $query_run = mysqli_query($con,$query);
                             
                                $query1 = "delete from cart where un='$temp' and id1='$buy2'";
                                $query_run = mysqli_query($con,$query1);
                                if($query_run) 
                                echo '<script type="text/javascript">alert("Payment Successful!");
                                      window.location.href="addtocart.php";
                                     </script>';
                          	
			}
                    
         ?>
			
</div>
</body>
</html>

