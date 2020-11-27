<?php
    session_start();
    if(!$_SESSION['admin'])
    {
        header("Location:adminlogin.php");
        die();
    }

    require_once '../database.php';
    $ename=$_GET['ename'];
    $detail=$_GET['edetail'];
    $date=date("Y/m/d");
    $events=mysqli_query($db,"INSERT INTO `events`(`ename`, `edetails`, `edate`) 
    VALUES ('$ename','$detail','$date')");
    if($events)
    {
        header("Location:events.php?e=pass");
    }
    else
    {
        header("Location:events.php?f=f");
    }
?>