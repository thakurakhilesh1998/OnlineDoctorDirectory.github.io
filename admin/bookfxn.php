<?php
    session_start();
    if(!$_SESSION['admin'])
    {
        header("Location:adminlogin.php");
        die();
    }

    require_once '../database.php';
    $course=$_GET['course'];
    $sem=$_GET['sem'];
    $sub=$_GET['subject'];
    $book=$_GET['book'];
    $events=mysqli_query($db,"INSERT INTO `books`(`bname`, `bsem`, `bcourse`,`bsun`) 
    VALUES ('$book','$sem','$course','$sub')");
    if($events)
    {
        header("Location:book.php?e=pass");
    }
    else
    {
        header("Location:book.php?f=f");
    }
?>