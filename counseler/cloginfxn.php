<?php 
    require_once '../database.php';
    session_start();
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $clogin=mysqli_query($db,"SELECT * FROM `counseler` WHERE `username`='$user' AND `pwd`='$pass'");
    if(mysqli_num_rows($clogin)==1)
    {
        $user=mysqli_fetch_assoc($clogin);
        $_SESSION['counseler']=$user;
        header("Location:cdashboard.php");
        die();
    }
    else
    {
        header("Location:clogin.php?fail=fail");
        die();
    }
?>