<?php
    session_start();
    if(!isset($_SESSION['counseler']))
    {
        header("clogin.php");
        die();
    }
    $name=$_POST['cname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    echo $name;
    echo $email;
    echo $phone;
    echo $age;
    $username=$_SESSION['counseler']['username'];
    require_once '../database.php';
    $update=mysqli_query($db,"UPDATE `counseler` SET `name`='$name',`email`='$email',`phone`='$phone',`Age`='$age' WHERE `username`='$username'");
    if($update)
    {
        header("Location:profile.php?pass=pass");
    }
    else
    {
        header("Location:profile.php?fail=fail");
    }
?>