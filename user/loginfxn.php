<?php
    session_start();
    require_once '../database.php';
    $username=$_POST['user'];
    $pass=$_POST['pass'];
    $login=mysqli_query($db,"SELECT * FROM `user` WHERE `username`='$username' AND `pwd`='$pass'");
    if(mysqli_num_rows($login)==1)
    {
        $user=mysqli_fetch_assoc($login);
        $_SESSION['user']=$user;
        header("Location:userdashboard.php");
    }
    else
    {
        header("Location:login.php?fail=fail");
        die();
    }
?>