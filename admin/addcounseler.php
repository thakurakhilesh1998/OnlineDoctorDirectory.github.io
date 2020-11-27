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
    <title>Document</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
        <div class="header">
            <h3 class="mainheading">Add Counseler</h3>
        </div>

        <?php if(isset($_GET['pass'])):?>
            <div class="pass">Counseler Registered Successfully</div>
        <?php endif;?>

        <?php if(isset($_GET['fail'])):?>
            <div class="error">User is already registered</div>
        <?php endif;?>
        <div class="form-container">
            <form class="form" method="POST" action="addcounselerfxn.php">
                <input type="text" name="cname" required placeholder="Counseler Name"><br>
                <input type="text" name="user" required placeholder="Username"><br>
                <input type="password" name="pass" required placeholder="Password"><br>
                <input type="email" name="email" required placeholder="Email Address"><br>
                <input type="number" name="phone" required placeholder="Enter Phone no"><br>
                <input type="number" name="age" required placeholder="Counseler Age"><br>
                <input type="submit" value="Admin Login">
            </form>
        </div>
        <a href="admindashboard.php" class="backto">Back to Dashboard</a>
</body>
</html>