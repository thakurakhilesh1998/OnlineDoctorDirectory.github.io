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
    <title>Add Assignments</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3 class="mainheading">Add Assignments</h3>
    </div>
    <?php if(isset($_GET['pass'])):?>
        <div class="pass"> Assignment Added Successfully!!!</div>
    <?php endif;?>

    <?php if(isset($_GET['fail'])):?>
        <div class="error"> Assignment Addion Failed!!!</div>
    <?php endif;?>
    <div class="form-container">
            <form class="form" method="GET" action="assignfxn.php">
                <input type="text" name="course" required placeholder="Enter Course Name"><br>
                <input type="text" name="sem" required placeholder="Semester"><br>
                <input type="text" name="subject" required placeholder="Enter Subject"><br>
                <input type="text" name="assign" required placeholder="Assignment"><br>
                <input type="submit" style="width: 140px;" value="Add Assignment">
            </form>
        </div>
        <div class="backto">
            <a href="admindashboard.php">Back to Dashboard</a>
        </div>
</body>
</html>