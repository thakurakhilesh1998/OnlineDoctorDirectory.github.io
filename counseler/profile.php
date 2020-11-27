<?php
    session_start();
    if(!isset($_SESSION['counseler']))
    {
        header("Location:clogin.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View/Edit Profile</title>
    <link href="../style/style.css?v=<?php echo time()?>" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header">
            <h3 class="mainheading">View/Edit Profile</h3>
        </div>
        <?php if(isset($_GET['pass'])):?>
            <div class="pass">User Updated Successfully</div>
        <?php endif;?>

        <?php if(isset($_GET['fail'])):?>
            <div class="pass">User Updation Failed</div>
        <?php endif;?>
    <div class="form-container">
            <form class="form" method="POST" action="updatefxn.php">
                <label>Counseler Name</label><br>
                <input type="text" name="cname" value=<?php echo $_SESSION['counseler']['name']?> required placeholder="Counseler Name"><br>
                <label>Counseler Username</label><br>
                <input type="text" name="user" value=<?php echo $_SESSION['counseler']['username']?> required placeholder="Username" readonly><br>
                <label>Counseler Email</label><br>
                <input type="email" name="email" value=<?php echo $_SESSION['counseler']['email']?> required placeholder="Email Address"><br>
                <label>Counseler Contact No</label><br>
                <input type="number" name="phone" value=<?php echo $_SESSION['counseler']['phone']?> required placeholder="Enter Phone no"><br>
                <label>Counseler Age</label><br>
                <input type="number" name="age" value=<?php echo $_SESSION['counseler']['Age']?> required placeholder="Counseler Age"><br>
                <input type="submit" value="Update Details">
            </form>
        </div>
        <div class="backto" style="padding-bottom: 1rem;">
            <a href="cdashboard.php">Back to Dashboard</a>
        </div>
</body>
</html>