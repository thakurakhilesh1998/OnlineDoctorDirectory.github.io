<?php
    require_once '../database.php';
    $quesiotn=$_GET['question'];
    $option1=$_GET['option1'];
    $option2=$_GET['option2'];
    $option3=$_GET['option3'];
    $option4=$_GET['option4'];
    $ans=$_GET['ans'];
    $addq=mysqli_query($db,"INSERT INTO `question` (`question`, `option1`, `option2`, `option3`, `option4`, `answer`, `qid`)
    VALUES ('$quesiotn','$option1','$option2','$option3','$option3','$option4','$ans')");
    if($addq)
    {
        header("Location:addquestion.php?pass=pass");
    }
    else
    {
        header("Location:addquestion.php?fail=fail");
    }
?>