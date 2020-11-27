<?php 
    session_start();
    if(!isset($_SESSION['user']))
    {
        header("Location:login.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take Test</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3 class="mainheading">Take Test</h3>
    </div>
    <div style="text-align: right;padding:1rem">
        <a href="userdashboard.php">Back to Dashboard</a>
    </div>
    <form class="questionlist" method="GET" action="test_result.php">
        <ol>
            <?php
            require_once '../database.php';
            $questions=mysqli_query($db,"SELECT * FROM `question`");
            while($rows=$questions->fetch_assoc()): ?>
            <li>
                <h3> <?php echo $rows['question'] ?></h3>
                <div>
                    <input type="radio" value="A" name=<?php echo $rows['qid']?>>
                    <label>A.<?php echo $rows['option1'];?></label>
                </div>
                <div>
                    <input type="radio" value="B" name=<?php echo $rows['qid']?>>
                    <label>B.<?php echo $rows['option2'];?></label>
                </div>
                <div>
                    <input type="radio" value="C" name=<?php echo $rows['qid']?>>
                    <label>C.<?php echo $rows['option3'];?></label>
                </div>
                <div>
                    <input type="radio" value="D" name=<?php echo $rows['qid']?>>
                    <label>D.<?php echo $rows['option4'];?></label>
                </div>
            </li>
            <?php endwhile; ?>
        </ol>
        <input type="submit" value="Submit Test">
    </form>
</body>
</html>