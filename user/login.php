<?php
    session_start();
    if(isset($_SESSION['user']))
    {
        header("Location:userdashboard.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
<div class="header">
        <h3 class="mainheading">User Login</h3>
    </div>
    <?php if(isset($_GET['success'])):?>
        <div class="pass">User Registered Successfully!!!</div>
    <?php endif;?>

    <?php if(isset($_GET['pass'])):?>
        <div class="pass">Password changes successfully</div>
    <?php endif;?>

    <?php if(isset($_GET['fail'])):?>
        <div class="error">Incorrect username or password!!!</div>
    <?php endif;?>
        <div class="form-container">
            <form class="form" method="POST" action="loginfxn.php">
                <input type="text" name="user" required placeholder="Usernama"><br>
                <input type="password" name="pass" required placeholder="Password"><br>
                <input type="submit" value="User Login">
            </form>
        </div>
        <a href="../index.php" class="backto">Back to Home</a>
    </div>
</body>
</html>