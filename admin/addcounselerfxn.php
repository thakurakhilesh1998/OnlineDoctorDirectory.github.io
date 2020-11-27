<?php
    require_once '../database.php';
    $cname=$_POST['cname'];
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    $no=$_POST['phone'];
    $age=$_POST['age'];
    $addcounseler=mysqli_query($db,"INSERT INTO `counseler` (`username`,`pwd`,`name`,`email`,`phone`,`Age`) 
    VALUES ('$user','$pass','$cname','$email','$no','$age')");
    if($addcounseler)
    {
        header("Location:addcounseler.php?pass=pass");
    }
    else
    {
        header("Location:addcounseler.php?fail=fail");
    }
?>