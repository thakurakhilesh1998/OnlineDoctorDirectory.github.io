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
    <title>Change Password</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3 class="mainheading">Change Password</h3>
    </div>
    <?php if(isset($_GET['match'])):?>
        <div class="error">Entered old password does not match with original password!!!</div>
    <?php endif;?>
    <?php if(isset($_GET['error'])):?>
        <div class="error">Password changes fail!!!</div>
    <?php endif;?>
    <div class="form-container">
        <form class="form" method="POST" action="logoutfxn.php">
            <input type="password" name="oldpass" required placeholder="Old Password"><br>
            <input type="password" name="newpass" required placeholder="New Password"><br>
            <input type="submit" value="Change Password">
        </form>
    </div> 
    
    <div class="backto">
        <a href="userdashboard.php">Back to dashboard</a>
    </div>
</body>
</html>