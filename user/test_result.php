<?php
    session_start();
    if(!isset($_SESSION['user']))
    {
        header("Location:login.php");
        die();
    }
    require_once('../database.php');
    $name=$_SESSION['user']['name'];
    $userid=$_SESSION['user']['rollno'];
    $_query=mysqli_query($db,"SELECT * FROM `question`");
    $correct=0;
    $total=0;
    while($row=$_query->fetch_assoc())
    {
        if($_GET[$row['qid']]==$row['answer'])
        {
            $correct++;
        }
        $total++;
    }

    $addtest=mysqli_query($db,"INSERT INTO `testresult` (`name`,`userid`,`Total Question`,`Correct Answer`) 
    VALUES('$name','$userid','$total','$correct')");

    if($addtest)
    {
        header("Location:userdashboard.php?testpass=pass");
    }
    else
    {
        header("Location:userdashboard.php?testfail=fail");
    }
?>