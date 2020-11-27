<?php
    session_start();
    if(!isset($_SESSION['user']))
    {
        header("Location:login.php");
        die();
    }

    if($_SESSION['user']['pwd']!=$_POST['oldpass'])
    {
        header("Location:uchangepass.php?match=no");
        die();
    }

    $pass=$_POST['newpass'];
    $rollno=$_SESSION['user']['rollno'];
    require_once '../database.php';
    $getpass=mysqli_query($db,"UPDATE `user` SET `pwd`='$pass' WHERE `rollno`='$rollno'");
    if($getpass)
    {
        unset($_SESSION['user']);
        header("Location:login.php?pass=success");
    }
    else
    {
        header("Location:userdashboard.php?error=fail");
    }
?>
