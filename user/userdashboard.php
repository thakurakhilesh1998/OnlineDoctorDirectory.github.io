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
    <title>User Dashboard</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3 class="mainheading">User Dashboard</h3>
    </div>
    <?php  if(isset($_GET['testpass'])):?>
        <div class="pass"> Test Submitted Successfully</div>
    <?php endif; ?>

    <?php  if(isset($_GET['testfail'])):?>
        <div class="error"> Test submission Failed</div>
    <?php endif; ?>

    <div style="text-align: right;padding:1rem;">
        <a href="uchangepass.php" style="margin-right: 1rem;">Change Passowrd</a>
        <a href="ulogout.php">User Logout</a>
    </div>
    <div class="admin_fxn">
        <a href="taketest.php">Take Test</a>
        <a href="viewprofile.php">View Profile</a>
        <a href="viewtestscore.php">Test Score</a>
    </div>
    <div class="admin_fxn">
        <a href="viewassign.php">View Assignments</a>
        <a href="viewevents.php">View Events</a>
        <a href="viewbooks.php">View Books</a>
    </div>
    <div class="backto">
        <a href="../index.php">Back to Home</a>
    </div>
</body>
</html>