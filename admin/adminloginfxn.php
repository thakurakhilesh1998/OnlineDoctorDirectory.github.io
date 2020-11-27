<?php
    session_start();
    require_once '../database.php';
    $username=$_POST['user'];
    $pass=$_POST['pass'];
    $login=mysqli_query($db,"SELECT * FROM `admin` WHERE `username`='$username' AND `pwd`='$pass'");
    if(mysqli_num_rows($login)==1)
    {
        $user=mysqli_fetch_assoc($login);
        $_SESSION['admin']=$user;
        header("Location:admindashboard.php");
    }
    else
    {
        header("Location:adminlogin.php?fail=fail");
        die();
    }
?>