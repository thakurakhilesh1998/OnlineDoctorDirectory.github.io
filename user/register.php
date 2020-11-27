<?php
    require_once '../database.php';
    $name=$_POST['name'];
    $rollno=$_POST['rollno'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    $course=$_POST['course'];
    $sem=$_POST['sem'];
    $gender=$_POST['gender'];
    $registeruser=mysqli_query($db,"INSERT INTO `user`(`rollno`, `username`, `name`, `email`, `Course`, `pwd`, `sem`, `gender`) 
    VALUES ('$rollno','$username','$name','$email','$course','$pass','$sem','$gender')");
    if($registeruser)
    {
        header("Location:login.php?success=pass");
    }
    else
    {
        header("Location:user registration.php?fail=fail");
    }
?>