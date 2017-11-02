<?php
session_start();
if(!isset($_SESSION['username'])||!isset($_SESSION['password'])){
   header("Location:redirect.php");
}
require_once('dbconfig/config.php');
$temp=$_SESSION['username'];
$password=$_SESSION['password'];  
if(isset($_POST['addcart'])){
    @$vai=$_POST['vai'];
    $query = "select * from cart where un='$temp' and id1='$vai'";
    $query_run = mysqli_query($con,$query);
    if($query_run){
        if(mysqli_num_rows($query_run)>0)
            echo 'Already added to cart!';
        else{
            $query = "insert into cart(un,id1) values('$temp','$vai')";
            $query_run = mysqli_query($con,$query);
            if($query_run)
                echo 'Added to cart successfully';
        }
    }
}