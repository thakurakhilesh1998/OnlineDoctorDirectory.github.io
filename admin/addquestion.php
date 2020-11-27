<?php
    session_start();
    if(!isset($_SESSION['admin']))
    {
        header("Location:adminlogin.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Question</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3 class="mainheading">Add Question</h3>
    </div>

    <?php if(isset($_GET['pass'])):?>
        <div class="pass">Question Added</div>
    <?php endif;?>

    <?php if(isset($_GET['fail'])):?>
        <div class="error">Duplicate question!</div>
    <?php endif;?>
    <div class="form-container">
            <form class="form" method="GET" action="addfxn.php">
                <textarea type="text" name="question" required placeholder="Enter Question" style="width: 300px;"></textarea><br>
                <input type="text" name="option1" required placeholder="Option1" style="width: 300px;"><br>
                <input type="text" name="option2" required placeholder="Option2" style="width: 300px;"><br>
                <input type="text" name="option3" required placeholder="Option3" style="width: 300px;"><br>
                <input type="text" name="option4" required placeholder="Option4" style="width: 300px;"><br>
                <input type="text" name="ans" required placeholder="Answer" style="width: 300px;"><br>
                <input type="submit" value="Add Question">
            </form>
        </div>  
        <div>
            <a href="admindashboard.php" class="backto" style="padding-bottom: 1rem;" >Back to Home</a>
        </div>
</body>
</html>