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
    <title>Add Events</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
<div class="header">
        <h3 class="mainheading">Add Events</h3>
    </div>
    <?php if(isset($_GET['e'])):?>
        <div class="pass">
            Event added successfully
        </div>
    <?php endif;?>
    <?php if(isset($_GET['f'])):?>
        <div class="error">
            Error while adding Events
        </div>
    <?php endif;?>
    <div class="form-container">
            <form class="form" method="GET" action="eventfxn.php">
                <input type="text" name="ename" required placeholder="Event Name"><br>
                <textarea type="text" name="edetail" rows="4" required placeholder="Event Details"></textarea><br>
                <input type="submit" value="Add Event">
            </form>
        </div>

        <div class="backto" style="padding: 1rem;">
            <a href="admindashboard.php">Back To Dashboard</a>
        </div>
</body>
</html>