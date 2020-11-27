<?php
    session_start();
    if(isset($_SESSION['counseler']))
    {
        header("Location:cdashboard.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counseler Login</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h3 class="mainheading">Counseler Login</h3>
    </div>
    <?php if(isset($_GET['fail'])):?>
        <div class="error">Incorrect username or password!!!</div>
    <?php endif;?>
        <div class="form-container">
            <form class="form" method="POST" action="cloginfxn.php">
                <input type="text" name="user" required placeholder="Usernama"><br>
                <input type="password" name="pass" required placeholder="Password"><br>
                <input type="submit" value="Counseler Login" style="width: 140px;">
            </form>
        </div>
        <a href="../index.php" class="backto">Back to Home</a>
    </div>
</body>
</html>