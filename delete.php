<?php
session_start();
if(!isset($_SESSION['username'])||!isset($_SESSION['password']))
{
   header("Location:redirect.php");
}
require_once('dbconfig/config.php');
@$vai2=$_POST['vai2'];
$temp=$_SESSION['username'];
$query = "delete from cart where un='$temp' and id1='$vai2'";
$query_run = mysqli_query($con,$query);
if($query_run)
    echo "deleted";
else echo "not deleted";
