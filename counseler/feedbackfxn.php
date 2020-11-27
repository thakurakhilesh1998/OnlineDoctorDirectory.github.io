<?php
    session_start();
    if(!isset($_SESSION['counseler']))
    {
        header("Location:clogin.php");
        die();
    }
    require_once '../database.php';
    $title=$_GET['title'];
    $msg=$_GET['msg'];
    $cname=$_SESSION['counseler']['name'];
    $feedback=mysqli_query($db,"INSERT INTO `feedback` (`title`,`msg`,`counseler`) VALUES ('$title','$msg','$cname')");
    if($feedback)
    {
        header("Location:feedback_form.php?pass=pass");
    }
    else
    {
        header("Location:feedback_form.php?fail=fail");
    }

?>