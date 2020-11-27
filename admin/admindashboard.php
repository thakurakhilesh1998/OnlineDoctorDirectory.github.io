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
    <title>Admin Dashboard</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3 class="mainheading">Admin Dashboard</h3>
    </div>
    <div style="text-align: right;padding:1rem">
        <a href="adminlogout.php">Admin Logout</a>
    </div>
    <div class="admin_fxn">
        <a href="addcounseler.php">Add Counseler</a>
        <a href="viewfeedback.php">View Counseler Feedback</a>
        <a href="userprofiles.php">View User Profile</a>
        <a href="addquestion.php">Add Questions</a>
    </div>
    <div class="admin_fxn">
        <a href="assignments.php">Add Assignments</a>
        <a href="events.php">Add Events</a>
        <a href="book.php">Add Books</a>
    </div>
    <a href="../index.php" class="backto">Back to Home</a>
</body>
</html>