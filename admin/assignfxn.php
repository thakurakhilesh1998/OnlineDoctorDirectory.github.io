<?php
    session_start();
    if(!isset($_SESSION['admin']))
    {
        header("Location:adminlogin.php");
        die();
    }
    require_once '../database.php';
    $cname=$_GET['course'];
    $sub=$_GET['subject'];
    $sem=$_GET['sem'];
    $assign=$_GET['assign'];
    $assigns=mysqli_query($db,"INSERT INTO `assign`(`cname`, `sem`, `sub`, `assign`) VALUES
     ('$cname','$sem','$sub','$assign')");
    if($assigns)
    {
        header("Location:assignments.php?pass=1");
    }
    else
    {
        header("Location:assignments.php?fail=1");
    }
?>
